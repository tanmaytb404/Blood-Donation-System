<?php
//start session:
		session_start();
	
//setup file:
		include('../config/connection.php');
			if($_POST)
			{
			$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = sha1('$_POST[password]')";
			$r = mysqli_query($dbc, $q);
				if(mysqli_num_rows($r) == 1)
				{
				$_SESSION['user'] = $_POST['email'];
				header('Location:index.php');
				}
			}
?>
  
<!DOCTYPE html>
 <html>
<!-- STARTING OF HEAD --> 	
	 <head>
	 	<title> Admin Login</title>
	    <meta name="viewport content="width=device-width", initial-scale=1.0">
     	<?php include('config/style.css'); ?>
		 <?php include('config/js.php'); ?>
	</head>
<!-- END -->
<!--  STARTING OF BODY -->	     
	<body>
			<div id="wrapper">
			<?php //include(D_TEMPLATE.'/navigation.php'); ?>
			<div class="container">	
				<div class="row">
	           	<div class="col-md-4"></div>
	           	<div class="col-md-4">
	           	<div class="panel panel-primary">
	           	<div class="panel-heading" style="font-family: Mangal">LOGIN</div>
	           	<div class="panel-body">
	           		<form action="login.php" method="post">
  					<div class="form-group">
	  					<label for="email">Email address</label>
	    				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
	    				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  					</div>
  					<div class="form-group">
    					<label for="password">Password</label>
    					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div> <!-- End panel body -->
				</div> <!-- End panel -->
                </div>
	           	<div class="col-md-4"></div>
	           	</div>
		   	</div>
	 		</div>
		<?php //include(D_TEMPLATE.'/footer.php'); ?>
		<?php //if($debug == 1) { include('widgets/debug.php');} ?>
	</body>
<!-- END OF BODY -->	
</html>
