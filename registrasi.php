<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Daftar Acount Beli Baru Store</title>
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
<h1>Pendaftaran Member Baru</h1>
<form class="form form-group" name="form1" method="post" action="regis.php">
<table class="table table-condensed">
<tr><td>Username</td><td> : </td>
<td><input type="text" name="username" pattern="[a-zA-Z]+" oninvalid="this.setCustomValidity('Input hanya boleh huruf a-z tanpa spasi!')" /></td></tr>
<tr><td>Password </td><td>:</td> 
<td><input type="password" name="password" required /></td></tr>
<tr><td>Nama Lengkap</td><td> :</td>
<td><input type="text" name="nama" required /></td></tr><br />
<tr><td>E-mail</td><td> :</td>
<td><input type="text" name="email" required /></td></tr><br />
<tr><td>Alamat</td><td> :</td>
<td><textarea type="text" name="alamat" required></textarea></td></tr><br />
<tr><td>Gender</td><td> : </td>
<td><input type="radio" name="gender" id="pria" value="Pria" required>Pria
<input type="radio" value="Wanita" name="gender" id="wanita" required>Wanita</td></tr>
<tr><td>No.HP</td><td> :</td>
<td><input type="text" name="hp" required /></td></tr><br />
<tr><td><input type="submit" class="btn btn-group" value="Tambah" onclick="validform()" id="tambah" name="tambah" /><input type="reset" class="btn btn-danger" value="Ulangi" /></td></tr>
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