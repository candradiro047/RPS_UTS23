<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "uts";

$koneksi = mysqli_connect($server, $user, $password, $db);
if (!$koneksi) {
    die("Ada masalah koneksi" . mysqli_connect_error());
} else {
    echo "";
}

?>