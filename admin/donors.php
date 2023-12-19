
<?php
		session_start(); //SESSION STARTED:
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
   <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title>
       <!-- Bootstrap -->
    <link rel="icon" href="../images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="config/style.css" />
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
 			<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true" style="margin: 5px"></i>DASHBOARD</a></li>
 			<li><a href="pages.php"><i class="fa fa-pagelines" aria-hidden="true" style="margin: 5px"></i>PAGES</a></li>
 			<li class="active"><a href="donors.php"><i class="fas fa-tint" style="margin: 5px"></i>DONORS</a></li>
 			<li><a href="media.php"><i class="fas fa-images" style="margin: 5px"></i>INSERT IMAGES</a></li>
			<li><a href="#"><i class="fa fa-wrench" aria-hidden="true" style="margin: 5px"></i>SETTINGS</a></li>
			<li><a href="https://www.payumoney.com/merchant-dashboard/#/transactions"><i class="fa fa-inr" aria-hidden="true" style="margin: 5px"></i>DONATIONS</a></li>
			<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" style="margin: 5px"></i>MAKE AN EVENT</a></li>
 		</ul>
 	</div>
</div>
<div class="col-md-9">
	<h3 style="font-style: italic; font-family: Times; text-decoration: underline">Registered Donors:</h3>
<div class="container">
	<style>
		body { 
  font-size: 140%; 
}

h2 {
  text-align: center;
  padding: 20px 0;
}

table caption {
	padding: .5em 0;
}

table.dataTable th,
table.dataTable td {
  white-space: nowrap;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
	</style>
	<script>
		$('table').DataTable();
	</script>
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <!-- <caption class="text-center">An example of a responsive table based on <a href="https://datatables.net/extensions/responsive/" target="_blank">DataTables</a>:</caption> -->
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>BloodGroup</th>
             <th>Weight</th>
            <th>Email</th>
            <th>Address</th>
            <th>Not Suffered</th>
            <th>Phone</th>
            <th>Invite</th>
          </tr>
        </thead>
       
          	<?php 
          	$query="select * from donor_registration";
			$run=mysqli_query($dbc, $query);
			while($donors=mysqli_fetch_assoc($run))
			{ $id=$donors['id'] ?>
			<tbody>
          	<tr>
            <td><?php echo $donors['name']; ?></td>
            <td><?php echo $donors['user_name']; ?></td>
            <td><?php echo $donors['dob']; ?></td>
            <td><?php echo $donors['sex']; ?></td>
            <td><?php echo $donors['bloodgroup']; ?></td>
            <td><?php echo $donors['weight']; ?></td>
            <td><?php echo $donors['email']; ?></td>
            <td><?php echo $donors['address']; ?></td>
            <td><?php echo $donors['diseas']; ?></td>
            <td><?php echo $donors['phone']; ?></td>
            <td><a href="sendmsg.php?id=<?php echo $id; ?>" style="text-decoration: none"><i class="fas fa-calendar-plus fa-2x"></i></a></td>
          </tr>
          </tbody>
		<?php	} ?> 
        
        <tfoot>
        </tfoot>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>