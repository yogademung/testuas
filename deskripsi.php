 <?php
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

    <title>Deskripsi</title>

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
<style>
	#comment {
margin:20px 0 0 20px;
border: 2px solid #848484;
border-radius:20px;
-moz-border-radius:20px;
max-height: 90%;
font-weight: bold;
color: #606060;
padding: 10px;
width: 440px;
background-color: #dcdcdc;
}
#publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
</style>

</head>

<body>

    <div class="brand">Beli Baru Store</div>
    <div class="address-bar">Tempat Jual Beli Aman dan Terbaru</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Beli Baru Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="ketentuan.php">Disclaimer</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
					<!--<li>
						<h5 id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></h5>
							  <h5 id="logout"><a href="logout.php">Log Out</a></h5>
					</li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                
                <div class="col-lg-12 text-center">
					<?php
					while($data=mysql_fetch_array($query)){
					$id_barang = $data['id_barang']; 
                    echo "<div class=\"col-lg-12\">";
                    echo "<hr>";
                    echo "<h2 class=\"intro-text text-center\"><strong>".$data['nama']."</strong>";
                    echo "</h2>";
                    echo "<hr>";
                	echo "</div>";
					echo "<img class=\"img-responsive img-border img-left\" src=\"on-admin/image/".$data['gambar']."\" alt=\"gambar\" height=\"200px\" width=\"200px\">";
                    echo "<h3>".$data['deskripsi']."</h3>";
							echo "<br>";
							echo "<p>Harga : Rp.".$data['harga']."<p>";
							echo "<h4>Kondisi : ".$data['kondisi']."</h4>";
							echo "<br>";
					echo "<a href=\"chekout.php?id_barang=".$id_barang."\" class=\"btn btn-success btn-lg\">Beli</a>";
					echo "<br>";
					echo "<a href=\"HTML/index.html\" class=\"btn btn-default\" >";
					echo "<span class=\"glyphicon glyphicon-lock\">Keranjang</span></a>";
					echo "<hr>";
					}
					?>
                </div>
        
            </div>
        </div>

    </div>
	
    <!-- /.container -->
<?php
include "anda.php";
?>
	
<div class="container">
	<div class="row">
		<div class="box">
			<div class="col-lg-12">	
<div id="comment">
<form name="submitcoment" method="post" action="submitcoment.php">Nama:<br>
<input name="nama" type="text"><br>
Email(optional):<br><input name="email" type="text"><br>
Website(optional):<br><input name="website" type="text"><br>
Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
<input name="art_id" value="1" type="hidden">
<?php
echo "<input name=\"art_url\" value=\"deskripsi.php?id_barang=".$id_barang."\" type=\"hidden\">";?><br>
<input name="tombol" value="Kirim" type="submit"></form></div>
<div id="publishcomment">
<?php include("publishcoment.php"); getcomment("1"); ?></div>


		</div>
	</div>
</div>
	
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
