<?php
	include('config/setup.php');
	
	$get=$_GET['id'];
	$del="delete from pages where id='$get'";
	$r=mysqli_query($dbc, $del);
	if($r)
	{
		echo "<script>window.open('pages.php?msg=delete successfull','_self')</script>";
	}
	else {
		echo "<script>window.open('pages.php?msg=delete unsuccessfull','_self')</script>";
	}
?>  