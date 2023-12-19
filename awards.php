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
	   <title>  <?php echo "AWARDS".'|'.$site_title; ?>  </title>

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
 <!--END TOP -->
<!-- slides start -->
<style>
#slider {
	margin: 2em auto;
	width: 960px;
	overflow: hidden;
	height: 100%;
}

#slider-wrapper {
	width: 9999px;
	height: 300px auto;
	position: relative;
	transition: left 400ms linear;
}

.slide {
	float: left;
	width: 960px;
	height: 300px auto;
	position: relative;
}
.slide img {
	width:100%;
	height:1000px;
}
#slider-nav {
	margin-top: 30px;
	text-align: center;
}

#slider-nav a {
	width: 30px;
	height: 30px auto;
	border: 1px solid #ccc;
	text-align: center;
	text-decoration: none;
	color: #000;
	display: inline-block;
	line-height: 2;
	margin-right: 0.5em;
}

#slider-nav a.current {
	border-color: #000;
}
</style>
<script>
function Slider( element ) {
	this.el = document.querySelector( element );
	this.init();
}	

Slider.prototype = {
	init: function() {
		this.links = this.el.querySelectorAll( "#slider-nav a" );
		this.wrapper = this.el.querySelector( "#slider-wrapper" );
		this.navigate();
	},
	navigate: function() {
	
		for( var i = 0; i < this.links.length; ++i ) {
			var link = this.links[i];
			this.slide( link );	
		}
	},
	
	slide: function( element ) {
		var self = this;
		element.addEventListener( "click", function( e ) {
			e.preventDefault();
			var a = this;
			self.setCurrentLink( a );
			var index = parseInt( a.getAttribute( "data-slide" ), 10 ) + 1;
			var currentSlide = self.el.querySelector( ".slide:nth-child(" + index + ")" );
			
			self.wrapper.style.left = "-" + currentSlide.offsetLeft + "px";
			
		}, false);
	},
	setCurrentLink: function( link ) {
		var parent = link.parentNode;
		var a = parent.querySelectorAll( "a" );
		
		link.className = "current";
		
		for( var j = 0; j < a.length; ++j ) {
			var cur = a[j];
			if( cur !== link ) {
				cur.className = "";
			}
		}
	}	
};

document.addEventListener( "DOMContentLoaded", function() {
	var aSlider = new Slider( "#slider" );
	
});
	
</script>
<div id="slider">
	<div id="slider-wrapper">
		<div class="slide">
			<img src="images/awards/l.jpg" alt="" />
			<span><h1 style="font-weight: bold">For Outstanding Achievement in : EDUCATION & HEALTH by College of Natural Health HUSADA ORIENTAL Indonesia (2016)</h1></span>
		</div>
		<div class="slide">
			<img src="images/awards/;p.jpg" alt="" />
			<span><h1 style="font-weight: bold">Uttarbanga Pousmela Award (2017) for Best Social Worker.</h1></span>	
		</div>
		<div class="slide">
			<img src="images/awards/jj.jpg" alt="" />
			<span><h1 style="font-weight: bold"> Achievement Award at World Blood Donor Day 2018 in Jadavpur, Kolkata.</h1></span>	
		</div>
		<div class="slide">
			<img src="images/awards/35550904_616083002091566_943858233397739520_n (1).jpg" alt="" />
				<span><h1 style="font-weight: bold">Best Social Worker Award (2014) by Laxmi Nandi Writer in North Bengal</h1></span>	
		</div>
		<div class="slide">
			<img src="images/awards/40205764_686479821718550_5027521221562990592_n.jpg" alt="" />
			<span><h1 style="font-weight: bold"> Best Social Workers Award by Ramganj Young Welfare 2017</h1></span>	
		</div>
	</div>
	<div id="slider-nav">
		<a href="#" data-slide="0">1</a>
		<a href="#" data-slide="1">2</a>
		<a href="#" data-slide="2">3</a>
		<a href="#" data-slide="3">4</a>
		<a href="#" data-slide="4">5</a>
	</div>
</div>	
<!-- slides end -->

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
		<footer style="margin-top: -30px">
<?php include('template/footer.php');?>
</footer>
</body>
 </html>