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
            error_reporting(0);
            include 'koneksi.php';
            $no = mysqli_query($koneksi, "SELECT *FROM berita ORDER BY id_berita DESC");
            $kode = mysqli_fetch_array($no);
            $kd = $kode['id_berita'];
            $urut = substr($kd,6,3);
            $tambah = (int) $urut+1;
            $t = date ('y');
            $d  =date('d');
            $m = date('m');

            if(strlen($tambah)==1){
                $format = $t.$d.$m."00".$tambah;
            } elseif(strlen($tambah) ==2){
                $format = $t.$d.$m."0".$tambah;
            }else{
                $format = $t.$d.$m.$tambah;
            }
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
        if (isset($_POST['submit'])){
            $id_berita = $_POST['id_berita'];
            $tanggal = $_POST['tanggal'];
            $uraian_berita = $_POST['uraian_berita'];
            $sumber = $_POST['sumber'];
           

            $save =mysqli_query($koneksi, "INSERT INTO berita 
            (id_berita,tanggal,uraian_berita,sumber)
            VALUES ('$id_berita','$tanggal','$uraian_berita','$sumber')"); 
        }
   
      ?>  
</body>
</html>