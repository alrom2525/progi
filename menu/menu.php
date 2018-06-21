
<div id="headermenux">
	<ul class="nav">
			
		<?php
			

			if($startx==1){

				$flagx=".";
				printf('<li><a href="'.$flagx.'">Home</a></li>');

				$flagx="signin/";
				printf('<li><a href="'.$flagx.'">Sign in</a></li>');

				$flagx="register/";
				printf('<li><a href="'.$flagx.'">Register</a></li>');
			}
			else
			{
				// $_SESSION["userx"] = $emailx;
				// $_SESSION['loggedin'] = TRUE;
				
				if($_SESSION['loggedin'] == FALSE) {
					$flagx="../";
					printf('<li><a href="'.$flagx.'">Home</a></li>');

					$flagx="../signin/";
					printf('<li><a href="'.$flagx.'">Sign in</a></li>');

					$flagx="../register/";
					printf('<li><a href="'.$flagx.'">Register</a></li>');
				}

				if($_SESSION['loggedin'] == TRUE) {
					
					if (empty($_GET['itema'])) {
					$flagx=".";
					printf('<li><a href="'.$flagx.'">Auction</a></li>');
					}
					$flagx="../";
					printf('<li><a href="'.$flagx.'">Log Out</a></li>');

				}

			}

	?>		
		
	
	</ul>
</div>


<?php
//printf ("<h1> %s </h1>", $startx );
?>
