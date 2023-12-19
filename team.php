
						<?php
							include('config/setup.php');
						$q ="SELECT  *  FROM pages WHERE id=9"; 
						$r = mysqli_query($dbc,$q);
						$team = mysqli_fetch_assoc($r);
						?>
<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "OUR TEAM".'|'.$site_title; ?>  </title>

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
			background: url('images/our-team-banner-2.png');
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
<h1 style="font-family: Mangal; color: #0f2444; text-align: center; margin-right:400px;font-size: 80px; font-style: bold; margin-top: 160px; opacity: 1">OUR TEAM</h1>

</div>
  <!--END TOP -->
<div class="container">
	<h2 style="font-family:'Stardos Stencil'; text-align: left; font-size:xx-large; text-align: center">TEAM BSWS</h2>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/bd.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Bapan Das</h2>
<h4 style="text-align: left; text-align: justify">Founder of Bidhannagar Social Welfare Society & strong dedication towards NGO.
And he also a Kolkata police Special Branch officer.</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/pikai.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr.Pikai Ghosh </h2>
<h4 style="text-align: left; text-align: justify">Secretary of Bidhannagar Social Welfare Society and a skilled organizer with acknowledged. Reporter experience of over 5years with added responsibilities.</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/ss.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mrs. Shiuli Das</h2>
<h4 style="text-align: left; text-align: justify">As women we must stand up for ourselves. We must stand up for each other. We must stand up for justice for all. Assistant Secretary of Bidhannagar Social Welfare Society.
	</h4>
	<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/sumona.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Ms. Sumona Mandal</h2>
<h4 style="text-align: left; text-align: justify">Sumona is a Private School Teacher Professionally and she have a special leadership skills.
Vice President of Bidhannagar Social Welfare Society.
</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/pad.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Padyut Ghosh.</h2>
<h4 style="text-align: left; text-align: justify">Social Services and work for humanities has been started in house by our guardians.
Health Secretary of Bidhannagar Social Welfare Society with added responsibilities of organizing Camps of health, blood donation camps and other planning functions.
</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/ripon.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Ripon Sarkar</h2>
<h4 style="text-align: left; text-align: justify">He is working with various initiatives on education, healthcare, and livelihood.
Treasurer of Bidhannagar Social Welfare Society also work as a casual staff in bank.
</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/titun.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Titun Das</h2>
<h4 style="text-align: left; text-align: justify">Titun is having good experience as social services specially child education.</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/kuntal.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Kuntal Sarkar </h2>
<h4 style="text-align: left; text-align: justify">Kuntal is enthusiastic attitude for support children in education especially girl child education is appreciated.
He is Education Secretary of Bidhannagar Social Welfare Society and he is also a Private School Teacher.
</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/aparna.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Ms. Aparna Deb</h2>
<h4 style="text-align: left; text-align: justify">She is a supporter, motivational speaker on Woman Empowerment from the small age. Supreme talented women. She is a Teacher in Govt. School and a Cultural Secretary of Bidhannagar Social Welfare Society.
	</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px;margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/ptm.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;" ></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Pritam Sarkar</h2>
<h4 style="text-align: left; text-align: justify">He is an Ex Cultural Secretary of Bidhannagar Social Welfare Society. He has a special leadership skills. </h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/bhaskar.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Bhaskar Shil Sharma </h2>
<h4 style="text-align: left; text-align: justify">He believes that every single person has limitless potential and he hopes that working association with us will help to children realize their potential and improvements.
	</h4>
	<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/rajib jha.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Rajiv Jha </h2>
<h4 style="text-align: left; text-align: justify">He has multidimensional exposure to spread across various sectors in India.</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
 <div class="row" style="border-bottom: 1px solid gray; margin-top: 10px; margin-left: 10px">
<div class="col-xs-6 col-md-4"><img src="images/team/dulal.jpeg" width="247px" height="250px" style="border: 2px solid gray; padding: 5px;"></div>
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-top: 30px;"><h2 style="text-align: left">Mr. Dulal Sarkar</h2>
<h4 style="text-align: left; text-align: justify">Dulal is managing as assistance in volunteer managing department and having special leadership skills..</h4>
<p style="font-size: medium; margin-top: 20px; text-align: left">CONNECT WITH SOCIAL MEDIA:</p>
<div id="social-media" style="text-align: left">
<a href="https://www.facebook.com/bdwelfere.so"><i class="fa fa-facebook-official fa-3x" aria-hidden="true" style="color: #3b5998;"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="twitter.com"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="color:#55acee"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="instagram.com"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="color: #3f729b"></i></a>
&nbsp;&nbsp;&nbsp;
<a href="https://api.whatsapp.com/send?phone=919836000850"><i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: #25D366"></i></a>
&nbsp;&nbsp;&nbsp;
  <a href="mailto:bapandas.bsws@yahoo.com"><i class="fa fa-envelope fa-3x" aria-hidden="true" style="color: #ea4335"></i></a>
</div>
</div>
</div>
</div>
<br>
<br>

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