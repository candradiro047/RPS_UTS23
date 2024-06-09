<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-primary fixed-top">
    <div class="container-fluid bg-primary p-2 text-white">
        <a class="navbar-brand" padding-top= "78px" href="#">
        <img src="../logo_amikom.PNG" padding-top= "78px" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Halaman Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">DAFTAR MENU</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../dashboard.php">HOME</a>
            </li>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               MATA KULIAH
                </a>
                <ul class="dropdown-menu dropdown-menu">
                <li><a class="dropdown-item" href="../matkul/input_matkul.php">TAMBAH MATA KULIAH</a></li>
                <li><a class="dropdown-item" href="../matkul/view_matkul.php">LIHAT MATA KULIAH</a></li>
            </li>
            </ul>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MATERI
                </a>
                <ul class="dropdown-menu dropdown-menu">
                <li><a class="dropdown-item" href="input_materi.php">TAMBAH MATERI</a></li>
                <li><a class="dropdown-item" href="view.php">LIHAT MATERI</a></li>
            </li>
            </ul>
            <form class="d-flex pt-2">
                <a class="btn btn-danger" href="./LOGIN/form_login.php" type="submit">Log Out</a>
            </form>
        </div>
        </div>
    </div>
    </nav>
    <h1 class="pt-5 mt-5 text-center">MATERI</h1>
    <div class='container'>
    
    <br>
    
    <table class="table table-hover">
        <thead>
            <tr class="tr">
                <th class="satu">No</th>
                <th>nik</th>
                <th>tanggal</th>
                <th>materi</th>
                <th>pertemuan</th>
                <th>deskripsi</th>
                <th>Mau Diapain</th>
            </tr>
        </thead>
        <tbody>
        
            <?php

            include('../config.php');
            $sql = "SELECT * FROM materi";
            $query = mysqli_query($koneksi, $sql);
            $nomor = 1;
            while($materi = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$nomor."</td>";
                echo "<td>".$materi['nik']."</td>";
                echo "<td>".$materi['tanggal']."</td>";
                echo "<td>".$materi['materi']."</td>";
                echo "<td>".$materi['pertemuan']."</td>";
                echo "<td>".$materi['deskripsi']."</td>";
                echo "<td>";
                echo "<a href='form_edit_materi.php?nik=".$materi['nik']."'>Edit</a> | ";
                echo "<a href='controller_hapus.php?nik=".$materi['nik']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>