<?php

 require_once "app/Mhsw.php";

 $mhsw = new Mhsw();
 $rows = $mhsw->tampil();

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <title>Data Mahasiswa</title>
 </head>
 <body>
     
        <a href="input.php" class="btn-green">Tambah Data</a>
        <table class="tbl">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($rows as $row) { 
                
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['mhsw_id']; ?>" class="btn-blue">Edit</a>
                    <a href="app/proses.php?id=<?php echo $row['mhsw_id']; ?>&aksi=hapus" class="btn-red">Hapus</a>
                </td>
            </tr>
    
        <?php } ?>
        </table>
        
 </body>
 </html>

