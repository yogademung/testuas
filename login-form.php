<?php
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Panel</title>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<p><br/><br/><br/><br/></p>
 <div class="container">
      <div class="row">  
 <div class="col-md-4">
      <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
         <h3>Login</h3>
      </div>
      <form action="login.php" method="post" accept-charset="utf-8" role="form">
         <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="username" placeholder="Enter username" required />
        </div>
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
         <hr/>
         <a href="#"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>
         <button type="submit" name="submit" id="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
         <p>
</p>
      </form>
       </div>
    </div>
    
     </div>
  </div>
    </div>
 <script type="text/javascript">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>