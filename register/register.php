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
				<h2>Register</h2>
			</div>

			<br>
			<hr color=orange> 			

<?php 			
// define variables and set to empty values
$emailxErr =  $passwordxErr = ""; 
$emailx   =  $passwordx = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["emailx"])) {
    $emailxErr = "E-mail is required";
  } else {
    $emailx = test_input($_POST["emailx"]);
  }

  
  if (empty($_POST["passwordx"])) {
    $passwordxErr = "Password is required";
  } else {
    $passwordx= test_input($_POST["passwordx"]);
  }


} //if ($_SERVER["REQUEST_METHOD"] == "POST")

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
			<br>
			<p><span class="error">&nbsp; &nbsp; * Mandatory field</span></p>

			<br>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
				method="post">
			
			
			<div style="width:1000px; padding:1px;">
				<div style="width:175px;  float:left; padding:3px;" align="right"> 
					 <font color="red">*</font>  E-mail:
				</div>
				
				<div style="width:400px;  float:left; padding: 0px;" >
					<input type="text" name="emailx" size="30" 
					value="<?php echo $emailx; ?>">
				</div>

				<div style="width:200px;  float:left; padding: 0px;" >
					 <span class="error"> <?php echo $emailxErr;?></span>
				</div>

			</div> 

			<br><br><br>
			<div style="width:800px; padding:1px;">
				<div style="width:175px;  float:left;  padding:3px;" align="right">
					<font color="red">*</font> Password:
				</div>
				<div style="width:400px;  float:left; padding: 0px;" >
					<input type="Password" name="passwordx" maxlength="30" autocomplete="off" data-qa="password-field" size="30" value="<?php echo $passwordx; ?>">
				</div>

				<div style="width:200px;  float:left; padding: 0px;" >
					<span class="error"> <?php printf($passwordxErr); ?></span>
				</div>
				            	
			</div> 
			
			<br><br><br>
			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;"> </div>
				<div style="width:200px;  float:right;">
					<button type="submit">Register</button>
				</div>
			</div> 
			
			</form>

			<br><br><br>
			
			
<?php

// Saving the information
if (empty($emailx)==FALSE && empty($passwordx)==FALSE)  {
	
	require_once('../connexion/connexion.php');
	$sql = "SELECT COUNT(emailx) AS exist FROM buyers WHERE emailx='$emailx'; ";
	$result = $__connexion->query($sql);
	$row = $result->fetch_assoc();
	
	if ($row["exist"]>=1) {
		echo "<font color=red> 
		The email address you have entered is already registered
		</font>  ";
    }	

    else {
    	
// Insert to the DB
    	
    	$key='MASIS';  
    	$hashx = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $passwordx, MCRYPT_MODE_CBC, md5(md5($key))));


		$sql = "INSERT INTO buyers (emailx,passwordx)
		VALUES ('$emailx', '$hashx')";

		if ($__connexion->query($sql) === FALSE) {
	    	echo "Error: " . $sql . "<br>" . $__connexion->error;
	    	$__connexion->close();
		} else {
	    	$__connexion->close();
	    

// Send the email

		/*Phpmailer Configuration*/
		require "../phpmailer/class.phpmailer.php";
		$correo = new PHPMailer();
		$correo->isSMTP();

		$correo->Host = 'smtp.gmail.com'; /*Domain of gmail*/
		$correo->Port = 465; /*Port*/
		$correo->SMTPAuth = true; 
		$correo->Username = 'pruebas201803@gmail.com'; //email account
		$correo->Password = 'Pruebas201803_'; //email account password 
		$correo->SMTPSecure = 'ssl';
		$correo->setFrom('pruebas201803@gmail.com', 'Digital Auction'); 

		$correo->addAddress($emailx, 'New buyer Digital Auction');
		
		$messagex="Thanks for joining us! <br>

		<br> Your credentials account are:
		<br>username: $emailx 
		<br>password: $passwordx

<br><br>Now you are available to buy in Digital Auction.

<br><br>Please keep your passwords safe. 
<br>Please take the time to read the following recommendations to ensure you know how to do that:
<br>Use a password manager, so you can have strong, unique passwords without having to remember them all.
<br>Use antivirus software to protect you from viruses that may try to steal your passwords.
<br>Be vigilant so you don’t accidentally reveal your passwords to anyone else.
<br>We hope you will agree that the possible consequences of losing your password (listed at the beginning) make it worth the effort to stay safe.

<br><br>Regards!

		";

		$correo->Subject = utf8_encode("=?UTF-8?B?" . base64_encode("Welcome to Digital Auction") . "?="); //Subject

		$correo->msgHTML("$messagex"); //Mensaje del correo electrónico
		 
		$correo->CharSet = "UTF-8";

		if(!$correo->send()){
			// El mensaje no se envio
			printf("El mensaje NO se envio ");
		}
		else{
			//	El mensaje se envio
			//printf("<br>El mensaje si se pudo enviar<br>");
		}

			header ("Location: welcome.php");
		}
	} // if ($row["exist"]>=1) 
	 
} // if (empty($emailx)==FALSE && empty($passwordx)==FALSE)


?>
		<br> <br>
		 Do you have account? <a href='../signin/'> Signin here! </a>		
		</article>
	</section>
	
	<footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>