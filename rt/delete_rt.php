<?php
include ("../koneksi.php");
$id_rt =$_GET['id_rt'];

$delete_jenis = mysqli_query($koneksi, "DELETE FROM rt WHERE id_rt=$id_rt");
header("location:/crud-php/rt.php");

?>