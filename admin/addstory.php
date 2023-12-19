<?php
		include('../config/connection.php');
		 	
 		if(isset($_POST['submit']))
		{
			 $tca=$_POST['tca'];
			 $tci=$_FILES['tci'];
			 $fileName=$_FILES['tci']['name'];
			 $fileTmpName=$_FILES['tci']['tmp_name'];
			 $fileSize=$_FILES['tci']['size'];
			 $fileError=$_FILES['tci']['error'];
			 $fileType=$_FILES['tci']['type'];
			 
			 $fileExt=explode('.',$fileName );
			 $fileActualExt=strtolower(end($fileExt));
			 
			 $allowed=array('jpg','jpeg','png','pdf');
			 
			 if(in_array($fileActualExt, $allowed)){
			 	if($fileError === 0){
			 		$fileNameNew= uniqid('',true).".".$fileActualExt;
					$fileDestination = '../images/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
			 	}else{
			 		echo "<script>alert('there was an error uploading file')</script>";
			 	}
			 }else{
			 	echo "<script>alert('you cannot upload files of this type!')</script>";
			 }
			
			$insert="insert into stories (story,image) values('$tca','$fileNameNew')";
			$r=mysqli_query($dbc, $insert);
			if($r)
			{
				echo "<script>alert('story added successfully')</script>";
			}
			else {
				echo "<script>alert('story added successfully')</script>";
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="//cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script>
    <title>stories</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <h2 style="font-family: Mangal; text-align: center; color: yellowgreen">add new story</h2>
   <div class="container">
    <div class="row">
 <div class="col-md-2"></div>
  <div class="col-md-8"> 
  	<form action="addstory.php" method="post" enctype="multipart/form-data">
    <label for="tca"><h4 style="font-family: Mangal">type a story</h4> </label>
    <textarea class="form-control" id="story" name="tca" placeholder="type here" style="height: 200px"></textarea>
    <br>
       <label for="tci"><h4 style="font-family: Mangal">add image</h4> </label>
    <input type="file" class="form-control" id="img" name="tci" placeholder="image">
  </div>
<button name="submit" class="btn btn-success">Submit</button>
 </form>
                 <script>
                        CKEDITOR.replace( 'tca' );
                </script>
<div class="col-md-2"></div>
</div>
 
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>