<link rel="stylesheet" href="member.css" type="text/css" />
<link rel="stylesheet" href="member.js" type="text/javascript" />
<?php
	include('../config/connection.php');
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fName'];
		$lname=$_POST['lName'];
		$email=$_POST['email'];
		$add=$_POST['address'];
		$ph=$_POST['phone'];
		$q="insert into member(fname,lname,email,address,phone) values('$fname','$lname','$email','$add','$ph')";
		$r=mysqli_query($dbc, $q);
		if($r){
		echo "<script>alert('Request has been sent to admin')</script>";
		} else {
			echo "<script>alert('Error')</script>";
		}
	}
 ?>
<div class="container">
	<h1>About You</h1>
	<form name="userRegForm" action="member.php" method="post" onsubmit="return validateForm(this);">
		<div class="row">
			<div class="col-sm-6">

				<!-- <div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" autocomplete="false" required pattern="^((?=.*[0-9])(?=.*[a-zA-Z])).{6,12}$" title="Enter a password between 6 and 12 characters, containing at least one letter and one number." oninput="validatePassword(this);" onchange="validatePassword(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
				<div class="form-group">
					<label for="passwordConfirm">Confirm Password</label>
					<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" autocomplete="false" required pattern="^((?=.*[0-9])(?=.*[a-zA-Z])).{6,12}$" title="Passwords must match." oninput="validatePassword(this);" onchange="validatePassword(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
					<p class="help-block">Passwords must be between 6 and 12 characters long, containing at least one letter and one number. Please note, passwords are case sensitive.
					</p>
				</div> -->
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="fName" id="fName" class="form-control" autocomplete="false" required title="First name is required." oninput="return validateRequired(this);" onchange="return validateRequired(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lName" id="lName" class="form-control" autocomplete="false" required title="Last name is required." oninput="return validateRequired(this);" onchange="return validateRequired(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
								<div class="form-group">
					<label for="email">Email Address</label>
					<input type="email" name="email" id="email" class="form-control" autocomplete="false" required pattern="^.{0,64}$" title="Enter an email address with a maximum of 64 characters." oninput="validateEmail(this);" onchange="validateEmail(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
								<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" class="form-control" autocomplete="false" required title="address is required." oninput="return validateRequired(this);" onchange="return validateRequired(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
								<div class="form-group">
					<label for="phone">Phone</label>
					<input type="number" name="phone" id="phone" class="form-control" autocomplete="false" required title="phone number is required." oninput="return validateRequired(this);" onchange="return validateRequired(this);">
					<i class="input-glyph glyphicon glyphicon-ok-circle"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<button type="submit" name="submit" class="btn btn-primary pull-right">Next</button>
			</div>
		</div>
	</form>
</div>
