<?php

//setup file:
		include('../config/connection.php');
		 session_start();
		if(isset($_SESSION['username']))
		{
			header("location: index.php");
		}
			if(isset($_POST['submit']))
	 {
			$email=mysqli_real_escape_string($dbc,$_POST['email']);	
			$password=mysqli_real_escape_string($dbc,$_POST['password']);
			$q = "SELECT * FROM public WHERE email = '$email'";
			$r = mysqli_query($dbc, $q);
				if(mysqli_num_rows($r) > 0)
			{
					$hash= mysqli_fetch_assoc($r);
					if( password_verify($password, $hash['password'] ))
					{
						$_SESSION["username"] = $email;
						header("location: index.php");
					// return true;
					} else{
					echo '<script>alert( "invalid email or password")</script>';
					}
			} else {
					echo '<script>alert( "check your inputs")</script>';				
			}
	}
?>
  
<!DOCTYPE html>
 <html>
<!-- STARTING OF HEAD --> 	
	 <head>
	 	<title> User Login</title>
	    <meta name="viewport content="width=device-width", initial-scale=1.0">
     	<?php include('config/style.css'); ?>
		 <?php include('config/js.php'); ?>
	</head>
<!-- END -->
<!--  STARTING OF BODY -->	     
	<body>
			<?php //include(D_TEMPLATE.'/navigation.php'); ?>
			<div class="container">	
				<div class="row">
	           	<div class="col-md-2"></div>
	           	<div class="col-md-8">
	           	<div class="panel panel-primary" style="height: 500px">
	           	<div class="panel-heading" style="font-family: Mangal">LOGIN</div>
	           	<div class="panel-body">
	           		<form action="ulogin.php" method="post">
  					<div class="form-group" style="width: 350px; margin: 0px 50px 15px 150px">
	  					<label for="email">Email address</label>
	    				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
	    				<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  					</div>
  					<div class="form-group" style="width: 350px; margin: 0px 50px 15px 150px">
    					<label for="password">Password</label>
    					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>
					<button type="submit" class="btn btn-primary" name="submit" id="" style="margin: 0px 400px 0px 150px">Submit</button>
					<h6 style="margin-left: 150px; margin-bottom: 10px">
		<a href="#"  style="text-decoration: none">Forget password?</a> &nbsp; &nbsp; </h6>
		<h6 style="margin-top: 20px; margin-left: 180px">or</h6>
		<button type="button" class="google-button"  style="margin-left: 150px;">
			<?php include('../css/Gstyle.php'); ?>
  <span class="google-button__icon">
    <svg viewBox="0 0 366 372" xmlns="http://www.w3.org/2000/svg"><path d="M125.9 10.2c40.2-13.9 85.3-13.6 125.3 1.1 22.2 8.2 42.5 21 59.9 37.1-5.8 6.3-12.1 12.2-18.1 18.3l-34.2 34.2c-11.3-10.8-25.1-19-40.1-23.6-17.6-5.3-36.6-6.1-54.6-2.2-21 4.5-40.5 15.5-55.6 30.9-12.2 12.3-21.4 27.5-27 43.9-20.3-15.8-40.6-31.5-61-47.3 21.5-43 60.1-76.9 105.4-92.4z" id="Shape" fill="#EA4335"/><path d="M20.6 102.4c20.3 15.8 40.6 31.5 61 47.3-8 23.3-8 49.2 0 72.4-20.3 15.8-40.6 31.6-60.9 47.3C1.9 232.7-3.8 189.6 4.4 149.2c3.3-16.2 8.7-32 16.2-46.8z" id="Shape" fill="#FBBC05"/><path d="M361.7 151.1c5.8 32.7 4.5 66.8-4.7 98.8-8.5 29.3-24.6 56.5-47.1 77.2l-59.1-45.9c19.5-13.1 33.3-34.3 37.2-57.5H186.6c.1-24.2.1-48.4.1-72.6h175z" id="Shape" fill="#4285F4"/><path d="M81.4 222.2c7.8 22.9 22.8 43.2 42.6 57.1 12.4 8.7 26.6 14.9 41.4 17.9 14.6 3 29.7 2.6 44.4.1 14.6-2.6 28.7-7.9 41-16.2l59.1 45.9c-21.3 19.7-48 33.1-76.2 39.6-31.2 7.1-64.2 7.3-95.2-1-24.6-6.5-47.7-18.2-67.6-34.1-20.9-16.6-38.3-38-50.4-62 20.3-15.7 40.6-31.5 60.9-47.3z" fill="#34A853"/></svg>
  </span><a href="googleLogin.php">
  <span class="google-button__text">Sign in with Google</span></a>
</button>
					</form>
				</div> <!-- End panel body -->
				</div> <!-- End panel -->
                </div>
	           	<div class="col-md-2"></div>
	           	</div>
		   	</div>
		<?php //include(D_TEMPLATE.'/footer.php'); ?>
		<?php //if($debug == 1) { include('widgets/debug.php');} ?>
	</body>
<!-- END OF BODY -->	
</html>
