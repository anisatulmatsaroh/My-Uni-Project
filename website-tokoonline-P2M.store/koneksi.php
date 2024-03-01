<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "p2m.store";

$koneksi = mysqli_connect($host,$user, $pass, $db);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
