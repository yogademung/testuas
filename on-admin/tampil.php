<?php
include ('konektor.php');
include "session.php";
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Admin-Beli Baru Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
<center><h1>Data User Aktif</h1></center>
<b>Selamat Datang : <i><?php echo $login_session; ?></i></b>
<div style="margin-bottom:15px;" align="right">
  <form class="form" action="search.php" method="post">
   <input type="text" name="input_cari" placeholder="Cari Berdasar Nama User" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>
  <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
 </div>
 <table class="table table-hover">    
<tr>  
	<th> ID User </th>
    <th> Username </th>  
    <th> Password </th>  
    <th> Nama </th>
	<th> E-mail </th>
	<th> Alamat </th>
	<th>Kelamin</th>
	<th>No. HP</th>
    <th colspan="1"> Action </th>
    
    
</tr>  
<?php    
// Perintah untuk menampilkan data  
$queri="Select * From pelanggan ORDER BY id_pelanggan DESC" ;  //menampikan SEMUA data dari tabel siswa  
  
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
$id= $data['id_pelanggan'];  
 echo "      
        <tr>
		<td><center>".$data['id_pelanggan']."</center></td>
        <td>".$data['username']."</td>  
        <td>".$data['password']."</td> 
		<td>".$data['nama']."</td>
        <td>".$data['email']."</td> 
		<td>".$data['alamat']."</td>
		<td>".$data['gender']."</td>
		<td>".$data['hp']."</td>
		<td><a href=\"edit.php?id_pelanggan=$data[id_pelanggan]\"><button class=\"btn btn-info\">Update</button></a> </i></td>
		</tr>   
        ";  
};
?>  
</table>

</section>
<section>
<div>
<a href="daftar.php" target="_blank"><button class="btn btn-default">Tambah</button></a>
<a href="hapus.php" target="_blank"><button class="btn btn-danger">Hapus</button></a><br><br>
<a href="tampil-barang.php" target="_blank"><button class="btn btn-primary">Lihat List Barang</button></a>
<a href="pesanan.php" target="_blank"><button class="btn btn-success">Lihat Pesanan</button></a><br><br>
		<div align="center">
		<a href="komen.php" target="_blank"><button class="btn btn-danger">Komentar</button></a>
		</div>
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