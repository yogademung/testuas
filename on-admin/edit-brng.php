<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data Barang</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<h2> Edit Data Barang </h2>
<hr>
 <?php
include "konektor.php";
$id_barang=$_GET['id_barang'];
$query=mysql_query("select * from barang where id_barang=$id_barang");
?>
<?php
while($data=mysql_fetch_array($query)){
?>
<form action="edit_data-barang.php" method="post" name="edit" class="form form-group-sm">
<table class="table table-condensed">
<input type="hidden" name="id_barang" value="<?php echo $id_barang;?>"/>
<tr>
<td>Nama Barang</td><td><input type="text" name="nama" value="<?php echo $data['nama'];?>" required="required" /></td>
</tr>
<tr>
<td>Deskripsi</td>
<td><input type="text" name="deskripsi" value="<?php echo $data['deskripsi'];?>"></td>
</tr>
<tr>
<td>Harga</td>
<td><input type="text" name="harga" value="<?php echo $data['harga'];?>"></td>
</tr>
<tr>
<td>Berat(Kg)</td>
<td><input type="text" name="berat" value="<?php echo $data['berat'];?>"></td>
</tr>
<tr>
<!--<td>Kondisi</td>
<td><input type="radio" name="kondisi" id="Baru" value="Baru" checked="1" required>Baru
<input type="radio" value="Bekas" name="kondisi" id="Bekas" required>Bekas</td></tr>
</tr>-->

<tr><td><input type="submit" class="btn btn-primary" value="Simpan" name="simpan" /></td>
</tr>
<?php
}
?>
</table>
</form>
 
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
                <p class="mbr-footer__copyright">Copyright (c) 2016 Darma yoga. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>