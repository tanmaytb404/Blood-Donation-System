	<?php
	include ('config/setup.php');
	?>
	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "OUR WORKINGS".'|'.$site_title; ?>  </title>

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
	height: 100%;
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
			<img src="images/workings/er.jpg" alt="" />
			<span><h1 style="font-weight: bold"> Free Toto Services for Madhyamik Examiner's Siliguri 12 March 2018.</h1>
				<p style="font-size: medium; text-align: justify">
A social worker team had taken the responsibility to drop all the examiner's in the respective examination center.
They were four examination center in Bidhannagar, not only that but also the students from undevelopment area does
not have to pay the rent of toto, they all were giving the free toto services. They managed 10 Totos, and the students
who were travelling by this Totos did not have to pay any rent. Everything was organised by the social worker team named
Bidhannagar Social Welfare Society. During an examination one ambulance was also hired outside the examination center, 
for the frequent treatment to those students who gets ill or injured suddenly. The teachers and the students were very
happy to see all this arrangementsfor the students. The Principle of Muraliganj High School, Mr.Samsum Alam says that,
the work which has to be done by the Government and the Health Department, has been done by the Welfare Society, this
is the remarkable job done by this people and this must be appreciated by everyone. The founder of the Welfare Society
says,"If we help them in this way then they will also get influenced and motivate to help the people in future. This is 
the only aim to do.</p>
			</span>
		</div>
		<div class="slide">
			<img src="images/workings/6ty.jpg" alt="" />
			<span>
				<h1 style="font-weight: bold"> Milanpally Bidhannagar Junior Girls School Students Rally claims to promote there school to Madhyamik level</h1>
				<p style="font-size: medium; text-align: justify">The girls of Milanpally Bidhannagar Junior Girls School Walkout of school rally to promote there school to Madhyamik level. Bidhannagar
Women Education Development Committee and Bidhannagar Social Welfare Society also take a part in rally and encourges them. The Principle
of the School Miss. Anindita Biswa says; "In bidhannagar Gram Panchayat 1 and 2 there is only one Girl's school which is registered by the 
Government on 2009 as a Junior Girls school". Currently in the school an infrastructure and studies provision are really very good but still
the parents are not interested to admit their children, even in this Girl's school the Computers classes, self defence training, mid-day
meal and other things are going good but still why the parents are not showing any interest to admit their children? "Answered by the 
Guardians Samir paul, Krishna Barman, Siulee Saha, Shuklal Tudu and Md Rahim says- Studies are going good but till class-8 only , after
passing class-8, we have to admit one children in another school for the further studies, better than this if we admit the children in 
the high school directly then they will get the priviledge to complete their studies from class-5 to class-12 at once, not only this but 
they will get the benefit of "Sabooj Sathi", "Kanyashree".
   The local people of Bidhannagar 1 and 2 Gram Panchayat are also claiming to promote the girls school in higher education.
Bidhannagar Women Education Development Committee leader "Sumona Mondal" says ,"We organised the rally claiming the admission of 
the girls." Currently, there are only 90 children and 4 teachers in the school after the promotion of school in higher level the 
teachers and the staffs will be assigned.
Social worker Bapan Das says- "In 2015 we have send a request to the State Educational Department but till now we didnot get any reply.
The local people and the students wants the claim to be successful.
The main aim of the Bidhannagar Welfare Society is to provide the education to the girls from the undevelopment areas and to save 
the girls school of Bidhannagar.</p>
			</span>
		</div>
		<div class="slide">
			<img src="images/workings/e.jpg" alt="" />
			<span>
				<h1 style="font-weight: bold"></h1>
				<p style="font-size: medium; text-align: justify">10 June 2017 Sunday: After 16 years, the boy named Bablu Bara 
could see the outside world. He is the son of worker who
was physically handicap by birth, for this reason he was 
unable to walk and see the outside world. One day suddenly,
a social worker came to know about him. On friday the few 
social worker of Bidhannagar CP11 patnuriya village gave
a trycycle to Bablu.
Finally after 16 years Bablu could see the outside world,
by recieving the try cycle from the social workers of Bidhannagar.
By seeing this his mother Somari Toppo who lost all her hopes to 
see her son outside the house came into tears. It was a very happy moment 
for them. The names of the social workers who gave the happinness to the 
poor handicap boy and to his mother are Bapan Das, Local Popular Artist,
Sitam Paul, Chandan sarkar, Mithun das respectively.</p>
			</span>
		</div>
		<div class="slide">
			<img src="images/workings/9k.jpg" alt="" />
		</div>
		<div class="slide">
			<img src="images/workings/nb.jpg" alt="" />
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
<!-- FOOTER AREA -->

	<footer style="margin-top: -23px">
<?php include('template/footer.php'); ?>
	</footer>
	         
	</body>
<!-- END OF BODY -->
</html>
