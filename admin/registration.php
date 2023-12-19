<?php
		$msg="";
		if(isset($_POST['submit']))
		{
			include('../config/connection.php');
			session_start();
			$name= $dbc->real_escape_string($_POST['name']);	
			$email=$dbc->real_escape_string($_POST['email']);	
			$phone=$dbc->real_escape_string($_POST['phone']);	
			$password=$dbc->real_escape_string($_POST['password']);	
			$cpassword=$dbc->real_escape_string($_POST['cpassword']);	
		
			if($password != $cpassword)
			{
			 $msg= "Password did not matched!";
			}
			else 
			{
				$hash = password_hash($password, PASSWORD_BCRYPT);
				 $q="INSERT INTO public (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hash')";
				 $r= mysqli_query($dbc, $q);
				 if($r){
				echo "<script>alert('You are registered successfully ')</script>";
					}	
					else {
					echo "UNDEFIEND ERROR";
					}
			}	 
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <!-- <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title> -->

    <!-- Bootstrap -->
    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="config/style.css" />
   <?php include('config/js.php') ?>
	</head>
<!-- END -->
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
					           	<div class="panel panel-primary">
	           	<div class="panel-heading" style="font-family: Mangal">SIGN UP</div>
	           	<div class="panel-body">
	           		<form action="registration.php" method="post">
  					<div class="form-group">
	  					<label for="name">NAME</label>
	    				<input type="name" class="form-control" id="name" aria-describedby="nameHelp" name="name" minlength="5" placeholder="Enter your Name">
	    				<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  					</div>
  					<div class="form-group">
    					<label for="email">Email</label>
    					<input type="email" class="form-control" id="email" name="email" minlength="10"  placeholder="Enter your email">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>
    				<div class="form-group">
    					<label for="Phone No.">Phone No.</label>
    					<input type="number" class="form-control" id="number" name="phone" minlength="10"  placeholder="Enter mobile number">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>		
      				<div class="form-group">
    					<label for="Password">Password</label>
    					<input type="password" class="form-control" id="password" name="password" minlength="7"  placeholder="Enter Password">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>
  	      				<div class="form-group">
    					<label for="CPassword">Confirm Password</label>
    					<input type="password" class="form-control" id="cpassword" name="cpassword" minlength="7"  placeholder="Re-enter Password">
    					<!-- <small id="passwordhelp" class="form-text text-muted">hey</small> -->
  					</div>														
					<button type="submit" value="registration" class="btn btn-primary" name="submit">Submit</button>
					<h3><a href="ulogin.php" style="text-decoration: none">click here to login</a></h3>
					<?php if($msg!="") echo $msg . "<br><br>";?>
					</form>
				</div> <!-- End panel body -->
				</div> <!-- End panel -->
			</div>
		</div>
	</div>
</body>