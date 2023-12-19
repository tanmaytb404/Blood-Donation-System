<!-- user login required code -->
		<?php
			session_start();
						if(!isset($_SESSION['username']))
				{
					header('location:ulogin.php');
				}	
		?>  

<!-- INCLUDE OF SETUP FILE -->
<?php include('config/setup.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- START OF HEAD PORTION -->	
	<head>
		
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title>
       <!-- Bootstrap -->
    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="config/style.css" />
    <?php include('config/style.css') ?>	     
	<?php include('config/js.php') ?>
		<style>
			table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
		</style>
	</head>
<!-- END -->
<!-- START OF BODY PORTION -->	    
	<body>
		<div id="wrapper">
			<!-- NAVBAR STARTS -->
			<nav class="navbar navbar-inverse" role="navigation">
										<ul class="nav navbar-nav">
<li>	<a href="index.php"> <h2 style="font-family: Mangal; color: white; margin: 2px -15px 0 50px; " >ADMIN PANEL</h2> </a></li>

</ul> 
				<div class="container">
		<div class="pull-right">
  		<ul class="nav navbar-nav">
    	<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
<?php 
		$email=$_SESSION['username'];
		$q ="SELECT * FROM public WHERE email = '$email'";
		$r = mysqli_query($dbc, $q);
		$data = mysqli_fetch_assoc($r);
		echo $data['name']; 
 ?> <i class="fa fa-eye" aria-hidden="true"></i></a> 
           	 	<ul class="dropdown-menu">
 		  <li><a href="ulogout.php">LOG OUT &nbsp; <i class="fa fa-power-off" aria-hidden="true"></i></a></li>
 		  <li><a href="#">CHANGE PASSWORD &nbsp; <i class="fa fa-key" aria-hidden="true"></i> </a></li>
 		  </ul>
 </li>	
				<li>
		  			<?php if($debug == 1) { ?>
					<button id="btn-debug" type="button" class="btn btn-warning navbar-btn"><i class="fa fa-bug"></i></button>
					<?php } ?>
				</li>
				</ul>
		</div>
		</div>
 		 </nav>
 		 <!-- END -->
 		 			 <div class="row">
 	<div class="col-md-3">
 		
 		 <div class="pro" >
 		 	<!--provide admin photo-->
 		 </div> 
 	
 	<div class="menu">
 
 		<ul>
 			<li class="active"><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true" style="margin: 5px"></i>DASHBOARD</a></li>
 			<li><a href="pages.php"><i class="fa fa-pagelines" aria-hidden="true" style="margin: 5px"></i>PAGES</a></li>
 			<li><a href="donors.php"><i class="fas fa-tint" style="margin: 5px"></i>DONORS</a></li>
 			<li><a href="media.php"><i class="fas fa-images" style="margin: 5px"></i>INSERT IMAGES</a></li>
			<li><a href="#"><i class="fa fa-wrench" aria-hidden="true" style="margin: 5px"></i>SETTINGS</a></li>
			<li><a href="https://www.payumoney.com/merchant-dashboard/#/transactions"><i class="fa fa-inr" aria-hidden="true" style="margin: 5px"></i>DONATIONS</a></li>
			<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" style="margin: 5px"></i>MAKE AN EVENT</a></li>
 		</ul>
 	</div>
</div>
<div class="col-md-9">
<h2>BLOOD REQUEST:</h2>

<table class="rtable">
  <thead>
    <tr>
      <th>patient</th>
      <th>age</th>
      <th>bloodgroup</th>
      <th>date of request</th>
      <th>units</th>
      <th>email</th>
      <th>phone</th>
      <th>address</th>
      <th>request by</th>
      <th>reply</th>
    </tr>
  </thead>
  <tbody>
  	  <?php
	$q="select * from bloodneed";
	$r=mysqli_query($dbc, $q);
	while(	$details=mysqli_fetch_array($r)){ ?>
    <tr>
      <td><?php echo $details['patient']; ?></td>
      <td><?php echo $details['p_age']; ?></td>
      <td><?php echo $details['p_bloodgroup']; ?></td>
      <td><?php echo $details['dor']; ?></td>
      <td><?php echo $details['units']; ?></td>
      <td><?php echo $details['email']; ?></td>
      <td><?php echo $details['phone']; ?></td>
      <td><?php echo $details['address']; ?></td>
      <td><?php echo $details['request_by']; ?></td>
      <td><a href="#"><i class="fa fa-reply" aria-hidden="true"></i></a></td>

    </tr>
    	<?php 
	}
?>
  </tbody>
</table>
<style>
	/*!
// CSS only Responsive Tables
// http://dbushell.com/2016/03/04/css-only-responsive-tables/
// by David Bushell
*/

.rtable {
  /*!
  // IE needs inline-block to position scrolling shadows otherwise use:
  // display: block;
  // max-width: min-content;
  */
  display: inline-block;
  vertical-align: top;
  max-width: 100%;
  width:100%;
  
  overflow-x: auto;
  
  // optional - looks better for small cell values
  white-space: nowrap;

  border-collapse: collapse;
  border-spacing: 0;
}

.rtable,
.rtable--flip tbody {
  // optional - enable iOS momentum scrolling
  -webkit-overflow-scrolling: touch;
  
  // scrolling shadows
  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

// change these gradients from white to your background colour if it differs
// gradient on the first cells to hide the left shadow
.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

// gradient on the last cells to hide the right shadow
.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
  background: #f2f0e6;
  color: black;
}

.rtable th,
.rtable td {
  padding: 6px 12px;
  border: 1px solid #d9d7ce;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.rtable--flip td,
.rtable--flip th {
  display: block;
}

.rtable--flip td {
  background-image: none !important;
  // border-collapse is no longer active
  border-left: 0;
}

// border-collapse is no longer active
.rtable--flip th:not(:last-child),
.rtable--flip td:not(:last-child) {
  border-bottom: 0;
}

/*!
// CodePen house keeping
*/

h1, h2, h3 {
  margin: 0 0 10px 0;
  color: #1d97bf;
}

h1 {
  font-size: 25px;
  line-height: 30px;
}

h2 {
  font-size: 20px;
  line-height: 25px;
}

h3 {
  font-size: 16px;
  line-height: 20px;
}

table {
  margin-bottom: 30px;
}

a {
  color: #ff6680;
}

code {
  background: #fffbcc;
  font-size: 12px;
}

</style>
<script>
	/*!
 * iOS doesn't respect the meta viewport tag inside a frame
 * add a link to the debug view (for demo purposes only)
 */
if (/(iPhone|iPad|iPod)/gi.test(navigator.userAgent) && window.location.pathname.indexOf('/full') > -1) {
  var p = document.createElement('p');
  p.innerHTML = '<a target="_blank" href="https://s.codepen.io/dbushell/debug/wGaamR"><b>Click here to view this demo properly on iOS devices (remove the top frame)</b></a>';
  document.body.insertBefore(p, document.body.querySelector('h1'));
}
</script>
</div>
</div>
</div>
</body>
</html>
