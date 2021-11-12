<?php
include 'koneksi.php';
$id_berita =$_GET['id_berita'];

$delete = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita=$id_berita");
header("location:index.php");

?>