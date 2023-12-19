		<div id="console-debug"> 
			<?php
			
				$all_vars = get_defined_vars();
				
	        ?>
	        <h1>all variables</h1>
			<pre>
	             <?php
	             print_r($all_vars); ?>
	        </pre>
	        <h1>
	        	page array
	        </h1>
	        <pre>
	             <?php
	             print_r($page);
	             ?>
	         </pre>
	        </div>