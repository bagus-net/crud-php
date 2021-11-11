<?php
  $host  = "localhost"; 
  $user = "root";
  $pass = "";
  $db = "data_desa"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("tidak bisa koneksi ke database");
  }

  // else
 //  {
   // echo("terkoneksi gaes");
  // }
?>
