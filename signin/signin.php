<!DOCTYPE html>
<html>
<head>
	<?php 
		$startx=2;
		session_start();
		$_SESSION["userx"] = "";
		$_SESSION['loggedin'] = FALSE; 
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
				<h2>Sign in</h2>
			</div>

			<br>
			<hr color=orange> 			
<?php 			
// define variables and set to empty values
$emailxErr =  $passwordxErr = ""; 
$emailx   =  $passwordx = "";
$hashed_password =  $dbpasswordx ="";

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
			<br><br>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
				method="post">
		
		

			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;" align="right"> E-mail:</div>
				<div style="width:200px;  float:right;"><input type="text" name="emailx" size="30" value="<?php echo $emailx; ?>">
				</div>
			</div> 
			<br><br><br>
			
			<div style="width:400px; padding:1px;">
				<div style="width:175px;  float:left;" align="right"> Password:</div>
				<div style="width:200px;  float:right;">
					<input type="Password" name="passwordx" maxlength="30" autocomplete="off" data-qa="password-field" size="30" value="<?php echo $passwordx; ?>">
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

<?php

// Validating 
 
if (empty($emailxErr)==FALSE  || empty($passwordxErr)==FALSE) {
echo "<font color=red> 
	  	<br>Please be sure that email and password are correct.
      </font>  ";
}

// Verifying the information
if (empty($emailx)==FALSE && empty($passwordx)==FALSE)  {
	
	require_once('../connexion/connexion.php');
	$sql = "SELECT emailx, TRIM(passwordx) AS passwordbd FROM buyers 
	WHERE emailx='$emailx'; ";
	
	$result = $__connexion->query($sql);
	$row_cnt = $result->num_rows;
	$row = $result->fetch_assoc();
// Verifying the information - E-mail	
	if ($row_cnt<1) {
		echo "<font color=red> Sorry, we don't recognize this email. </font> ";
    }	


    else {
// The account exist!
// Verifying the information - Password
     $dbpasswordx=$row["passwordbd"];
     $key='MASIS'; 
     /*$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($dbpasswordx), MCRYPT_MODE_CBC, md5(md5($key))), "\0");*/
 	 $hashx = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $passwordx, MCRYPT_MODE_CBC, md5(md5($key))));
   	// echo "Password BD: <br>";
    // echo "Input Password: $passwordx<br>";
	$__connexion->close();
	if (strcmp($hashx,$dbpasswordx) !== 0) {
   			echo "<font color=red> Invalid password. Please try again. </font> ";
   	}
	else {
		session_start();
		// Set session variables
		$_SESSION["userx"] = $emailx;
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
		header ("Location: ../auction/");
			
	}
			
	
	} // if ($row["exist"]>=1) 
	 
} // if (empty($emailx)==FALSE && empty($passwordx)==FALSE)


?>
		
		<br> <br>
		 <a href='forgot.php'> Forgot your password? </a>
		</article>
	</section>
	
	<footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>