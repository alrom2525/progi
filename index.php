<!DOCTYPE html>
<html>
<head>
<?php 
// remove all session variables
session_start();
session_unset(); 

// destroy the session 
session_destroy();

global $startx;
$startx=1; 
?> 	
	<meta charset="utf-8">	
	<title>Digi Auction</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyles.css">
</head>

<body>


<div id=maincontainer>
	<header> <?php require_once('layout/header.php'); ?> </header>
	<nav> 	<?php require_once('menu/menu.php'); ?> </nav>

	<section id=maincontentx> 
		<article> <img src="img/dauct.png"  height="38%" width="38%">
		</article>
	</section>
	
	<footer><?php require_once('layout/footer.php'); ?> </footer>
</div>

</body>
</html>