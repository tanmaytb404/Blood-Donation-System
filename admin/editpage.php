<?php
		include('../config/connection.php');

?>
<?php
 		if(isset($_POST['submit']))
		{
			
			 $tca=$_POST['tca'];
			 // $tci=$_GET['tci'];
			 if(isset($_GET['id'])){
				$update="UPDATE pages SET tca='$tca' WHERE  id = $_GET[id]";	
						$r=mysqli_query($dbc, $update);
			 }
			 if($r)
			{
				header( "refresh:5; url=pages.php" );
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
  						@$q = "SELECT * FROM pages WHERE id = '$_GET[id]'";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$id = $page['id'];
						$blurb = substr($page['tca'], 0,300); 
				?>
   <h2 style="font-family: Mangal; text-align: center; color: yellowgreen">EDIT <?php echo $title; ?> PAGE</h2>

   <div class="container">
    <div class="row">
 <div class="col-md-2"></div>
  <div class="col-md-8"> 
  	<form action="editpage.php?id=<?php echo $id; ?>" method="post">
  		    <!-- <input class="form-control" id="disabledInput" type="text" name="id" placeholder="<?php echo $id; ?>" disabled>
    <br> -->		
    <label for="tca"><h4 style="font-family: Mangal">type a story</h4> </label>
    <textarea class="form-control" id="story" name="tca" placeholder="" style="height: 200px"><?php echo $blurb; ?></textarea>
    <br>
       <label for="tci"><h4 style="font-family: Mangal">add image</h4> </label>
    <input type="file" class="form-control" id="img" name="tci" placeholder="image">
  </div>
<button type="submit" name="submit" class="btn btn-success">Submit</button>

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