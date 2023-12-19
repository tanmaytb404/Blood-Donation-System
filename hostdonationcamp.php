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
	   <title>  <?php echo "HOST A BLOOD DONATION CAMP".'|'.$site_title; ?>  </title>

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
	<img src="images/habdc.jpg" height: 250px; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
 	
	  <div class="container">
<h2 style="font-weight: bold">HOST A BLOOD DONATION CAMPS</h2>	
<form>
<a href="campform.php"><input class="MyButton" type="button" value="Blood Donation Camp Form" style="margin-left: 20px"/></a>
</form>

<style>
input.MyButton {
width: 320px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
text-align: center;
margin-bottom: 30px;
margin-top: 20px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>
   		
<h4 style="text-align: left; font-weight: bold">To organize/Host A Blood Donation Camp</h4>
<div class="content"  style="text-transform: none; letter-spacing: 1px; text-align: justify; font-size: 16px; margin-bottom: 50px">
	<p>We appreciate for your initiative for this noble cause and we are always here to help you to organize a successful blood donation camp.
		 Everyone wants to contribute towards the society with noble cause and save lives. You, as a blood donation camp organizer, are giving everyone a chance to involve in it. 
		 Support for Blood Donation Camps is the perfect way to cater to the demand of blood for now days.
		 Organize these camps regularly and bring smiles to many faces and supporting for saving life also.</p>
		 <h4 style="font-weight: bold"> Requirements For Managing Camp</h4>
		 <p>A minimum of 80 to 90 people should be in the organization/company/institute. Some of the places like Markets/malls, Colleges/Institutes, Corporate organizations/companies and other good specious places can be considerable where we can easily organize. 
		 	If you cannot find a properly ventilated location inside the building, we can also help you organize a camp outside in a well equipped mobile bus. We organize blood donation camps with Red Cross Society. We believe that in the government blood banks/govt. hospitals, majority of the blood is used to help out the underprivileged.
		 	</p>
		 	<p>Our Suggestion: Covered area of 250-300 square feet connected by lift to carry equipment. Air-conditioned, Housekeeping/helpers to carry equipment to camp site. 
		 		Drinking water arrangement at the camp site. Arrangement of tea/lunch, if possible, for the medical team.</p>
		 <h4 style="font-weight: bold">Tables and Chairs</h4>
		 <p>Table 1:  Registration/Pre-donation counseling<br>
Table 2:  Pre-donation screening for Hb<br>
Table 3:  Medical exam by doctor to ascertain fitness for donation.<br>
Table 4:  Refreshments, Certificates and post donation advice.<br>
Table 5:  To keep blood bags after collection/sealing etc.<br>
In case the camp is inside the Blood Mobile, provision of table/chair is required for registration only. We provides also motivation material that can be used prior to a camp.</p>
		</div> 
</div>
<!-- FOOTER AREA -->
	<footer style="margin-top: -30px">
<?php include('template/footer.php'); ?>
	</footer>
</div>
</body>
</html>