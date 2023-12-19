<?php	include('config/setup.php'); ?>

	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "HEALTH CAMPS".'|'.$site_title; ?>  </title>

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
 
 
 <!-- banner -->
		    <div class="row">
  <div class="col-xs-6 col-sm-12">
	<img src="images/mm.png" style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
</div>

		<div class="row" style="margin-left: 40px; margin-right: 20px; margin-top: 30px">
								<div class="col-md-4">
				<img src="images/tribal.jpg" width="420" height="300" style="margin-top: 7px; border: 1px solid gray; padding: 5px"/>
				
				<img src="images/3.jpg" style="margin-top: 10px; border: 1px solid gray; padding: 5px"/>
					</div>
				<div class="col-md-8">
		<?php 
	 	$q= "SELECT * FROM pages WHERE id = 15";
	 	$r= mysqli_query($dbc, $q);
		$data= mysqli_fetch_assoc($r);
		?>
		<p style="font-family: Arial Narrow; text-align: justify; letter-spacing: 1px; font-size: small"><?php echo $data['tca']; ?></p>
		</div>
		</div>		
		  <div class="open" style="margin: 10px 0 5px 0">
		  	<style>
		  		#blinkText {
  font-size: 20px;
}

#blink {
  -webkit-animation-name: blinker;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 2s;
  text-align: center;
  font-family:Mangal;
}

@-webkit-keyframes blinker {
    0% { color: red; 
          text-shadow: red 0px 0px 20px;
          font-size: 500%}
    50% { color: blue;
           text-shadow: blue 0px 0px 20px;
            font-size: 500%;}
    
    100% { color: red;
           text-shadow: red 0px 0px 20px;
            font-size: 500%;}
}

@-webkit-keyframes  woosher {
  0% {
    margin-left: 100%;
    width: 300%;
  }
  100% {
    margin-left: 50%;
    width: 100%;
  }
}
		  	</style>
    <div id='blink' class='blink'> 
     <a href="campform.php" style="text-decoration: none; color: inherit;"> <p id="blinkText">CLICK HERE TO REQUEST ADMIN FOR AN HEALTH CAMP</p></a>
      </div>
  </div>
					
<!-- end -->
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
 <!-- FOOTER AREA -->
<footer style="margin-top: -30px">
	<?php include('template/footer.php'); ?>
</footer>

	         
	</body>
<!-- END OF BODY -->
</html>

