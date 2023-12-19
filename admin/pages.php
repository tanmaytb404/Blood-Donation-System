<!-- user login required code -->
		<?php
			session_start();
						if(!isset($_SESSION['username']))
				{
					header('location:ulogin.php');
				}	
		?>  

<!-- INCLUDE OF SETUP FILE -->
<?php include('config/setup.php');
			@$get=$_GET['msg'];
 ?>

<!-- count the number of pages -->
<?php
		$q ="SELECT * FROM pages";
		$r = mysqli_query($dbc, $q);
		$count = mysqli_num_rows($r);
?>
<!DOCTYPE html>
<html lang="en">
<!-- START OF HEAD PORTION -->	
	<head>
		
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>  <?php echo "editpage".'|'.$site_title; ?>  </title>
       <!-- Bootstrap -->
    <link rel="icon" href="../images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="config/style.css" />
<link rel="stylesheet" href="css/btn.css" />
		<?php include('config/style.css') ?>	     
		<?php include('config/js.php') ?>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
<!-- END -->
<!-- START OF BODY PORTION -->	    
	<body>
		<div id="wrapper">
			<!-- NAVBAR STARTS -->
			<nav class="navbar navbar-inverse" role="navigation">
										<ul class="nav navbar-nav">
<li>	<a href="index.php"> <h2 style="font-family: Mangal; color: white; margin: 2px -15px 0 50px; " >ADMIN PANEL</h2> </a></li>
<li> <a href=#><i class="fa fa-caret-down fa-rotate-270 fa-3x" aria-hidden="true" style="color:gray"></i></a></li>
	<li><a href="pages.php"><h2 style="font-family: Mangal; color: white; margin: 2px 0 0 -15px; " >PAGES</h2></a></li>

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
 ?>
          	 	<span class="caret"></span></a>
          	 	<ul class="dropdown-menu">
          	 	  <li><a href="logout.php">LOG OUT</a></li>
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
 			<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true" style="margin: 5px"></i>DASHBOARD</a></li>
 			<li class="active"><a href="pages.php"><i class="fa fa-pagelines" aria-hidden="true" style="margin: 5px"></i>PAGES</a></li>
 			<li><a href="donors.php"><i class="fas fa-tint" style="margin: 5px"></i>DONORS</a></li>
 			<li><a href="media.php"><i class="fas fa-images" style="margin: 5px"></i>INSERT IMAGES</a></li>
			<li><a href="#"><i class="fa fa-wrench" aria-hidden="true" style="margin: 5px"></i>SETTINGS</a></li>
			<li><a href="https://www.payumoney.com/merchant-dashboard/#/transactions"><i class="fa fa-inr" aria-hidden="true" style="margin: 5px"></i>DONATIONS</a></li>
			<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" style="margin: 5px"></i>MAKE AN EVENT</a></li>
 		</ul>
 	</div>
</div>
<div class="col-md-9">
  <marquee behavior="scroll" direction="left"><h4 style="color: red; font-family: Serif"> Total number of pages: <?php echo  $count; ?></h4></marquee>
  	<div class="row">
  		<div class="col-md-4" >
  			<ul class="list-group" style="margin-top: -15px">
  				<li class="list-group-item" style="color: yellowgreen"><h3 style="font-family: Mangal; margin: -10px 0 0 0; padding:10px;  text-align: left">LIST OF PAGES</h3>
  				</li>
  			<?php
  						$q = "SELECT * FROM pages where id>4";
						$r= mysqli_query($dbc, $q);
							while($page_list = mysqli_fetch_assoc($r))
							{  $id=$page_list['id']; 
								$title=$page_list['title']; ?>
 <li class="list-group-item"><h5 style="font-family: Mangal; margin: -10px 10px 0 0; padding-top:18px;  text-align: left; float: left"><?php echo $page_list['title']; ?></h5>

<a class="btn btn-default" href="editpage.php?id=<?php echo $id; ?>" aria-label="Settings"> 
  <i class="fa fa-cog" aria-hidden="true"></i>
</a>		
&nbsp;&nbsp;
<a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>" aria-label="Delete">
  <i class="fa fa-trash-o" aria-hidden="true"></i>
</a>					
</li>
							<!--li class="list-group-item list-group-item-warning"><h3 class="list-group-item" style="font-family: Mangal> <?php echo $page_list['title']; ?></h3></li-->
							
						<?php	} ?>
						 <a href="allpages.php" class="btn btn-hvr hvr-curl-bottom-right"><h5 style="font-family: Mangal">SEE MORE</h5></a> 
					</ul>
					</div>


</div>
</div>
</div >
</div>
</body>
</html>
