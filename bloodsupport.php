		<?php
			include('config/setup.php');
		?>  
<!-- user login required code -->
<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo "BLOOD SUPPORT".'|'.$site_title; ?>  </title>

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
	<img src="images/NEW.jpg" height: 250px; width="100%"; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
  <div class="container">
  
<h2>BLOOD SUPPORT</h2>
<div class="content"  style="text-transform: none; letter-spacing: 1px; text-align: justify; font-size: 16px">
<p>Bidhannagar Social Welfare Society NGO is not having own Blood Bank, We are working/associated with <a href="https://www.nbmch.org/" style="text-decoration: none">NORTH BENGAL MEDICAL COLLEGE </a> other Blood Bank to serve Blood Support.
You cannot get blood directly from the Social welfare socity NGO without a completed online form signed by the doctor or authorized medical personnel.You can fill following form for your Blood requirement, So that we can approach Blood Bank as per your need.
Processing fee may have to be paid for the blood to the Blood bank if that is there. No replacement donation is required. However, if your health permits, you are welcome to donate your blood to benefit another patient. This can be done on the same visit or at any future date.</p>
<p>Make sure the hospital or nursing home’s name is entered on the form and Cross matching facility is available for ascertaining blood group.</p>
</div>
<h4>Link for form filling -</h4>
<!-- button for form -->
   		<form>
<a href="bloodrequestform.php"><input class="MyButton" type="button" value="Blood Request Form"/></a>
</form>

<style>
input.MyButton {
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
margin-bottom: 50px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
</div>
<!-- FOOTER AREA -->
	<footer style="margin-top: -30px">
<?php include('template/footer.php'); ?>
	</footer>
	 </div>        
	</body>
<!-- END OF BODY -->
</html>