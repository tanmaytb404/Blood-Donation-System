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
   <title>  <?php echo 'GALLERY'.'|'.$site_title; ?>  </title>

       <!-- Bootstrap -->
	    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
	    <link rel="stylesheet" href="css/font-awesome.css">
	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="js/bootstrap.min.js" rel="stylesheet">
	  	<link rel="stylesheet" href="config/style.css" />
	   <?php include('config/js.php') ?>
<link rel="stylesheet" href="css/gallery.css" />
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
</div>
 <!--END TOP -->
 <div class="container">
<h1>Take a look on the beautiful moments we have created</h1>
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.gallery {
  width: 100%;
  max-width:100%;
  margin: 0 auto;
  padding: 5px;
background-color: #5de6de;
background-image: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%);
  box-shadow: 0 1px 2px rgba(0,0,0,.3);
  margin-bottom: 30px;
}

.gallery > div {
  position: relative;
  float: left;
  padding: 5px;
}

.gallery > div > img {
  display: block;
  width: 200px;
  transition: .1s transform;
  transform: translateZ(0); /* hack */
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(1.7,1.7);
  transition: .3s transform;
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
}

.cf:after {
  clear: both;
}

h1 {
  margin: 40px 0;
  font-size: 30px;
  font-weight: 300;
  text-align: center;
}

</style>
<div class="gallery cf">
	    		<?php
    		$q ="SELECT  *  FROM gallery ORDER by ID desc";
			$r = mysqli_query($dbc,$q);
			while($uploaded=mysqli_fetch_assoc($r))
			{ ?>		
  <div>
    <img src="gallery/media/<?php echo $uploaded['img']; ?>" />
  </div>
  <?php }?>

</div>
</div>
	<footer>
<?php include('template/footer.php'); ?>
	</footer>
</body>
</html>