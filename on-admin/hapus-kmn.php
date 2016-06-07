  
<?php
$server="mysql.idhostinger.com"; ///nama server
$username="u417082856_root"; ///nama username mysql
$password="yogabilang12"; 
$database="u417082856_beli1"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$id=$_POST['id'];
  
$delete = "DELETE FROM coment WHERE id = '$id'";  
$hasil = mysql_query($delete);  
  
if ($hasil){  
//header ('location:view.php');  
echo " <center> <b> <font color = 'red' size = '4'> <p> Komentar Dengan ID $id Berhasil di Hapus </p> </center> </b> </font>   
  
 <meta http-equiv='refresh' content='2; url= komen.php'/>  ";  
} else { echo "Data gagal dihapus";  
}
?>

