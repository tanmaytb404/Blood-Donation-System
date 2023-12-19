<?php include('../config/connection.php'); ?>
<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>
			
		</title>
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
<body>
	<?php
	
		function checkKeys($dbc, $randStr){
			$sql="SELECT * FROM donor_registration";
			$r=mysqli_query($dbc, $sql);
			
			while($row=mysqli_fetch_assoc($r)){
				if($row['keystringkey'] == $randStr){
					$keyExists = true;
					break;
				} else {
					$keyExists = FALSE;
				}
			}
			return $keyExists ;
		}
		
		function generateKey($dbc){
			$keyLength=10;
			$str="1234567890abcdefghijklmnopqrstuvwxyz#*";
			$randStr=substr(str_shuffle($str), 0, $keyLength);
			
			$checkKey = checkKeys($dbc, $randStr);
			
			while($checkKey == TRUE) {
				$randStr=substr(str_shuffle($str), 0, $keyLength);
				$checkKey = checkKeys($dbc, $randStr);
			}
			return$randStr;
		}
	echo generateKey($dbc);
	$keystringkey = generateKey($dbc);
	$id=4;
			$update="update donor_registration set keystringkey = '$keystringkey' where id=$id";
			$r=mysqli_query($dbc, $update);
	?>
</body>