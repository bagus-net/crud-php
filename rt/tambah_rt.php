<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Tambah RT  </title>
</head>
<body>
    <form action="" method="POST">
        <?php
            error_reporting(0);
            include ("../koneksi.php");
            $nort = mysqli_query($koneksi, "SELECT *FROM rt ORDER BY id_rt DESC");
            $kodert = mysqli_fetch_array($nort);
            $kdrt = $kodert['id_rt'];
            $urutrt = substr($kdrt,6,3);
            $tambahrt = (int) $urutrt+1;
            $t = date ('y');
            $d  =date('d');
            $m = date('m');

            if(strlen($tambahrt)==1){
                $format = $t.$d.$m."00".$tambahrt;
            } elseif(strlen($tambahrt) ==2){
                $format = $t.$d.$m."0".$tambahrt;
            }else{
                $format = $t.$d.$m.$tambahrt;
            }
        ?>
        <fieldset>
            <legend>Tambah RT</legend>
            <table>
                <tr>
                    <td>id_rt</td>
                    <td></td>
                    <td><input type="text" name="id_rt" placeholder="Masukan id_rt" value="<?= $format;?>"readonly></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td></td>
                    <td><input type="text" name="alamat" placeholder="Masukan alamat"></td>
                </tr>
                    <td>
                        <input type= "submit" name="submit" value="Save">
                        <input type= "reset" name="reset" value="cancel">
                    </td>
</tr>
    <tr>
        <td><a href="/crud-php/rt.php">kembali ke menu RT </a></td>
    </tr>
            </table>
        </fieldset>
    </form>
        <?php
        if (isset($_POST['submit'])){
            $id_rt = $_POST['id_rt'];
            $alamat = $_POST['alamat'];
           

            $save =mysqli_query($koneksi, "INSERT INTO rt 
            (id_rt,alamat)
            VALUES ('$id_rt','$alamat')"); 

if( $save ) {
    header('Location: /crud-php/rt.php?status=sukses');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
        }
            
        
        
        
        
      ?>  
</body>
</html>