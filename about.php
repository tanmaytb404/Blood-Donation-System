<?php
	include('config/setup.php');
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title>

    <!-- Bootstrap -->
    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="config/style.css" />
   <?php include('config/js.php') ?>
	</head>
<!-- END -->
	<body>
<!-- wrapped body portion -->
		<div id="wrapper">
		    <div id="top">
		  
		    <div class="row" style="margin-bottom: -70px">
  <div class="col-md-6"><center><a href="#"><img src="images/n.png"  width="550px" height="200px" style="margin: -20px 0px 0px 110px;"/></a></center></div>
  <div class="col-md-6">  
<?php include('heading.php') ?>
<h3 style="font-family:Monaco; font-style: bold; color: #205A71; margin-left: 20px">Contact us:-&nbsp;  <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;<a href="8918352754" style="color:#205A71;">
	8918352754</a> </h3>
</div>
<marquee bgcolor="#228B22" behavior="alternate"><h3 style="font-family: Mangal; color: white">Welcome to Bidhannagar Social Welfare Society &nbsp; <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp;
	 বিধাননগর সোশ্যাল ওয়েলফেয়ার সোসাইটিতে আপনাকে স্বাগত জানাই   </h3></marquee>
</div>

 <?php include ('config/navbar.php') ?>
  </div> 
 <!--END TOP -->
 <?php include('slider.php'); ?>
 <div class="row">
  <div class="col-md-8">		       	 	
  	<div class="jumbotron">
	<div id="details" style="margin-left: 30px";>
						<?php
						$q ="SELECT  *  FROM pages WHERE id=2"; 
						$r = mysqli_query($dbc,$q);
		while($about = mysqli_fetch_assoc($r))
		{?>
			<h4 style="font-family: Mangal"><?php echo $about['tca']; ?></h4>
			
		 <?php } 
		 ?>
				</div>
					</div>
</div>
  <div class="col-md-4"><img src="images/about.jpg" width="450px" height="400px" style="margin-left: -25px"></div>
</div>
<?php include('template/footer.php');?>
</body>
 </html>