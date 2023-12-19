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
			<li><a href="https://www.payumoney.com/merchant-dashboard/#/transactions"><i class="fa fa-inr" aria-hidden="true" style="margin: 5px"></i>DONATIONS</a></li>
			<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" style="margin: 5px"></i>MAKE AN EVENT</a></li>
 		</ul>
 	</div>
</div>
<div class="col-md-9">
<div class="container-fluid">
  	<h2 style="font-family: Mangal"> ADMIN DASHBOARD</h2>
  	<div class="row">
  		<div class="col-md-4">
  			<div class="as"><a href="addstory.php">
  				<center>
  					<i class="fa fa-pencil fa-5x" aria-hidden="true"></i>
  					<h3 style="font-family: Marlett">ADD STORY</h3>
  				</center></a>
  			</div>
  			</div>
  			  		<div class="col-md-4">
  			<div class="as">
  				<a href="bloodneed.php">
  			<center>
  				<i class="fas fa-tint fa-5x"></i>
  			
  <div class="open" style="margin: 10px 0 5px 0">
		  	<style>
		  		#blinkText {
  font-size: 20px;
}

#blink {
  -webkit-animation-name: blinker;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 2s;
  text-align: center;
  font-family:Mangal;
}

@-webkit-keyframes blinker {
    0% { color: red; 
          text-shadow: red 0px 0px 20px;
          font-size: 500%}
    50% { color: blue;
           text-shadow: blue 0px 0px 20px;
            font-size: 500%;}
    
    100% { color: red;
           text-shadow: red 0px 0px 20px;
            font-size: 500%;}
}

@-webkit-keyframes  woosher {
  0% {
    margin-left: 100%;
    width: 300%;
  }
  100% {
    margin-left: 50%;
    width: 100%;
  }
}
		  	</style>
    <div id='blink' class='blink'> 
     <p id="blinkText">*New blood requrest*</p>
      </div>
  </div>
  				</center></a>
  			</div>
  			</div>
  			  			  		<div class="col-md-4">
  			<div class="as">
  				<a href="members.php"> 	<center>
  							<i class="fas fa-user-friends fa-5x"></i>
  <div class="open" style="margin: 10px 0 5px 0">
  	    <div id='blink' class='blink'> 
 <p id="blinkText">*New member requrest*</p>
      </div>
  </div>
  				</center></a>
  			</div>
  			</div>
  	  	</div>		
  	  	<br />
  	  	<div class="row">
  			<div class="col-md-12">  			
  			<div class="as" style="width: 100%; ">
  				<center>
  				<h3 style="font-family: Georgia; color: blue">contacts&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i></h3>
  				</center>
  				<table>
				<thead>
					<tr>
					<th>Query for</th>
					<th>Name</th>
					<th>email</th>
					<th>phone</th>
					<th>address</th>
					<th>zipcode</th>
					<th>message</th>
					<th>reply</th>
				</tr>
				</thead>
				<?php
				$q="SELECT * FROM contact order by id desc";
				$r=mysqli_query($dbc, $q);
				while ($row=mysqli_fetch_array($r)) {
					$id = $row['id'];
					 ?>
				<tbody>
  			<tr>
  				<td><?php echo $row['query'] ?></td>
  				<td><?php echo $row['fname'] ?></td>
  				<td><?php echo $row['email'] ?></td>
  				<td><?php echo $row['phone'] ?></td>
  				<td><?php echo $row['address'] ?></td>
  				<td><?php echo $row['zip'] ?></td>
  				<td><?php echo $row['msg'] ?></td>
  				<td><a href="reply.php?id=<?php echo $id; ?>"<i class="fa fa-reply" aria-hidden="true" style="margin-left: 5px"></i></a>&nbsp;&nbsp;<a href="tel:?phone=<?php echo $row['phone'] ?>">
  					<i class="fa fa-phone" aria-hidden="true" style="margin-left: 7px"></i></a>&nbsp;&nbsp;<a class="btn btn-default" href="editinfo.php?id=<?php echo $id; ?>" aria-label="Settings"> 
  <i class="fa fa-cog" aria-hidden="true"></i>
</a>		</td> 
  			</tr>
  			</tbody>
  		<?php }?>
  			</table>
  			</div>
  			</div>
</div>
</div>
</div>
</div >
</div>

	<!--?php include(D_TEMPLATE.'/navigation.php'); ?-->
          	 	

	         
	  </body>
</html>
