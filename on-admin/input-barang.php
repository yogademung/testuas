<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tambah Barang-Beli Baru Store</title>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
include "konektor.php";
?>
<h1>Masukan Barang Baru</h1>
<form class="form form-group" name="form1" method="post" enctype="multipart/form-data" action="input-brng.php">
<table class="table table-condensed">
<tr><td>Nama Barang</td><td>:</td> 
<td><input type="text" name="nama" required /></td></tr>
<tr><td>Deskripsi</td><td> :</td>
<td><textarea name="deskripsi" required /></textarea></td></tr><br />
<tr><td>Harga</td><td> :</td>
<td>Rp.<input type="text" name="harga" required /></td></tr><br />
<tr><td>Berat</td><td> :</td>
<td><input type="text" name="berat" required />.Kg</td></tr><br />
<tr><td>Kondisi</td><td> : </td>
<td><input type="radio" name="kondisi" id="Baru" value="Baru" required>Baru<br>
<input type="radio" value="Bekas" name="kondisi" id="Bekas" required>Bekas</td></tr>
<tr><td>Gambar Barang</td><td> : </td>
<td><input type="file" name="gambar" id="gambar"></td>
<tr><td><input type="submit" class="btn btn-primary" value="Tambah" id="tambah" name="tambah" /><input type="reset" class="btn btn-danger" value="Ulangi" /></td></tr>
<tr><td></td></tr>
</table>
</form>

<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container"> 
                <p class="mbr-footer__copyright">Copyright (c) 2016 Darma yoga. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
    </div>
</footer>
<script type="text/javascript">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>