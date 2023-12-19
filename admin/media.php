<!-- user login required code -->
<?php
		include('../config/connection.php');
		session_start();
						if(!isset($_SESSION['username']))
				{
					header('location:ulogin.php');
				}	
		 		if(isset($_POST['submit']))
		{
			 $newFN=$_POST['filename'];
			 if(empty($newFN)){
			 	$newFN="gallery";
			 } else {
			 	$newFN = strtolower(str_replace(" ", "_", $newFN));
			 }
			 $newIT=$_POST['imagetitle'];			 
			 $newID=$_POST['imagedesc'];					 

			$file=$_FILES['file'];
			 $fileName=$_FILES['file']['name'];
			 $fileTmpName=$_FILES['file']['tmp_name'];
			 $fileSize=$_FILES['file']['size'];
			 $fileError=$_FILES['file']['error'];
			 $fileType=$_FILES['file']['type'];

			$file=$_FILES['file'];
			$filename=$file['name'];
			$filetype=$file['type'];
			$filetempname=$file['tmp_name'];
			$filesize=$file['size'];
			
			$fileExt=explode(".",$filename);
			$fileActualExt= strtolower(end($fileExt));
			$allowed=array('jpg','jpeg','png','pdf');
			if(in_array($fileActualExt, $allowed)){
			 	if($fileError === 0){
			 		$fileNameNew= uniqid('',true).".".$fileActualExt;
					$fileDestination = '../gallery/media/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
			 	}else{
			 		echo "<script>alert('there was an error uploading file')</script>";
			 	}
			 }else{
			 	echo "<script>alert('you cannot upload files of this type!')</script>";
			 }
			
			$insert="insert into gallery (title,descGal,img) values('$newIT','$newID','$fileNameNew')";
			$r=mysqli_query($dbc, $insert);
			if($r)
			{
				echo "<script>alert('file added successfully')</script>";
			}
			else {
				echo "<script>alert('file connot be added')</script>";
			}
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
    <link rel="stylesheet" href="css/font-awesome.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="config/style.css" />
    <?php include('config/style.css') ?>	     
	<?php include('config/js.php') ?>
		
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
 			<li><a href="donors.php"><i class="fas fa-tint" style="margin: 5px"></i>DONORS</a></li>
 			<li class="active"><a href="media.php"><i class="fas fa-images" style="margin: 5px"></i>INSERT IMAGES</a></li>
			<li><a href="#"><i class="fa fa-wrench" aria-hidden="true" style="margin: 5px"></i>SETTINGS</a></li>
			<li><a href="https://www.payumoney.com/merchant-dashboard/#/transactions"><i class="fa fa-inr" aria-hidden="true" style="margin: 5px"></i>DONATIONS</a></li>
			<li><a href="#"><i class="fa fa-calendar" aria-hidden="true" style="margin: 5px"></i>MAKE AN EVENT</a></li>
 		</ul>
 	</div>
</div>
<div class="col-md-9">
<div class="container-fluid">
  	<h2 style="font-family: Mangal"> UPLOAD IMAGES</h2>
<form action="media.php" method="post" enctype="multipart/form-data">
    <label for="filename"><h4 style="font-family: Mangal">enter file name</h4> </label>
    <input type="text" class="form-control" name="filename" placeholder="File Name">
    
        <label for="imagetitle"><h4 style="font-family: Mangal">enter image title </h4> </label>
    <input type="text" class="form-control" name="imagetitle" placeholder="Image Title">

        <label for="filedesc"><h4 style="font-family: Mangal">enter file description</h4> </label>
    <input type="text" class="form-control" name="imagedesc" placeholder="File Description">

       <label for="image"><h4 style="font-family: Mangal">add image</h4> </label>
    <input type="file" class="form-control" id="img" name="file" placeholder="image">
    <br>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
 </form>
  </div>


</div>
</div>
</div >
</div>

	<!--?php include(D_TEMPLATE.'/navigation.php'); ?-->
          	 	

	         
	  </body>
</html>
