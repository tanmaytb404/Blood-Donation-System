<!-- <nav class="navbar-light default-color lighten-4"> -->
<nav class="navbar navbar-default" role="navigation"> 
	<div class="container">
		<ul class="nav navbar-nav">
			<?php //nav_main($dbc,$pageid); ?>
	        <li <?php if($pageid == 1) {echo 'class="active"'; }?>><a href="?page=1">DASHBOARD</a></li>
			<li <?php if($pageid == 2) {echo 'class="active"'; }?>><a href="?page=2">PAGES</a></li>
			<li <?php if($pageid == 3) {echo 'class="active"'; }?>><a href="?page=3">USERS</a></li>
			<li <?php if($pageid == 4) {echo 'class="active"'; }?>><a href="?page=4">SETTINGS</a></li>
			<li <?php if($pageid == 5) {echo 'class="active"'; }?>><a href="?page=5">DONATION</a></li>
		</ul>
		
		<div class="pull-right">
  			<ul class="nav navbar-nav">
  				<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          		<?php echo $user['fullname']; ?>
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
