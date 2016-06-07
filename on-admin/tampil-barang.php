<?php
include ('konektor.php');
include "session.php";
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Barang-Beli Baru Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
<center><h1>Data Barang</h1></center>
<b id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></b>
<div style="margin-bottom:15px;" align="right">
  <form class="form" action="search-brng.php" method="post">
   <input type="text" name="input_cari" placeholder="Cari Berdasar Nama Barang" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>
 </div>
 <table class="table table-hover">    
<tr>  
	<th> ID Barang </th>
    <th> Nama Barang </th>  
    <th> Deskripsi </th> 
	<th> Harga </th>
    <th> Berat (kg)</th>
	<th> Kondisi (Baru/Bekas) </th>
	<th> Gambar </th>
	<th colspan="1"> Action </th>
    
    
</tr>  
<?php    
// Perintah untuk menampilkan data  
$queri="Select * From barang ORDER BY id_barang DESC" ;  //menampikan SEMUA data dari tabel siswa  
  
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
$id= $data['id_barang'];  
 echo "      
        <tr>
		<td>".$data['id_barang']."</td>
        <td>".$data['nama']."</td>  
        <td>".$data['deskripsi']."</td>
		<td>".$data['harga']."</td>
		<td>".$data['berat']."</td>
        <td>".$data['kondisi']."</td>
		<td><img src='image/".$data['gambar']."' width='100px' height='100px'/></td>
		<td>
			<a href='edit-brng.php?id_barang=".$id."'><button class='btn btn-info'> Update</button> </a>
		</td>
		</tr>   
        ";  
};
?>  
</table>

</section>
<section>
<div>
<a href="input-barang.php" target="_blank"><button class="btn btn-default">Tambah</button></a>
<a href="hapus-brng.php" target="_blank"><button class="btn btn-danger">Hapus</button></a><br><br>
<a href="tampil.php"><button class="btn btn-success"><div class="glyphicon glyphicon-chevron-left">Kembali</div></button></a>
</div><br><br><br><br>
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