<?php include('config/setup.php'); 
session_start();
session_regenerate_id();
?>
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title>

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
 
 		<?php include('template/slider.php'); ?>
 		</div>
 		<!-- use this for story -->
<div class="auto-container">
	<style>
		.responsive-content{
  max-width: 100%;
  overflow: hidden;
  margin: auto;
  margin: 50px;

}
.responsive-content section{
  float: left;
  width: 100%;
  margin: auto;
}

@media screen and (max-width: 1000px){
   .responsive-content section{
    width: 33%;
  }
}

@media screen and (max-width: 795px){
   .responsive-content section{
    width: 50%;
  }
}

@media screen and (max-width: 565px){
   .responsive-content section{
    width: 100%;
  }
}

.referencia{
  background: #fff;
  width: 100%;
  height: auto;
  padding: 10px;
  border-radius: 5px;
  border:3px #c9c9c9 solid;
  -webkit-box-shadow: 0 0.5px 0.5px 0 #A3A3A3;
    box-shadow: 0 0.5px 0.5px 0 #A3A3A3;
  margin: 15px auto; 
}

@keyframes scroll {
  0% {
    left: 100%;
  }
  100% {
    left: -50px;
  }
}

/* required */

html{
  box-sizing: border-box;
}
*, *:before, *:after{
  box-sizing: inherit;
}
img {
  display: block;
  margin: 0 auto 0 auto; /* Centred */
  
}

/* Layout For Larger Screens */
	</style>
	  <div class="responsive-content">
    <section>  <div class="referencia">
    	<?php include('animatetext.php'); ?>
    	<div class="row">
    		<?php
    		$q ="SELECT  *  FROM stories ORDER by ID desc limit 0,1";
			$r = mysqli_query($dbc,$q);
			while($stories=mysqli_fetch_assoc($r))
			{?>	 
  <div class="col-xs-6 col-md-4">
    <a href="images/<?php echo $stories['image']; ?>" class="thumbnail" style="margin:10px 0px 0px 30px">
      <img src="images/<?php echo $stories['image']; ?>" alt="">
    </a>
    </div>
<div class="col-xs-6 col-md-8">
	<div style="margin:10px 40px 0px 10px; text-align: justify">
	<?php echo $stories['story']; ?>
	</div>
</div>
<?php } ?>
</div>
  </div>
  </section>
  </div>
  <!-- fetching page contents -->

  	  <div class="responsive-content">
  	  	<!-- left -->
  	  	<div class="col-xs-6 col-md-6">
  	  		  <?php
			  $sql="select * from pages where id=8";
			  $result=mysqli_query($dbc, $sql);
			  $wwr=mysqli_fetch_assoc($result);
			  ?>
			  <section style="border: 2px #c9c9c9 inset; padding: 3px; height: 380px auto">
			  	<center>
			  		<h3 style="font-family: Mangal; color: maroon; font-size: x-large">About Us</h3>
  	  		 <img src="images/IMG-20180819-WA0038.jpg" alt="" sizes="
     (min-width: 40em) calc(66.6vw - 4em),
     100vw" style="width: 66.6%; margin-top: 10px">
  	  		 </center>
  	  		 <p style="text-align: justify; font-family: Georgia; font-size: 18px; margin-top: 30px">BIDHANNAGAR SOCIAL WELFARE SOCIETY is located in Siliguri, West Bengal. 
  	  		 	BIDHANNAGAR SOCIAL WELFARE SOCIETY is registered as a Society at Kolkata of State West Bengal with NGO unique Registration Id 'WB/2014/0073164'.</p>
  	  		 	<a href="who.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic; text-align: center;">
  	  		 		<i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
		
  	  	</section>
  	  	</div>
  	  	<!-- right -->
  	  	<div class="col-xs-6 col-md-6">
			  <section style="border: 2px #c9c9c9 inset; padding: 3px; height: 380px auto">
			  	<center>
			  		<h3 style="font-family: Mangal; color: maroon;font-size: x-large">Women Empowerment</h3>
  	  		 <img src="images/IMG-20180819-WA0081.jpg" alt="" sizes="
     (min-width: 40em) calc(66.6vw - 4em),
     100vw" style="width: 66.6%;">
  	  		 </center>
  	  		 <p style="text-align: justify; font-family: Georgia; font-size: 18px">The empowerment and autonomy of women and the improvement of their political, 
  	  		 	social, economic and health status is a highly important end in itself. In addition, it is essential for the achievement of sustainable development.</p>
  	  		 	<a href="women.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic; text-align: center;">
  	  		 		<i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
  	  	</section>
  	 	</div>
</div>


  	  <div class="responsive-content">
  	  	<!-- left -->
  	  	<div class="col-xs-6 col-md-6">
			  <section style="border: 2px #c9c9c9 inset; padding: 3px; height: 380px auto">
			  	<center>
			  		<h3 style="font-family: Mangal; color: maroon; font-size: x-large">Host a Blood Donation Camp</h3>
  	  		 <img src="images/IMG-20180819-WA0089.jpg" sizes="
     (min-width: 40em) calc(66.6vw - 4em),
     100vw" style="width: 66.6%; margin-top: 10px">
  	  		 </center>
  	  		 <p style="text-align: justify; font-family: Georgia; font-size: 18px; margin-top: 30px;">
  	  		 	We appreciate for your initiative for this noble cause and we are always here to help you to organize a successful blood donation camp.
  	  		 	 Everyone wants to contribute towards the society with noble cause and save lives. You, as a blood donation camp organizer, are giving everyone a chance to involve in it. Support for Blood Donation Camps is the perfect way to cater to the demand of blood for now days.
  	  		 	  Organize these camps regularly and bring smiles to many faces and supporting for saving life also.
				 </p>
				 <a href="hostdonationcamp.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic; text-align: center;">
  	  		 		<i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
  	  	</section>
  	  	</div>
  	  	<!-- right -->
  	  	<div class="col-xs-6 col-md-6">
			  <section style="border: 2px #c9c9c9 inset; padding: 3px; height: 410px auto">
			  	<center>
			  		<h3 style="font-family: Mangal; color: maroon; font-size: x-large">Blood Support</h3>
  	  		 <img src="images/blood.jpg" sizes="
     (min-width: 40em) calc(66.6vw - 4em),
     100vw" style="width: 66.6%; margin-top: 10px">
  	  		 </center>
  	  		 <p style="text-align: justify; font-family: Georgia; font-size: 18px; margin-top: 30px">
  	  		 	Bidhannagar Social Welfare Society NGO is not having own Blood Bank, We are working/associated with NORTH BENGAL MEDICAL COLLEGE other Blood Bank to serve Blood Support. You cannot get blood directly from the Social welfare socity NGO without a completed online form signed by the doctor or authorized medical personnel.
  	  		 	You can fill request form for your Blood requirement, So that we can approach Blood Bank as per your need. Processing fee may have to be paid for the blood to the Blood bank if that is there. 
  	  		 </p>
  	  		 <a href="bloodsupport.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic; text-align: center;">
  	  		 		<i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
  	  	</section>
  	 	</div>
</div>
<!-- till here -->
 </div>   	 
<!-- end autocontainer-->
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

	<footer style="margin-top: -23px">
<?php include('template/footer.php'); ?>
	</footer>
	         
	</body>
<!-- END OF BODY -->
</html>
