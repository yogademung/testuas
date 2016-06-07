<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
include "konektor.php";
$id_pelanggan=$_POST['id_pelanggan'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];
$query=mysql_query("update pelanggan set username='$username', password='$password', nama='$nama', email='$email', alamat='$alamat', hp='$hp' where id_pelanggan='$id_pelanggan'");
if($query) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= tampil.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

</body>
</html>