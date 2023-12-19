        <?php
	include('config/setup.php');
?>   
<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "OVERVIEW".'|'.$site_title; ?>  </title>

	    <!-- Bootstrap -->
	    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
	    <link rel="stylesheet" href="css/font-awesome.css">
	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="js/bootstrap.min.js" rel="stylesheet">
	  	<link rel="stylesheet" href="config/style.css" />
	   <?php include('config/js.php') ?>
	</head>
<!-- END -->

<!-- START OF BODY PORTION -->	     
	<body>
		
<!-- wrapped body portion -->
		<div id="wrapper">
		    <div id="top">
		    	
		   	<?php include('template/activeuser.php'); ?>

			<marquee bgcolor="#228B22" behavior="alternate" style="height: 50px"><h3 style="font-family: Mangal; color: white; padding: 15px">Welcome to Bidhannagar Social Welfare Society &nbsp; <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp;
			 বিধাননগর সোশ্যাল ওয়েলফেয়ার সোসাইটিতে আপনাকে স্বাগত জানাই   </h3></marquee>	 
	</div>		
<div style="font-size: medium; margin-bottom: -20px">			
<?php include('config/dropdown.php'); ?>
</div>
<!-- navigation menu using php data object:PDO -->

 
 <!--END TOP -->
		    <div class="row">
  <div class="col-xs-6 col-sm-12">
	<img src="images/Banner-About-us-1600x400.png" height: 250px; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
</div>
  <!--END TOP -->
<div class="container">
<br>
<br>
<div class="row" style="margin-bottom: 20px">
	
	<div class="col-md-6" style="border: 1px dotted gray;">
		<h3 style="color: yellowgreen; font-size: x-large">Eduaction</h3>
		<img src="images/is.jfif" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM project WHERE id =2";
						$r= mysqli_query($dbc, $q);
						$data= mysqli_fetch_assoc($r);
						$blurb = substr($data['body'], 0,250); 
				?>
				<p style="letter-spacing:1px; text-align: justify; font-size: small"><?php echo $blurb; ?></p>
			<a href="education.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
				</div>
	</div>
	<div class="col-md-6" style="border: 1px dotted gray; float: right">
		<h3 style="color: yellowgreen; font-size: x-large">Women-Empowerment</h3>
		<img src="images/women-day2.jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM project WHERE id =3";
						$r= mysqli_query($dbc, $q);
						$data= mysqli_fetch_assoc($r);
						$blurb = substr($data['body'], 0,250); 
				?>
				<p style="letter-spacing:1px; text-align: justify; font-size: small"><?php echo $blurb; ?></p>
			<a href="women.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
				</div>
	</div>
	</div>
	<div class="row" style="margin-bottom: 20px">
	<div class="col-md-6" style="border: 1px dotted gray">
				<h3 style="color: yellowgreen; font-size: x-large">Health-Camp</h3>
		<img src="images/3.jpg" width="180px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM project WHERE id =4";
						$r= mysqli_query($dbc, $q);
						$data= mysqli_fetch_assoc($r);
						$blurb = substr($data['body'], 0,300); 
				?>
				<p style="letter-spacing:1px; text-align: justify; font-size: small"><?php echo $blurb; ?></p>
			<a href="health.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
				</div>
	</div>
	<div class="col-md-6" style="border: 1px dotted gray">
				<h3 style="color: yellowgreen; font-size: x-large">Event</h3>
		<img src="images/clean.jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
				<p style="letter-spacing:1px; text-align: justify; font-size: small">
					 Distribution of bags to the students </h3>
Bidhannagar Social Welfare Society, go by the saying "Teach Them Young" (source). It is a known fact "the younger the brain is, the more receptive it is”. 
Now, to build schools accessible to all and then to bring the young brains into it to impart education, is a huge task at hand, for our society.
				</p>
			<a href="event.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
				</div>
	</div>
</div>
</div>
	<div class="jumbotron" style="background-color: #63d471;
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);
 height:100px auto; border-top: 2px black outset" >
					    <div class="row" style="width: 990px; margin-left: 200px">
  <div class="col-xs-3 col-sm-3">
				<a href="https://www.google.com/maps/dir//bidhan+nagar+siliguri/@26.4860593,88.2070637,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39e4541c1a7543bd:0x150484e8a34dcb41!2m2!1d88.2420832!2d26.4860636"
					 style="text-decoration: none">
					<h2 style="font-family: Mangal; color: white;  font-size: 25px"><i class="fas fa-car "  style="color: black"></i>&nbsp;VISIT BSWS</h2>
					</a>
</div>
  <div class="col-xs-3 col-sm-3">	
					<a href="#" style="text-decoration: none">
						<h2 style="font-family: Mangal; color: white;  font-size: 25px"><i class="fas fa-hand-holding-usd" style="color: red"></i>&nbsp;DONATE</h2>
						</a>
</div>
 <div class="col-xs-3 col-sm-3">		
					<a href="#" style="text-decoration: none">
						<h2 style="font-family: Mangal; color: white; font-size: 25px"><i class="fa fa-ambulance" aria-hidden="true"></i> &nbsp;AMBULANCE</h2>
						</a>
</div>
 <div class="col-xs-3 col-sm-3">					
					<a href="#" style="text-decoration: none"><h2 style="font-family: Mangal; color: white; font-size: 25px"><i class="fas fa-phone-volume" style="color: black"></i>&nbsp;CONTACT US</h2>
				</a>
</div>
			</div>
		</div>
<footer style="margin-top: -27px">
<?php include('template/footer.php');?>
</footer>

</body>
 </html>