<?php
		include('../config/connection.php');
?>
<?php
 		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['number'];
			$address=$_POST['address'];
			$zip=$_POST['zip'];
			 // $tci=$_GET['tci'];
			 if(isset($_GET['id'])){
				$update="UPDATE contact SET name='$name' email='$email' phone='$phone' address='$address' zip='$zip' WHERE  id = $_GET[id]";	
						$r=mysqli_query($dbc, $update);
			 }
			 if($r)
			{
				header( "refresh:5; url=index.php" );
				echo "<p style=font-family:mangal>page is updated successfully</p><br><a href=index.php><p>back to admin panel</p></a>";
				
				}else{
					echo "<script>alert('story cannot be added back to pages table and try again ')</script>";
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
  	  			<?php
  						@$q = "SELECT * FROM contact WHERE id = '$_GET[id]'";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$name= $page['fname'];
						$email= $page['email'];
						$phone= $page['phone'];
						$address= $page['address'];
						$zip= $page['zip'];
						$id = $page['id'];
				?>
   <h2 style="font-family: Mangal; text-align: center; color: yellowgreen">EDIT DETAILS</h2>

   <div class="container">
    <div class="row">
 <div class="col-md-2"></div>
  <div class="col-md-8"> 
  	<form action="editinfo.php?id=<?php echo $id; ?>" method="post">
  		    <!-- <input class="form-control" id="disabledInput" type="text" name="id" placeholder="<?php echo $id; ?>" disabled>
    <br> -->		
    <label for="tca"><h4 style="font-family: Mangal">Name:</h4> </label>
   <input type="text" name="name" id="name" value="<?php echo $name; ?>" />
    <br>
       <label for="tci"><h4 style="font-family: Mangal">Email:</h4> </label>
     <input type="text" name="name" id="name" value="<?php echo $email; ?>" />
     <br>
            <label for="tci"><h4 style="font-family: Mangal">Phone:</h4> </label>
     <input type="number" name="number" id="number" value="<?php echo $phone; ?>" />
     <br />
                 <label for="tci"><h4 style="font-family: Mangal">Address:</h4> </label>
     <input type="text" name="address" id="address" value="<?php echo $address; ?>" />
     <br />
                 <label for="tci"><h4 style="font-family: Mangal">Zipcode:</h4> </label>
     <input type="number" name="zip" id="zip" value="<?php echo $zip; ?>" />
     <br />
     <br />
  <button type="submit" name="save" class="btn btn-success">Save</button>
  </div>

</form>
<div class="col-md-2"></div>
</div>
 
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
