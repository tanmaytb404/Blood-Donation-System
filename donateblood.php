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
	   <title>  <?php echo "DONATE BLOOD".'|'.$site_title; ?>  </title>

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
	<img src="images/donteblod.jpg" height: 250px; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
	 <div class="container">
	<h2 style="text-align: left;margin-bottom: 20px">DONATE BLOOD</h2>
	<div class="content"  style="text-transform: none; letter-spacing: 1px; text-align: justify; font-size: 16px; margin-bottom: 50px">
	<p >We appreciate for your initiative for this noble cause and we are always here to help. Blood Donors are real hero as they are helping to save human life. 
		Donating blood is a simple thing to do, but it can make a big difference in the lives. 
		Our volunteer/staff will ask you to fill a form with brief information on contact details and medical history.</p>
		<h4 style="font-weight: bold; margin-top:20px; margin-bottom: 10px">Before Donating Blood</h4>
		<p>The donation process from the time you arrive until the time you leave takes about 20-25 minutes. The donation itself is only about 8-10 minutes on average.<br>
			<p>The steps in the process are :</p>
             Eat something substantial before your appointment.<br>
Have plenty of liquid the day before donation, especially in warm weather. In the 3 hours before donating, have at least 3 to 4 good-sized glasses of water/juice.
		</p>
		
		
		<p><h4 style="font-weight: bold; margin-top:20px; margin-bottom: 10px">Physical Health Check-up</h4>
			You will be examined by a doctor to answer some questions about your health history. Your blood pressure and hemoglobin level will be checked.
</p>
<h4 style="font-weight: bold; margin-top:20px; margin-bottom: 10px">Blood Donation</h4>
<p>We will cleanse an area on your arm and insert a brand new sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.
The actual donation takes about 8-10 minutes, during which you will be seated comfortably.
When a unit of blood (350 – 450 ml) has been collected, the donation is complete.
A staff person will place a bandage on your arm.</p>
<h4 style="font-weight: bold">Safety -</h4>All equipment is sterile; needles are used only once and then discarded. In the great majority of individuals, a donation of 450 ml is less than 10% of your total body volume and may be given safely every 3 months. 
Your body keeps on discarding and replenishing blood all the time whether you give blood or not, so this amount is quickly replenished.
<p><h4 style="font-weight: bold; margin-top:20px; margin-bottom: 10px">After Donation Relax & Refresh -</h4>
	You can have something to eat and drink in and relax for about 15-20 minutes before departing. Within 24-48 hours your blood volume is completely restored. 
	Apart from enjoying our refreshments and souvenir, other things to help you recover quickly include:
	<p>Drink plenty of water, fruit juice etc. and avoid alcohol for 8 hours after you've given blood.<br>
Avoid any strenuous activity or heavy lifting with the 'donating arm'  for 24 hours after you've given blood.<br>
If you become unwell in any way after giving blood, speak to the doctor in-charge straight away.<br>
Whole blood donors can give blood again after 3 months.</p>
</p>
<h3>Enjoy the feeling of knowing that you helped save precious lives!</h3>
<style>
	.container {
  margin: auto;
}
.Flexible-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    margin-top: 30px;
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
input.MyButton {
width: 450px auto;
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
text-decoration:underline;
max-width:100%;
}
input.MyButton:hover {
color: #fff;
background: #bb0a1e;;
border: 1px solid #fff;
}
</style>
  <div class='Flexible-container'>
    <video width="500" height="322" controls>
      <source src="images/What happens when I give blood.mp4">
  </video>
  </div>
  
  <form>
<a href="donors.php"><input class="MyButton" type="button" value="Register Yourself as a Donor Now!" style="margin-left: 230px;"/></a>
</form>

	</div>
	</div>
	<!-- FOOTER AREA -->
	<footer style="margin-top: -30px">
<?php include('template/footer.php'); ?>
	</footer>
	</div>
</body>
</html>