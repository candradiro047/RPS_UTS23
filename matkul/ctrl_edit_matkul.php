<?php
include('../config.php');

// cek tombol simpan
if(isset($_POST['edit'])){

    // ambil data dari form
    $nik = $_POST['nik'];
    $nm_dos = $_POST['nm_dos'];
    $nm_mk = $_POST['nm_mk'];
    $bb_mk = $_POST['bb_mk'];

    // buat query update
    $sql = "UPDATE matkul SET nik='$nik', nm_dos='$nm_dos', nm_mk='$nm_mk', bb_mk='$bb_mk' WHERE nik='$nik'";
    $query = mysqli_query($koneksi, $sql);

    // query update berhasil?
    if( $query ) {
        // kalau berhasil menampilkan status=sukses
        header('location:view_matkul.php');
    } else {
        // kalau gagal tampilkan pesan
        die('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}
?>