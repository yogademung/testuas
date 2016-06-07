<?php
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="belibaru1"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];
$ekspedisi=$_POST['ekspedisi'];
$art_url=$_POST['art_url'];

///input ke tabel pengunjung
$input=mysql_query("INSERT INTO pesan (alamat, hp, ekspedisi, art_url, date) VALUES ('$alamat', '$hp', '$_POST[ekspedisi]', '$art_url', NOW())");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Terimakasih Sudah Berbelanja di Beli Baru Store </p><p>Silakan Transfer Sesuai
Dengan yang Tercantum di Bagian Deskripsi, Beserta 3 Digit Konfirmasi</p> </center> </b> </font>   
  <meta http-equiv='refresh' content='13; url= index.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

