<?php
include('../config.php');

// cek tombol daftar
if(isset($_POST['daftar'])){

    // ambil data dari form
    $nik = $_POST['nik'];
    $nm_dos = $_POST['nm_dos'];
    $nm_mk = $_POST['nm_mk'];
    $bb_mk = $_POST['bb_mk'];
    

    // buat query
    $sql = "INSERT INTO matkul (nik, nm_dos, nm_mk, bb_mk) VALUE ('$nik','$nm_dos','$nm_mk','$bb_mk')";
    $query = mysqli_query($koneksi, $sql);

    // query simpan sudah berhasil
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:view_matkul.php?status=sukses');
    } else {
        // kalau gagal menampilkan status=gagal
        header('location:form_add.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>