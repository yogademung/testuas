<?php
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
  
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form action="" method="post">
			<h2>LOGIN</h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			<br>
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			<br>
			<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>
 
  </body>
</html>