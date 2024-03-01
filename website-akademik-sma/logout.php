<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

if (isset($_SESSION['verified_admin'])) {
    unset($_SESSION['verified_admin']);
    $_SESSION['status'] = "Logout sukses";
}
elseif (isset($_SESSION['verified_guru'])) {
    unset($_SESSION['verified_guru']);
    $_SESSION['status'] = "Logout sukses";
}
elseif (isset($_SESSION['verified_siswa'])) {
    unset($_SESSION['verified_siswa']);
    $_SESSION['status'] = "Logout sukses";
}

if(isset($_SESSION['expiry_status'])){
    $_SESSION['status'] = "Sesi Berakhir";
}
else{
    $_SESSION['status'] = "Berhasil Logout";
}
header('Location: login.php');
exit();

?>