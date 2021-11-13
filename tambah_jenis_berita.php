<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Tambah Jenis Berita  </title>
</head>
<body>
    <form action="" method="POST">
        <?php
            error_reporting(0);
            include 'koneksi.php';
            $nojb = mysqli_query($koneksi, "SELECT *FROM jenis_berita ORDER BY id_jenis_berita DESC");
            $kodejb = mysqli_fetch_array($nojb);
            $kdjb = $kodejb['id_jenis_berita'];
            $urutjb = substr($kdjb,6,3);
            $tambahjb = (int) $urutjb+1;
            $t = date ('y');
            $d  =date('d');
            $m = date('m');

            if(strlen($tambahjb)==1){
                $format = $t.$d.$m."00".$tambahjb;
            } elseif(strlen($tambahjb) ==2){
                $format = $t.$d.$m."0".$tambahjb;
            }else{
                $format = $t.$d.$m.$tambahjb;
            }
        ?>
        <fieldset>
            <legend>Tambah Jenis Berita</legend>
            <table>
                <tr>
                    <td>id_jenis_berita</td>
                    <td></td>
                    <td><input type="text" name="id_jenis_berita" placeholder="Masukan id_jenis_berita" value="<?= $format;?>"readonly></td>
                </tr>
                <tr>
                    <td>nama_jenis</td>
                    <td></td>
                    <td><input type="text" name="nama_jenis" placeholder="Masukan nama_jenis"></td>
                </tr>
                    <td>
                        <input type= "submit" name="submit" value="Save">
                        <input type= "reset" name="reset" value="cancel">
                    </td>
</tr>
    <tr>
        <td><a href="jenis_berita.php">kembali ke menu jenis berita </a></td>
    </tr>
            </table>
        </fieldset>
    </form>
        <?php
        if (isset($_POST['submit'])){
            $id_jenis_berita = $_POST['id_jenis_berita'];
            $nama_jenis = $_POST['nama_jenis'];
           

            $save =mysqli_query($koneksi, "INSERT INTO jenis_berita 
            (id_jenis_berita,nama_jenis)
            VALUES ('$id_jenis_berita','$nama_jenis')"); 
        }
            
        
        
        
        
      ?>  
</body>
</html>