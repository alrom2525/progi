<!DOCTYPE html>
<html>
<head>
	<?php 
		session_start();
		$startx=2; 

if(!isset($_SESSION['loggedin'])){
  header("Location: ../");
}
else{
  if($_SESSION['loggedin']!=':#@'){
    header("Location: ../");
  }
} 

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
				<h2>Auction</h2>
			</div>

			<br>
			<hr color=orange> <br> <br>			


<style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 5px;
    text-align: center;
    font-family: 'Times New Roman';
    font-size: 18px;
}
</style>
	
<?php
require_once('../connexion/connexion.php');
$sql = "SELECT id AS codex, title, startprice, deadline FROM item WHERE status='ACTIVE'; ";
$result = $__connexion->query($sql);
$row_cnt = $result->num_rows;
$row = $result->fetch_assoc();
// Verifying the quantity of records
	if ($row_cnt>=1) {
		
		while($row = $result->fetch_assoc()) {
        	//if($counter!=1) { echo "<br>	<hr> <br>"; }
		
		$currentdate = date("Y-m-d");  
    	$s = strtotime($row["deadline"])-strtotime($currentdate);  
    	$dx = intval($s/86400);  
    	$diffex = $dx;  
		

echo " <div class='gallery'>
  <a target='_blank' href='../items/?itema=".$row["codex"]."'>
    <img src='../items/".$row["codex"]."/s-l1600.jpg' width='300' height='200'>
  </a>
  <div class='desc'> ".$row["title"]." <br><br><b>$".$row["startprice"]." - ".$diffex."d left</b></div>
</div> ";
        }
			
	} //if ($row_cnt>=1)	

$__connexion->close();

?>

		</article>
	</section>
	
	 <footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>