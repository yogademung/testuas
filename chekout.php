 <?php
//include "session.php";
include "konektor.php";
$id_barang =$_GET["id_barang"];
$query=mysql_query("select * from barang where id_barang='$id_barang'");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="box">
                
                <div class="col-lg-12 text-center">
					<?php
					while($data=mysql_fetch_array($query)){
						
                    echo "<div class=\"col-lg-12\">";
                    echo "<hr>";
                    echo "<h2 class=\"intro-text text-center\"><strong>".$data['nama']."</strong>";
                    echo "</h2>";
                    echo "<hr>";
                	echo "</div>";
					echo "<img class=\"img-responsive img-border\" src=\"on-admin/image/".$data['gambar']."\" alt=\"gambar\" height=\"200px\" width=\"200px\">";
                    echo "<p>Harga : Rp.".$data['harga']."<p>";
					echo "<strong>Berat : ".$data['berat']." Kg</strong><br>";
					}
					?>
			<div>
					<strong>Cek Tarif Ongkir</strong><br><p>(kota asal ketik Tabanan)</p><br><p>1 Kg = 1000 gr</p></td><td>:</td>
					<div data-theme="light" id="rajaongkir-widget"></div>
<script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script></td>
					<form class="form form-group" method="post" action="konfirmasi.php">
					<table class="table table-condensed">
					<tr><td>Alamat Lengkap </td><td>:</td> 
					<td><input type="text" name="alamat" placeholder="Alamat Anda" required /></td></tr>
					<tr><td>No HP </td><td>:</td>
					<td><input type="text" name="hp" placeholder="No Handphone" required /></td></tr>
					<tr><td>Pengiriman</td><td> : </td>
					<td><input type="radio" name="ekspedisi" id="JNE" value="JNE" required>JNE
						<input type="radio" name="ekspedisi" id="POS" value="POS" required>POS
						<input type="radio" name="ekspedisi" id="ESL" value="ESL" required>ESL
					</td></tr>
					<tr><td>
					<?php
					echo "<input name=\"art_url\" value=\"deskripsi.php?id_barang=".$id_barang."\" type=\"hidden\">";
					?></td></tr>
					<tr><td>
					<input name="tambah" value="Konfirmasi" class="btn btn-success" type="submit">
					</td></tr>
					</table>
					</form>
					</div>
					<center><p border="1">Silahkan Transfer ke Rekening BNI 360864517 A/N I Putu Gede Darma Yoga</p>
					<p>Tambahkan 3 digit angka terakhir no hp anda di total pembayaran untuk verifikasi</p></center>
					<br><a href="index.php"><button class="btn btn-primary">Belanja Lagi</button></a></div>
                </div>
        
            </div>
        </div>

    </div>
	
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Beli Baru Store 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
