<!DOCTYPE html>
<html>
<head>
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

			<div style="width:1200px; padding:1px;">
				<h2>Welcome <?php echo $_POST["emailx"]; ?>!</h2>
			</div>

			<br>
			<hr color=orange> 			
			<br><br>
			
			<div style="width:800px; padding:10px;">
			
			Thanks for joining us!
			We send you the email with the sender "Digital Auction" so you can locate it instantly. If it is not in the inbox, look in the folders please. 

			<br><br>If an email filter or e-mail rule has moved the email, it may be in the Spam, Junk Mail, Trash, Deleted Items, or Archive folder.

			<br><br> Our email includes the credentials you will use; If in the next 5 minutes you have not received it, you can press the "Send again" button.

			</div> 

			
			
			<br><br>
			<div style="width:800px; padding:1px;">
				<div style="width:200px;  float:left;"> 
					<button type="submit">Send again</button>
				</div>
				<div style="width:200px;  float:right;">
					<form action="../signin/" method="post">
								<button type="submit">  &nbsp; &nbsp; Sign in  &nbsp; &nbsp;</button>
					</form>
				</div>
			</div> 
			
			<form action="welcome.php" method="post">
			</form>

		</article>
	</section>
	
	<footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>