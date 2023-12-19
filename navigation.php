<?php
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=social-welfare",'root','');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
	$sql = "SELECT * FROM menu ORDER BY id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	
	
?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/try.css" /> 


	</head>
	<body>
		
		<div class="container">
			<header>
	<div id="iefix" style="position:relative; z-index:1000; margin: -5px 0px -10px 0px; padding: -20px 0px 0px 0px">
<nav id="nav" role="navigation"> <a href="#nav" title="Show navigation">Show navigation</a> <a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
						<?php 
							while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
								$sub_sql = "SELECT * FROM pages WHERE menu_id=:id";
								$sub_stmt = $pdo->prepare($sub_sql);
								$sub_stmt->bindparam(':id',$row->id,PDO::PARAM_INT);
								$sub_stmt->execute();
						?>
						<li><a href="index.php"><?php echo $row->label; ?></a>
							<?php
								if($sub_stmt->rowCount()){
							?>
								<ul>
									<?php
										while ($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)) {
									?>		
										<li><a href="<?php echo $sub_row->link;?>">
											<?php echo $sub_row->label;?>
										</a></li>
									<?php	}
									?>
								</ul>
							<?php }
							?>
						</li>	
						<?php	} ?>
			</ul>
					</nav>
					</div>
</div>
	<script>
		<script src="http://osvaldas.info/examples/main.js"></script>

<script src="http://osvaldas.info/examples/drop-down-navigation-touch-friendly-and-responsive/doubletaptogo.js"></script> 
  
<script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>
	</script>					
	

			</header>
		
			<div class="info">
				
				
			</div>
		</div>
	</body>
</html>

