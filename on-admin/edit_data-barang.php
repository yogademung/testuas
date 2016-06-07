<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
</head>

<body>
 <?php
 
include "konektor.php";
$id_barang=$_POST['id_barang'];
$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];
$berat=$_POST['berat'];


$query=mysql_query("update barang set nama='$nama', deskripsi='$deskripsi', harga='$harga', berat='$berat' where id_barang='$id_barang'");
if($query) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= tampil-barang.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

</body>
</html>