<?php
include "konektor.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beli Baru Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="#">Beli Baru Store</a>
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
					<li>
						<a href="login-form.php"><button class="btn btn-primary">Login<button></a>
					</li>
                    <li>
						<a href="registrasi.php"><button class="btn btn-success">Register<button></a>
					</li>
					<li>
						<h5 id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></h5>
							  <h5 id="logout"><a href="logout.php">Log Out</a></h5>
					</li>
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
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Beli Baru Store</h1>
                    <hr class="tagline-divider">

                </div>
            </div>
        </div>
		<div class="row">
		<div class="box"> 
		<h2 class="intro-text text-center">Barang Terbaru</h2>
		</div>
		</div>
		<hr>
		<?php 
							$page = mysql_query("SELECT * FROM barang order by id_barang desc limit 0,4") or die('Kesalahan pada proses query!');
							while($data=mysql_fetch_array($page))
							{$id = $data['id_barang']; 
						echo "<div class=\"row\">";
						echo "<div class=\"box\">";
						echo "<div class=\"col-lg-12\">";
						echo "<hr>";
						
                    
							echo "<h1>".$data['nama']."<h1>";
							echo "<img class=\"img-responsive img-border img-left\" src=\"on-admin/image/".$data['gambar']."\" height=\"100px\" width=\"100px\">";
							
							echo "<h3>".$data['deskripsi']."</h3>";
							echo "<br>";
							echo "<p>Rp.".$data['harga']."<p>";
							echo "<h4>Kondisi : ".$data['kondisi']."</h4>";
							echo "<br>";
							echo "<a href='deskripsi.php?id_barang=".$id."'>";
							echo "<div class=\"btn btn-default btn-lg\">Detail<button>";
							echo "</a>";
							echo "<hr class=\"visible-xs\">";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}
						?>
        

		
		
		
        <!--<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful boxes
                        <strong>to showcase your content</strong>
                    </h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="http://drama-media.com"><p>Copyright &copy; Beli Baru Store 2016</p></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
