<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Update Berita</title>
</head>
<body>
    <form action="" method="POST">
     <?php
     include ("../koneksi.php");
        $id_berita = $_GET['id_berita'];
        $query ="SELECT * FROM berita WHERE id_berita=$id_berita";
        $sql = mysqli_query($koneksi, $query);
        $data_awal = mysqli_fetch_assoc($sql);
        ?>
        <fieldset>
            <legend>Update</legend>
            <table>
                <tr>
                    <td>id_berita</td>
                    <td></td>
                    <td><input type="text" name="id_berita" placeholder="Masukan id_berita" value="<?= $data_awal['id_berita']?>"></td>
                </tr>
                <tr>
                    <td>tanggal</td>
                    <td></td>
                    <td><input type="date" name="tanggal" placeholder="Masukan tanggal"value="<?=$data_awal['tanggal']?>"></td>
                </tr>
                <tr>
                    <td>uraian_berita</td>
                    <td></td>
                    <td><input type="text" name="uraian_berita" placeholder="Masukan uraian_berita"value="<?=$data_awal['uraian_berita']?>"></td>
                </tr>
                <tr>
                    <td>sumber</td>
                    <td></td>
                    <td><input type="text" name="sumber" placeholder="Masukan sumber"value="<?= $data_awal['sumber']?>"></td>
                </tr>
            
                
                    <td>
                        <input type= "submit" name="submit" value="Update">
                        
                    </td>
</tr>
    <tr>
        <td><a href="/crud-php/berita.php">kembali ke menu berita </a></td>
    </tr>
            </table>
        </fieldset>
    </form>
        <?php
    
    if (isset($_POST['submit'])){
        $id_berita = $_POST['id_berita'];
        $tanggal = $_POST['tanggal'];
        $uraian_berita = $_POST['uraian_berita'];
        $sumber = $_POST['sumber'];
       

    $save =mysqli_query($koneksi, "UPDATE berita SET tanggal='$tanggal',uraian_berita='$uraian_berita',sumber='$sumber'
        WHERE id_berita='$id_berita'"); 
    if( $save ) {
        header('Location: /crud-php/berita.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
            }  
        
        
        
      ?>  
</body>
</html>