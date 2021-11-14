<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" contant="width=devide-width, initial-scale=1.0">
    <title>Update RT</title>
</head>
<body>
    <form action="" method="POST">
     <?php
     include ("../koneksi.php");
        $id_rt = $_GET['id_rt'];
        $query ="SELECT * FROM rt WHERE id_rt=$id_rt";
        $sql = mysqli_query($koneksi, $query);
        $data_awal = mysqli_fetch_assoc($sql);
    ?>   
        <fieldset>
            <legend>Update</legend>
            <table>
                <tr>
                    <td>id_RT</td>
                    <td></td>
                    <td><input type="text" name="id_rt" placeholder="Masukan id_rt" value="<?=$data_awal['id_rt']?>"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td></td>
                    <td><input type="text" name="alamat" placeholder="Masukan alamat"value="<?=$data_awal['alamat']?>"></td>
                </tr>
            
                
                    <td>
                        <input type= "submit" name="submit" value="Update">
                        
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
       

    $save =mysqli_query($koneksi, "UPDATE rt SET alamat='$alamat'
        WHERE id_rt='$id_rt'"); 
    if( $save ) {
        header('Location: /crud-php/rt.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
            }
        
        
        
        
      ?>  
</body>
</html>