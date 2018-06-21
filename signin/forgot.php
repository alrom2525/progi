<!DOCTYPE html>
<html>
<head>
	<?php 
		$startx=2; 
	?> 
	<meta charset="utf-8">	
	<title>Digi Auction</title>
	<link rel="stylesheet" type="text/css" href="../css/mainstyles.css">
</head>

<body>

<div id=maincontainer>
	<header> <?php require_once '../layout/header.php'; ?> </header>
	<nav> 	<?php require_once('../menu/menu.php'); ?> </nav>

	<section id=maincontentx> 
	<article> 
			<br>

			<div style="width:400px; padding:1px;">
				<h2>Forgot your password?</h2>
			</div>

			<br>
			<hr color=orange> 			
			<br><br>
			<form action="welcome.php" method="post">
		
		

			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;" align="right"> E-mail:</div>
				<div style="width:200px;  float:right;"><input type="text" name="emailx" size="30">
				</div>
			</div> 
			<br><br><br>
			
			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;" align="right"> Password:</div>
				<div style="width:200px;  float:right;">
					<input type="Password" name="passwordx" maxlength="30" autocomplete="off" data-qa="password-field" value="" size="30">

				</div>      	
			</div> 
				
		
			<br><br><br>
			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;"> 
					<img src="../img/loginx.png" height="40%" width="40%" align="right">
				</div>
				<div style="width:200px;  float:right;">
					<button type="submit">Sign in</button>
				</div>
			</div> 
		

		
		</form>
		
		<br> <br>
		 <a href='forgot.php'> Forgot your password? </a>
		</article>
	</section>
	
	<footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>