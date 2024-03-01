<?php
session_start();
include('dbcon.php');

if (isset($_SESSION['verified_user_id'])) {

    if (isset($_SESSION['verified_admin'])) {
        
        $uid = $_SESSION['verified_user_id'];
        $idTokenString = $_SESSION['idTokenString'];

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);

            $claims = $auth->getUser($uid)->customClaims;
                if (isset($claims['admin']) == true) {
            

                }
                else {
                    header("Location: Logout.php");
                    exit(0);
                }
            //echo "working";
        } catch (InvalidToken $e) {
            //echo 'The token is invalid: '.$e->getMessage();
            $_SESSION['expiry_status'] = "Token expired/invalid, login lagi !";
            header('Location: logout.php');
            exit();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
            $_SESSION['expiry_status'] = "Token expired/invalid, login lagi !";
            header('Location: logout.php');
            exit();
        }
    }
    else {
        $_SESSION['status'] = "Hanya Admin yang dapat mengakses halaman ini";
        header("Location: {$_SERVER["HTTP_REFERER"]}");
        exit();
    }



} else {
    $_SESSION['status'] = "Login untuk mengakses halaman ini";
    header('Location: login.php');
    exit();

}



?>