<?php
		include('config/setup.php');
				$q ="SELECT  *  FROM pages WHERE id=8"; 
				$r = mysqli_query($dbc,$q);
				$who= mysqli_fetch_assoc($r);
	?>
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "WHO WE ARE".'|'.$site_title; ?>  </title>

	    <!-- Bootstrap -->
	    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
	    <link rel="stylesheet" href="css/font-awesome.css">
	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="js/bootstrap.min.js" rel="stylesheet">
	  	<link rel="stylesheet" href="config/style.css" />
	   <?php include('config/js.php') ?>
	   	<style>
		#intro{
			height: 250px;
			background: url('images/about-us-banner-png-1.png');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			  border: 2px solid gray;
			  overflow: hidden;
			  max-width: 100%
		}
	</style>
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
 <!-- banner -->
			<div id="intro" class="view">
			<!-- <h1 style="font-family: Mangal; color: white; text-align: center; font-size: 80px; font-style: bold; margin-top: 160px; opacity: 1">ABOUT US</h1>-->
			</div>
 <!--END TOP -->
 
<div class="container">
<!-- contents -->
 <div class="row" style="text-align: justify">
 	<div class="col-md-6"><a href="images/about img.jpg"><img src="images/about img.jpg"  width="500px" style="border: 2px solid black; margin-bottom: 20px; margin-top: 30px"/></a></div>
	  	<div class="col-md-6">		       	 	
		<div id="details" style="margin:-20px 0 0 30px";>
			<h2 style="font-family:'Stardos Stencil'; text-align: left; font-weight: bold; font-size: xx-large; text-align: center">WHO WE ARE?</h2>
			<h4 style="letter-spacing:1px; text-align: justify"><?php echo $who['tca']; ?></h4>
		</div>
		</div>
	</div>

<br>
<br>

		<div class="row" style="margin-bottom: 20px">
		<div class="col-md-6" style="border: 1px dotted gray;">
			<h3 style="color: yellowgreen; font-family:'Stardos Stencil'; font-size: x-large ">Our Team</h3>
			<img src="gallery/banner14.jpg" width="200px" height="150px" style="border: 2px solid green"/>
			<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =9";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,250); 
				?>
				<p style="text-align: justify; font-size: small">The Bidhannagar social Welfare society comprises of people from different walks of life who have all come together with their varied experiences to work towards one mission. It includes people from diverse backgrounds including social workers, MBAs, chartered accountants, corporate professionals, consultants, teachers etc

The team is a blend of experienced veterans and enthusiastic freshers; all put in sync with the organization's core values which also drive individual thought and action. BSWS endeavors to create an ambience where people have the freedom to deliver quality and take pride in their work. All the team members are also given the opportunity to connect with each other regularly.
 Events and activities are designed and organized to make each one feel, as much a part of the BSWS family.
 </p>
				<a href="team.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
			</div>
		</div>
		<div class="col-md-6" style="border: 1px dotted gray; float: right">
			<h3 style="color: yellowgreen;font-family:'Stardos Stencil'; font-size: x-large ">Vision & Mission</h3>
			<img src="gallery/banner10.jpg" width="200px" height="150px" style="border: 2px solid green"/>
			<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =10";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,380); 
				?>
				<p style="letter-spacing:1px; text-align: justify; font-size: small">
Children are the future of every nation. The vision and mission of   Bidhannagar Social Welfare Society NGO is towards our goal of overcoming poverty, 
and ensuring a life of dignity and security for the marginalized populations. In association with local Mandirs, Masjids, Gurudwaras, churches and NGO'S,
 Our teams serves the poor with practical programs that meet needs for shelter, food, clothing, clean water, education, medical care, 
sustainability, friendship, encouragement and hope. We are going to setup soon for old age home. </p>
				<a href="vission.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
			</div>
		</div>
		</div>
	<div class="row" style="margin-bottom: 20px">
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen;  font-size: x-large">Legal Status</h3>
		<img src="gallery/media/new_image.5caa466a7536c9.16528244.jpg" width="180px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  		<?php
  						@$q = "SELECT * FROM pages WHERE id =11";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,300); 
			?>
			<p style="letter-spacing:1px; text-align: justify; font-size: small"><?php echo $blurb; ?></p>
			<a href="legal.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
		</div>
	</div>
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen;  font-size: x-large">Awards</h3>
		<img src="gallery/awards.jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  		<?php
  						@$q = "SELECT * FROM pages WHERE id =22";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,300); 
			?>
				<p style=" letter-spacing:1px; text-align: left; font-size: small">For Outstanding Achievement in : EDUCATION & HEALTH by College of Natural Health HUSADA ORIENTAL Indonesia (2016)
<br />
Uttarbanga Pousmela Award (2017) for Best Social Worker .
<br />
Best Social Worker Award (2014) by Laxmi Nandi Writer in North Bengal
<br />
Awarded to return a Bihar Boy (2013)
<br />
Village Blood Collection Award 2018
<br />
Achievement Award at World Blood Donor Day 2018 in Jadavpur, Kolkata.
<br />
2016 Best Social Worker Award By Bidhanagar Police
<br />
Best Social Workers Award by Ramganj Young Welfare 2017
<br />
Awarded in 2013 to return a Bihar Boy from OBUJ SABUJ</p>
			<a href="awards.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
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
		
<!-- footer -->
	<footer style="margin-top: -27px">
	<?php include('template/footer.php');?>
	</footer>
	
</div>
</body>
 </html>