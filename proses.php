<?php
include 'aksi.php';
$db = new aksi();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	header("location:index.php");
}elseif($aksi == "cari"){
 	$db->cari($_POST['nama']);
 	header("location:cari.php");
 }

?>
