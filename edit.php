<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Tambah Berita</title>
</head>
<body>
    <form action="" method="POST">
     <?php
     include 'koneksi.php';
        $id_berita = $_GET['id_berita'];
        $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita=$id_berita");
     ?>   
        <fieldset>
            <legend>Tambah Berita</legend>
            <table>
                <tr>
                    <td>id_berita</td>
                    <td></td>
                    <td><input type="text" name="id_berita" placeholder="Masukan id_berita" value="<?= $format;?>"readonly></td>
                </tr>
                <tr>
                    <td>tanggal</td>
                    <td></td>
                    <td><input type="date" name="tanggal" placeholder="Masukan tanggal"></td>
                </tr>
                <tr>
                    <td>uraian_berita</td>
                    <td></td>
                    <td><input type="text" name="uraian_berita" placeholder="Masukan uraian_berita"></td>
                </tr>
                <tr>
                    <td>sumber</td>
                    <td></td>
                    <td><input type="text" name="sumber" placeholder="Masukan sumber"></td>
                </tr>
            
                
                    <td>
                        <input type= "submit" name="submit" value="Save">
                        <input type= "reset" name="reset" value="cancel">
                    </td>
</tr>
    <tr>
        <td><a href="index.php">kembali ke menu berita </a></td>
    </tr>
            </table>
        </fieldset>
    </form>
        <?php
    
            $id_berita = $_POST['id_berita'];
            $tanggal = $_POST['tanggal'];
            $uraian_berita = $_POST['uraian_berita'];
            $sumber = $_POST['sumber'];
           

            $save =mysqli_query($koneksi, "INSERT INTO berita 
            (id_berita,tanggal,uraian_berita,sumber)
            VALUES ('$id_berita','$tanggal','$uraian_berita','$sumber')"); 
        
        
        
        
      ?>  
</body>
</html>