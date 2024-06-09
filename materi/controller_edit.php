<?php
include('../config.php');

// cek tombol simpan
if(isset($_POST['edit'])){

    // ambil data dari form
    $nik = $_POST['nik'];
    $tanggal = $_POST['tanggal'];
    $materi = $_POST['materi'];
    $pertemuan = $_POST['pertemuan'];
    $deskripsi = $_POST['deskripsi'];

    // buat query update
    $sql = "UPDATE materi SET nik='$nik', tanggal='$tanggal', materi='$materi', pertemuan='$pertemuan', deskripsi='$deskripsi' WHERE nik='$nik'";
    $query = mysqli_query($koneksi, $sql);

    // query update berhasil?
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:view.php');
    } else {
        // kalau gagal tampilkan pesan
        die('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}
?>