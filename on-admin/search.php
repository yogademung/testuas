<?php
include "session.php";
?>
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>LPD Pecatu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
 <?php 
include ('konektor.php');
   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from pelanggan where nama like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from pelanggan") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from pelanggan") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
	<table class="table table-hover">
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style="padding:10px;""> Data Tidak Ditemukan</td>
     </tr>
	 </table>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {

   ?>
   <table class="table table-hover">
   <h3>Hasil Pencarian</h3>
   <tr style="background-color:#fc0;">
   <th>ID</th>
   <th>Username</th>
   <th>Password</th>
   <th>Nama</th>
   <th>E-mail</th>
   <th>Alamat</th>
   <th>Gender</th>
   <th>No. HP</th>
  </tr>
   <tr>
    <td><?php echo $data['id_pelanggan'] ?></td>
    <td><?php echo $data['username']?></td>
	<td><?php echo $data['password']?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['email']?></td>
	<td><?php echo $data['alamat']?></td>
    <td><?php echo $data['gender']?></td>
	<td><?php echo $data['hp']?></td>
   </tr>
   </table>
  <?php 
  } 
 }
?><br>	
<a href="tampil.php"><button class="btn btn-success"><div class="glyphicon glyphicon-chevron-left">Kembali</div></button></a>
</div><br><br><br><br>
</section>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
	<p class="mbr-footer__copyright">Copyright (c) 2016 Darma yoga. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>