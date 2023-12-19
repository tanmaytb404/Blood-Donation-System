<nav class="navbar navbar-default" role="navigation">
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
<!-- RUN THE data_page FUNCTION -->
		<?php nav_main($dbc,$pageid); ?>
        	<form class="navbar-form navbar-left">
        		<div class="form-group">
        		<input type="text" class="form-control" placeholder="Search">
        		</div>
        	<button type="submit" class="btn btn-default">Submit</button>
      		</form>
      		<li><a href="admin/index.php">ADMIN LOGIN</a></li>
     </ul>
     </div>
</nav>
