<?php
include('../../koneksi.php'); // include our database connection

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"INSERT INTO user(username, password) VALUES ('$username', '$password')");

if($data){
	header("location:../index.php?pesan=register");
}
?>