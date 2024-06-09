<?php
include("../config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
$query = mysqli_query($koneksi, $sql);

if( $query ) {
    header('location:../login/form_login.php?status=sukses');
} else {
    echo "gagal, silahkan coba kembali";
}