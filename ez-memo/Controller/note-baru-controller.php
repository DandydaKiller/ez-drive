<?php
include 'koneksi.php';
session_start();
$isi = $_POST['isi'];
$judul = $_POST['judul'];
$id_user = $_SESSION['id_user'];

if($judul == null || $isi == null){
    //echo "data kosong";
    header("Location:../note-baru.php?pesan=kosong");
}else{
    //echo $isi. "  ".$judul;
    mysqli_query($koneksi,"INSERT INTO memo (judul_memo,isi_memo,id_user) VALUES ('$judul','$isi',$id_user)");
    echo $koneksi->error;
    header("Location:../home.php?pesan=berhasil");
}