<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Data Berita</title>
</head>
<body>

    <h1 style="text-align: center;">Data Berita</h1>
    <a href="/crud-php/index.php">HOME</a><br>
    <a href= "./berita/tambah_berita.php">Tambah Berita</a>
    <table border="1px" width="80%">
    <tr>
        <td>id_berita</td> 
        <td>tanggal</td> 
        <td>uraian_berita</td> 
        <td>sumber</td> 
     
        <td>opsi</td> 
        
</tr>
<td>
    <?php
    include "koneksi.php";
    $query =mysqli_query($koneksi, "SELECT *FROM berita ORDER BY id_berita");

    while ($row = mysqli_fetch_array($query)) {
   
    ?>
    <tr>
 
    <td><?= $row['id_berita']; ?></td>
    <td><?= $row['tanggal']; ?></td>
    <td><?= $row['uraian_berita']; ?></td>
    <td><?= $row['sumber']; ?></td>
    <td>
        <a href="./berita/edit.php?id_berita=<?= $row ['id_berita'];?>">edit</a>
        <a href="./berita/delete.php?id_berita=<?= $row ['id_berita'];?>" onclick ="return confirm ('Apakah anda yakin mau hapus ?')">delete</a>
    </td>
<?php }?>
</td>
    </table>

</body>
</html>