  
<?php
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="belibaru1"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$hp=$_POST['hp'];

///input ke tabel pengunjung
$input=mysql_query("INSERT INTO pelanggan (username, password, nama, email, alamat, gender, hp) VALUES ('$username', '$password', '$nama', '$email', '$alamat', '$_POST[gender]', '$hp')");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $username Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= index.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

