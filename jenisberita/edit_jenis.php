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
     include ("../koneksi.php");
        $id_jenis_berita = $_GET['id_jenis_berita'];
        $query ="SELECT * FROM jenis_berita WHERE id_jenis_berita=$id_jenis_berita";
        $sql = mysqli_query($koneksi, $query);
        $data_awal = mysqli_fetch_assoc($sql);
    ?>      
        <fieldset>
            <legend>Update</legend>
            <table>
                <tr>
                    <td>id_jenis_berita</td>
                    <td></td>
                    <td><input type="text" name="id_jenis_berita" placeholder="Masukan id_jenis_berita" value="<?= $data_awal['id_jenis_berita']?>"></td>
                </tr>
                <tr>
                    <td>nama_jenis</td>
                    <td></td>
                    <td><input type="text" name="nama_jenis" placeholder="Masukan nama_jenis"value="<?= $data_awal['nama_jenis']?>"></td>
                </tr>
            
                
                    <td>
                        <input type= "submit" name="submit" value="Update">
                        
                    </td>
</tr>
    <tr>
        <td><a href="/crud-php/jenis_berita.php">kembali ke menu jenis Berita </a></td>
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
    if( $save ) {
        header('Location: /crud-php/jenis_berita.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
            }
        
        
        
        
      ?>  
</body>
</html>