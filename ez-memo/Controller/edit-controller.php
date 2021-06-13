<?php
include 'koneksi.php';
session_start();
$isi = $_POST['isi'];
$judul = $_POST['judul'];
$id_memo = $_GET['id_note'];
$sql = "UPDATE memo SET judul_memo = '$judul', isi_memo = '$isi' WHERE id_memo=$id_memo";
mysqli_query($koneksi, $sql);
echo $koneksi->error;
header("Location:../detail.php?id_note=$id_memo");