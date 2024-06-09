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
            <header>TAMBAH MATERI</header>
            <form action="controller_materi.php" method="POST">
                <label for="materi">nik :</label>
                <input type="text" placeholder="nik_dosen" name="nik_dosen" required/>
                <label for="materi">tanggal:</label>
                <input type="text" placeholder="tanggal" name="tanggal" required/>
                <label for="materi">materi:</label>
                <input type="text" placeholder="materi" name="materi" required/>
                <label for="pertemuan">pertemuan:</label>
                <input type="text" placeholder="pertemuan" name="pertemuan" required/>
                <label for="exampleFormControlTextarea1">deskripsi:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required></textarea>
                <input style='background-color: #610C9F' type="submit" name="daftar"value="tambah">
                <input style='background-color: #610C9F' type="submit" name="tidak jadi"value="tidak jadi" onclick= "window.location.href='view.php'">

            </form>
        </div>
    </section>
</body>
</html>