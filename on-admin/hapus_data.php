  
<?php
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="belibaru1"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$id_pelanggan=$_POST['id_pelanggan'];
  
$delete = "DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";  
$hasil = mysql_query($delete);  
  
if ($hasil){  
//header ('location:view.php');  
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan id $id_pelanggan Berhasil dihapus </p> </center> </b> </font>   
  
 <meta http-equiv='refresh' content='2; url= Tampil.php'/>  ";  
} else { echo "Data gagal dihapus";  
}
?>

