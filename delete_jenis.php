<?php
include 'koneksi.php';
$id_jenis_berita =$_GET['id_jenis_berita'];

$delete_jenis = mysqli_query($koneksi, "DELETE FROM jenis_berita WHERE id_jenis_berita=$id_jenis_berita");
header("location:jenis_berita.php");

?>