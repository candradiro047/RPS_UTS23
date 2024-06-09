<?php
include('../config.php');

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
    $query = "DELETE FROM matkul WHERE nik = $nik";

    if (mysqli_query($koneksi, $query)) {
        header('location:view_matkul.php?=berhasil');
    } else {
        echo "Gagal menghapus" . mysqli_error($koneksi);
    }
}