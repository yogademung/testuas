<?php
include ('konektor.php');
include "session.php";
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Pesanan-Beli Baru Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
<center><h1>Data Pesanan</h1></center>
 <table class="table table-hover">    
<tr>  
	<th> ID Pesanan </th>
    <th> Alamat </th>  
    <th> No Telp </th>
	<th> Pengiriman </th>
	<th> ID Barang</th>
	<th> Tanggal Pesanan </th>
    
    
</tr>  
<?php    
// Perintah untuk menampilkan data  
$queri="Select * From pesan ORDER BY id_pesan DESC" ;  //menampikan SEMUA data dari tabel siswa  
  
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
$id= $data['id_pesan'];  
 echo "      
        <tr>
		<td><center>".$data['id_pesan']."</center></td>
        <td>".$data['alamat']."</td>  
        <td>".$data['hp']."</td> 
		<td>".$data['ekspedisi']."</td>
        <td>".$data['art_url']."</td> 
		<td>".$data['date']."</td>
		</tr>   
        ";  
};
?>  
</table>

</section>
<section>
<div>
<a href="tampil-barang.php" target="_blank"><button class="btn btn-primary">Lihat List Barang</button></a>
<a href="tampil.php" target="_blank"><button class="btn btn-success">Lihat Data User</button></a>
</div>
</section>
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