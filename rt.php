<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>RT</title>
</head>
<body>

    <h1 style="text-align: center;">RT</h1>
    <a href="/crud-php/index.php">HOME</a><br>
    <a href="./rt/tambah_rt.php">Tambah Rt</a>
    <table border="1px" width="80%">
    <tr>
       
        <td>id_rt</td> 
        <td>alamat</td> 
        <td>opsi</td> 
        
</tr>
<td>
    <?php
    include 'koneksi.php';
    $query =mysqli_query($koneksi, "SELECT *FROM rt ORDER BY id_rt");
    
    while ($row = mysqli_fetch_array($query)) {
    
    ?>
    <tr>
   
    <td><?= $row['id_rt']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td>
        <a href="./rt/edit_rt.php?id_rt=<?= $row ['id_rt'];?>">edit</a>
        <a href="./rt/delete_rt.php?id_rt=<?= $row ['id_rt'];?>" onclick ="return confirm ('Apakah anda yakin mau hapus ?')">delete</a>
    </td>
<?php }?>
</td>
    </table>

</body>
</html>