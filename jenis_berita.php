<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Jenis Berita</title>
</head>
<body>

    <h1 style="text-align: center;">Jenis Berita</h1>
    <a href="tambah_jenis_berita.php">Tambah Jenis Berita</a>
    <table border="1px" width="80%">
    <tr>
        <td>no</td> 
        <td>id_jenis_berita</td> 
        <td>nama_jenis</td> 
        <td>opsi</td> 
        
</tr>
<td>
    <?php
    include 'koneksi.php';
    $query =mysqli_query($koneksi, "SELECT *FROM jenis_berita ORDER BY id_jenis_berita");
    $nojb=0;
    while ($row = mysqli_fetch_array($query)) {
        $nojb++; 
    ?>
    <tr>
    <td><?= $nojb;?></td>
    <td><?= $row['id_jenis_berita']; ?></td>
    <td><?= $row['nama_jenis']; ?></td>
    <td>
        <a href="edit_jenis.php?id_jenis_berita=<?= $row ['id_jenis_berita'];?>">edit</a>
        <a href="delete_jenis.php?id_jenis_berita=<?= $row ['id_jenis_berita'];?>" onclick ="return confirm ('Apakah anda yakin mau hapus ?')">delete</a>
    </td>
<?php }?>
</td>
    </table>

</body>
</html>