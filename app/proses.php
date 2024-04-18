<?php
require_once "Mhsw.php";

$mhsw = new Mhsw();
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$mhsw->input($_POST['nim'],$_POST['nama'],$_POST['alamat']);
 	header("location:../index.php");
 }else if ($aksi == "hapus") {
    $mhsw->hapus($_GET['id']);
    header("location:../index.php");
 }else if ($aksi == "update") {
    $mhsw->update($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("location:../index.php");
}