<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Beli Baru Store</title>
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
<h1>Hapus</h1>
<form class="form-group" method="post" action="hapus_data-brng.php">
Masukan Id barang yang Ingin di Hapus:
<input type="text" name="id_barang" /><br />
<input type="submit" value="Hapus" class="btn btn-danger" onClick="return-confirm('Anda Yakin?')" id="tambah" name="tambah" />
</form>
    
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
                <p class="mbr-footer__copyright">Copyright (c) 2016 Darma yoga. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>