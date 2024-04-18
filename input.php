<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <title>Tambah Data</title>
</head>
<body>
    <center>
        <form action="app/proses.php?aksi=tambah" method="post">
            <label for="nim"><h3>Nim</h3></label>
            <input id="nim" type="text" name="nim">
            <br>
            <label for="nama"><h3>Nama</h3></label>
            <input id="nama" type="text" name="nama">
            <br>
            <label for="alamat"><h3>Alamat</h3></label>
            <input id="alamat" type="text" name="alamat">
            <br>
            <br>
            <input type="submit" class="btn-green"  value="Simpan">
        </form>
    </center>
</body>
</html>