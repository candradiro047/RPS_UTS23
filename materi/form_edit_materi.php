<?php
include("../config.php");

$nik = $_GET['nik'];

$sql = mysqli_query($koneksi,"SELECT * FROM materi WHERE nik='$nik'");
$materi = mysqli_fetch_assoc($sql);

if( mysqli_num_rows($sql) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UBAH MATAKULIAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
  </head>
  <body>
    <div class="container d-md-flex position-absolute top-50 start-50 translate-middle justify-content-center">
      <div class="card mb-3">
        <div class="card-body">
          <h4 class="card-title pt-2 pb-2 text-center"><strong>Ubah Materi</strong></h4>
          <hr>
          <form action="controller_edit.php" method="POST">
            <div class="mb-3">
              <label for="kode" class="form-label">nik :</label>
              <input type="text" name="nik" class="form-control" value="<?php echo $materi['nik'] ?>">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">tanggal :</label>
              <input type="text" name="tanggal" class="form-control" value="<?php echo $materi['tanggal'] ?>">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">materi :</label>
              <input type="text" name="materi" class="form-control" value="<?php echo $materi['materi'] ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">pertemuan :</label>
              <input type="text" name="pertemuan" class="form-control" value="<?php echo $materi['pertemuan'] ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">deskripsi :</label>
              <input type="text" name="deskripsi" class="form-control" value="<?php echo $materi['deskripsi'] ?>">
            </div>
            <div class="d-flex gap-3 justify-content-center">
              <button type="submit" class="btn btn-primary" name="edit">Ubah</button>
              <button type="button" class="btn btn-primary" onclick="window.location.href='view.php'">Tidak Jadi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>