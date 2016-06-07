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
    $sql = mysql_query("select * from barang where nama like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from barang") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from barang") or die (mysql_error());
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
   <th>Nama</th>
   <th>Deskripsi</th>
   <th>Berat</th>
   <th>Kondisi</th>
  </tr>
   <tr>
    <td><?php echo $data['id_barang'] ?></td>
    <td><?php echo $data['nama']?></td>
	<td><?php echo $data['deskripsi']?></td>
	<td><?php echo $data['berat'] ?></td>
	<td><?php echo $data['kondisi']?></td>
   </tr>
   </table>
  <?php 
  } 
 }
?><br>
<a href="tampil-barang.php"><button class="btn btn-success"><div class="glyphicon glyphicon-chevron-left">Kembali</div></button></a>
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