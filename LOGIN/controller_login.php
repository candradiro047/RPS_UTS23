<?php

include ('../config.php');

$username = $_POST['email'];
$password = $_POST['pswd'];

if(!empty($username)&& !empty($password)) {
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email= '$username' AND password= '$password'");

        $result = mysqli_num_rows($query);
        if ($result>0){
            header("location:../dashboard.php");
        }else{
            header("location: ./form_login.php?app=gagal");
        }
}else{
    header("location: ./form_login.php?app=error");
}