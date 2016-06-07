  
<?php
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="belibaru1"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];
$berat=$_POST['berat'];
$kondisi=$_POST['kondisi'];
$fileName = $_FILES['gambar']['name'];
$lokasi=$_FILES['gambar']["tmp_name"];
$direktori="image/";

$input=mysql_query("INSERT INTO barang (nama, deskripsi, harga, berat, kondisi, gambar) VALUES ('$nama', '$deskripsi', $harga, '$berat', '$_POST[kondisi]', '$fileName')");

move_uploaded_file($lokasi, $direktori.$fileName);

if($input) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= tampil-barang.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}

///cek sudah terinput atau belum
?>

