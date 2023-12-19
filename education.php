
	<?php
		include('config/setup.php'); 
	 	$q= "SELECT * FROM pages WHERE id = 13";
	 	$r= mysqli_query($dbc, $q);
		$data= mysqli_fetch_assoc($r);
		?> 
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "EDUCATION".'|'.$site_title; ?>  </title>

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
	<img src="images/educationbanner.jpg" style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
</div>
  <!--END WRAPPER -->

		<div class="container">
			<?php include('educationanimate.php'); ?>
		<p style="letter-spacing:2px; text-align: justify; font-size:15px;  margin: 10px 0 20px 0"><?php echo $data['tca']; ?></p>
				    <div class="row">
  <div class="col-xs-6 col-sm-12">
	<img src="images/educationdet.jpg" height: 250px; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
		<br>
		<br>
		</div>
	<style>
		.Flexible-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
    border: 1px inset red;
}

.Flexible-container iframe,   
.Flexible-container object,
.Flexible-container video, /* for html5 video embeds */
.Flexible-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
	</style>	
	<h1 style="text-align: center; margin-bottom: 10px">Check out some youtube motivational videos by our society</h1>
					    <div class="row" style="margin-left: 3px; margin-bottom: 3px">
  <div class="col-xs-6 col-sm-3">
  <div class='Flexible-container'>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VqTRIAYEjCY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  	</div>
  	  <div class="col-xs-6 col-sm-3">
  	    <div class='Flexible-container'>
<iframe width="560" height="315" src="https://www.youtube.com/embed/jGROpTr_odU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>	
  	  	</div>
  <div class="col-xs-6 col-sm-3">	
  	  <div class='Flexible-container'>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/738847i2B38" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  	</div>
  	  <div class="col-xs-6 col-sm-3">	
  	    <div class='Flexible-container'>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Mch8LLfJl7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<!-- end -->
<!-- FOOTER AREA -->
<footer style="margin-top: -30px">
   <?php include('template/footer.php'); ?>
   </footer>
<!-- DEBUGGING CODE:
     	<?php if($debug == 1) { 
		include('widgets/debug.php');
		} ?> -->      
	</body>
<!-- END OF BODY -->
</html>

