<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login dan Resgister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../LOGIN/style.css">
</head>
<body>
    <section class="wrapper">
        <div class="form Login">
            <header>tambah matkul</header>
            <form action="controller_matkul.php" method="POST">
                <label for="materi">nik dosen:</label>
                <input type="text" placeholder="nik" name="nik" required/>
                <label for="materi">nama dosen:</label>
                <input type="text" placeholder="nama dosen" name="nm_dos" required/>
                <label for="materi">nama Matakuliah:</label>
                <input type="text" placeholder="nama matakuliah" name="nm_mk" required/>
                <label for="pertemuan">bobot Matakuliah:</label>
                <input type="text" placeholder="bobot Matakuliah" name="bb_mk" required/>
                <input style='background-color: #610C9F' type="submit" name="daftar"value="tambah">
                <input style='background-color: #610C9F' type="submit" name="tidak jadi"value="tidak jadi" onclick= "window.location.href='../view/dosen.php'">

            </form>
        </div>
    </section>
</body>
</html>