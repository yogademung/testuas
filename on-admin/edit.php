<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<h2> Edit Data User </h2>
<hr>
 <?php
include "konektor.php";
$id_pelanggan=$_GET["id_pelanggan"];
$query=mysql_query("select * from pelanggan where id_pelanggan='$id_pelanggan'");
?>
<?php
while($data=mysql_fetch_array($query)){
?>
<form action="edit_data.php" method="post" name="edit" class="form form-group-sm">
<table class="table table-condensed">
<input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan;?>"/>
<tr>
<td>Username</td><td><input type="text" name="username" value="<?php echo $data['username'];?>" required="required" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" value="<?php echo $data['password'];?>" /></td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" /></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="text" name="email" value="<?php echo $data['email'];?>" /></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" /></td>
</tr>
<tr>
<td>No. HP</td>
<td><input type="text" name="hp" value="<?php echo $data['hp'];?>" /></td>
</tr>
<tr><td><input type="submit" class="btn btn-success" value="Simpan" name="simpan" /></td>
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