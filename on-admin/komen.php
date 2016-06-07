<?php
include ('konektor.php');
include "session.php";
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
  <title>Komentar-Beli Baru Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
<center><h1>Data Komentar User</h1></center>
<b>Selamat Datang : <i><?php echo $login_session; ?></i></b>
<div style="margin-bottom:15px;" align="right">
  <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
 </div>
 <table class="table table-hover">    
<tr>  
	<th> ID Komentar </th>
    <th> Nama </th>  
    <th> E-mail </th>  
    <th> Website </th>
	<th> Komentar </th>
	<th> Date </th>
	<th>Art_ID</th>
	<th>Halaman</th>
        
</tr>  
<?php    
// Perintah untuk menampilkan data  
$queri="Select * From coment ORDER BY id DESC" ;  //menampikan SEMUA data dari tabel siswa  
  
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
$id= $data['id'];  
 echo "      
        <tr>
		<td><center>".$data['id']."</center></td>
        <td>".$data['nama']."</td>  
        <td>".$data['email']."</td> 
		<td>".$data['website']."</td>
        <td>".$data['komentar']."</td> 
		<td>".$data['date']."</td>
		<td>".$data['art_id']."</td>
		<td>".$data['art_url']."</td>
		</tr>   
        ";  
};
?>  
</table>

</section>
<section>
<div>
<a href="tampil.php"><button class="btn btn-success"><div class="glyphicon glyphicon-chevron-left">Kembali</div></button></a>
<a href="hapus-komen.php"><button class="btn btn-danger">Hapus</button></a>
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