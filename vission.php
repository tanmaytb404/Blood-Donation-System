
						<?php
							include('config/setup.php');
						$q ="SELECT  *  FROM pages WHERE id=10"; 
						$r = mysqli_query($dbc,$q);
						$vision = mysqli_fetch_assoc($r);
						?>
<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "VISSION&MISSION".'|'.$site_title; ?>  </title>

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
			background: url('images/bloodbannerer.jpg');
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			  border: 2px solid gray;
			  overflow: hidden;
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
<div id="intro" class="view">
<h1 style="font-family: 'Mangal'; color: white; text-align: right; font-size: 80px; font-style: bold; margin: 160px 50px 0 0; opacity: 1">VISION & MISSION</h1>

</div>
  <!--END TOP -->
<div class="container">
 <div class="row">
 	  <div class="col-md-12">		       	 	
	<div id="details" style="margin:-20px 0 0 30px";>

			<h2 style="font-family:'Stardos Stencil'; text-align: left; font-size: xx-large; font-weight: bold">OUR VISION</h2>
			<p style=" letter-spacing: 1px; text-align: justify; font-size: small"><?php echo $vision['tca']; ?></p>
		</div>
		</div>
		</div>
 <br />
 <br />
  <br />
 <br />
<!-- sliding subbanner starts -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
     <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>        
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slide/IMG-20180819-WA0085.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="images/slide/15420780_1219120034841778_15370441656835098_n.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
        <div class="item">
      <img src="images/slide/22815461_511267049239829_4161929706209957247_n.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
        <div class="item">
      <img src="images/slide/54256899_797791237254074_3841748907973410816_n.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
        <div class="item">
      <img src="images/slide/15380305_1219119484841833_1261750473507434977_n.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
            <div class="item">
      <img src="images/slide/IMG-20180819-WA0089.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- sliding subbanner ends -->
<br>
<br>
	<!-- subpages -->
<div class="row">
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen; font-size: x-large">Our Team</h3>
		<img src="gallery/banner14.jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =9";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,300); 
				?>
				<p style=" letter-spacing:1px; text-align: justify; font-size: small">The Bidhannagar social Welfare society comprises of people from different walks of life who have all come together with their varied experiences to work towards one mission. It includes people from diverse backgrounds including social workers, MBAs, chartered accountants, corporate professionals, consultants, teachers etc

The team is a blend of experienced veterans and enthusiastic freshers; all put in sync with the organization's core values which also drive individual thought and action. BSWS endeavors to create an ambience where people have the freedom to deliver quality and take pride in their work. All the team members are also given the opportunity to connect with each other regularly.
 Events and activities are designed and organized to make each one feel, as much a part of the BSWS family.</p>
			<a href="team.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> 
				&nbsp; click here to know more</p>  </a>
				</div>
	</div>
	<!-- second col -->
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen; font-size: x-large">Awards</h3>
		<img src="images/download (1).jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
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

	<div class="row">
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen; font-size: x-large"> Legal Status</h3>
		<img src="images/downloaded.jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =11";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,300); 
				?>
				<p style=" letter-spacing:1px; text-align: justify; font-size: small"><?php echo $blurb; ?></p>
			<a href="legal.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
				</div>
	</div>
	<!-- second col -->
	<div class="col-md-6" style="border: 1px dotted gray">
		<h3 style="color: yellowgreen; font-size: x-large">Faqs</h3>
		<img src="images/download (2).jpg" width="200px" height="150px" style="border: 2px solid green"/>
		<div class="subcontent" style="margin-top: 10px">
				<p style="letter-spacing:1px; text-align: justify; font-size: small">
Bidhannagar Social Welfare Society takes pleasure in answering all the Frequently Asked Questions by the public, like questions related to the Organisation or projects that we do....
</p>
			<a href="faq.php" target="_blank" style="text-decoration: none">	<p style="font-family: 'Stardos Stencil'; font-style: italic;"><i class="fas fa-hand-point-right"></i> &nbsp; click here to know more</p>  </a>
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
</div>
</body>
 </html>