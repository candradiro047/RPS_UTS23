<?php
include('../config.php');

// cek tombol daftar
if(isset($_POST['daftar'])){

    // ambil data dari form
    $nik = $_POST['nik_dosen'];
    $tanggal = $_POST['tanggal'];
    $materi = $_POST['materi'];
    $pertemuan = $_POST['pertemuan'];
    $deskripsi = $_POST['deskripsi'];
    

    // buat query
    $sql = "INSERT INTO materi (nik, tanggal, materi, pertemuan, deskripsi) VALUE ('$nik','$tanggal','$materi','$pertemuan','$deskripsi')";
    $query = mysqli_query($koneksi, $sql);

    // query simpan sudah berhasil
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:./view.php?status=sukses');
    } else {
        // kalau gagal menampilkan status=gagal
        header('location:form_add.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>