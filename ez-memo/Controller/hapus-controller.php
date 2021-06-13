<?php
include 'koneksi.php';
$id_memo = $_GET['id_note'];
$sql = "DELETE FROM memo WHERE id_memo = $id_memo";
mysqli_query($koneksi, $sql);
header("Location:../home.php");
?>