<?php
session_start();
include('dbcon.php');

if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $clearTextPassword = $_POST['pass'];

    try {
        $user = $auth->getUserByEmail("$email");

        try{
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');

                $claims = $auth->getUser($uid)->customClaims;
                if (isset($claims['admin']) == true) {
                    $_SESSION['verified_admin'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;

                }elseif (isset($claims['guru']) == true) {
                    $_SESSION['verified_guru'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;

                }elseif (isset($claims['siswa']) == true) {
                    $_SESSION['verified_siswa'] = true;
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                    
                }elseif ($claims == null) {
                    $_SESSION['verified_user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                }

                
                $_SESSION['status'] = "Login Berhasil";
                header('Location: home.php');
                exit();


            } catch (InvalidToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: '.$e->getMessage();
            }

        }
        catch(Exception $e){
            $_SESSION['status'] = "Password salah.";
            header('Location: login.php');
            exit();
        }


    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        //echo $e->getMessage();
        $_SESSION['status'] = "Invalid Email.";
        header('Location: login.php');
        exit();
    }
}
else{
    $_SESSION['status'] = "Not allowed";
    header('Location: login.php');
    exit();
}

?>