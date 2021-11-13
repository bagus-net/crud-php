<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Update Jenis Berita</title>
</head>
<body>
    <form action="" method="POST">
     <?php
     include 'koneksi.php';
        $id_jenis_berita = $_GET['id_jenis_berita'];
        $query = mysqli_query($koneksi, "SELECT * FROM jenis_berita ORDER BY id_jenis_berita=$id_jenis_berita");
        $row = mysqli_fetch_array($query);
    ?>   
        <fieldset>
            <legend>Update</legend>
            <table>
                <tr>
                    <td>id_jenis_berita</td>
                    <td></td>
                    <td><input type="text" name="id_jenis_berita" placeholder="Masukan id_jenis_berita" value="<?= $id_jenis_berita;?>"readonly></td>
                </tr>
                <tr>
                    <td>nama_jenis</td>
                    <td></td>
                    <td><input type="text" name="nama_jenis" placeholder="Masukan nama_jenis"value="<?= $row['nama_jenis'];?>"></td>
                </tr>
            
                
                    <td>
                        <input type= "submit" name="submit" value="Update">
                        
                    </td>
</tr>
    <tr>
        <td><a href="jenis_berita.php">kembali ke menu jenis Berita </a></td>
    </tr>
            </table>
        </fieldset>
    </form>
        <?php
    
    if (isset($_POST['submit'])){
        $id_jenis_berita = $_POST['id_jenis_berita'];
        $nama_jenis = $_POST['nama_jenis'];
       

    $save =mysqli_query($koneksi, "UPDATE jenis_berita SET nama_jenis='$nama_jenis'
        WHERE id_jenis_berita='$id_jenis_berita'"); 
    }
        
        
        
        
      ?>  
</body>
</html>