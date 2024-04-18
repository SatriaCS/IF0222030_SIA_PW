<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <title>Edit Data</title>
</head>
<body>
<?php
require_once "app/Mhsw.php";

 $mhsw = new Mhsw();
 $rows = $mhsw->edit($_GET['id']);

?>

<form action="app/proses.php?aksi=update" method="post">
    
    <?php foreach ($rows as $row) { ?>
        <center>
            <input type="hidden" name="id" value="<?php echo $row['mhsw_id']; ?>" >
            
            <label for="nim"><h3>nim</h3></label>
            <input id="nim" type="text" name="nim" value="<?php echo $row['mhsw_nim']; ?>">
            
            <label for="nama"><h3>nama</h3></label>
            <input id="nama" type="text" name="nama" value="<?php echo $row['mhsw_nama']; ?>">
            
            <label for="alamat"><h3>alamat</h3></label>
            <input id="alamat" type="text" name="alamat" value="<?php echo $row['mhsw_alamat']; ?>">
            <br>
            <br>
            <input class="btn-green" type="submit" value="Update">
        </center>
    <?php }?>
    </table>
</form>
</body>
</html>
