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

if (!empty($_GET['itema'])) {
    $codex=$_GET['itema'];
    
require_once('../connexion/connexion.php');
$sql = "SELECT id AS codey, title, startprice, deadline, description FROM item 
        WHERE status='ACTIVE' AND id=$codex; ";

$result = $__connexion->query($sql);
$row_cnt = $result->num_rows;
$row = $result->fetch_assoc();
// Verifying the quantity of records
  if ($row_cnt>=1) { 

    $currentdate = date("Y-m-d");  
    $s = strtotime($row["deadline"])-strtotime($currentdate);  
    $dx = intval($s/86400);  
    $diffex = $dx;

    $deadlinex = $row["deadline"];
    $titlex=$row["title"];
    $startpricex=$row["startprice"];
    $descriptionx=$row["description"];

  } //if ($row_cnt>=1)  

  $__connexion->close();

} //if (!empty($_GET['itema'])) 
	
?> 

	<meta charset="utf-8">	
	<title>Digi Auction</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="../css/mainstyles.css">
  <link rel="stylesheet" type="text/css" href="../css/agency.css">	
  
  
</head>

<body>


<div id=maincontainer>
	<header> <?php require_once '../layout/header.php'; ?> </header>
	<nav> 	<?php require_once('../menu/menu.php'); ?> </nav>

	<section id=maincontentx> 
	<article> 
			<div style="width:1300px; padding:1px;">
				<h2><?php echo $titlex; ?> </h2>
			</div>

			<br>
			<hr color=orange> <br> <br>			


<div class="container">
        
        <div class="row">
       
     


<div id="demo" class="carousel slide" data-ride="carousel" style="width: 75% !important;">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="width: 75% !important;">
              
              <!-- IMG1 -->

              <div class="carousel-item active">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l1600.jpg" alt="">
                </a>
              </div>

              <!-- IMG2 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16001.jpg" alt="">
                </a>
              </div>

              <!-- IMG3 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16002.jpg" alt="">
                </a>
              </div>
              
              <!-- IMG4 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16003.jpg" alt="">
                </a>
              </div>

              <!-- IMG5 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16004.jpg" alt="">
                </a>
              </div>

              <!-- IMG6 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16005.jpg" alt="">
                </a>
              </div>

              <!-- IMG7 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16006.jpg" alt="">
                </a>
              </div>

              <!-- IMG8 -->
              <div class="carousel-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                  <img style="width: 100% !important;" src="<?php echo $codex; ?>/s-l16007.jpg" alt="">
                </a>
              </div>


<!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev" >
              <span class="carousel-control-prev-icon" style="width: 70px; height: 70px; background-color: black;"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon" style="width: 70px; height: 70px; background-color: rgba(0,0,0,1);"></span>
            </a>
          </div>
        
</div>

  <div class="col-md-3" >
    <br><br>
      <h1> &#36; <?php echo $startpricex; ?> </h1>
      <form method="post">
      <input type="text" name="bidx" size="6" >  &nbsp;
      <button type="submit">Place bid</button>
      </form>
      <br> <h3>[0] Bids <br>
      <?php echo $diffex."d left"; ?>

      <br><br>
      <?php echo "$deadlinex"; ?>

      </h3>
      <br>
                
  </div>

</div>
</div>

<br><br><h3>Item description</h3>
<?php echo $descriptionx; ?>


    <!-- Modal 1 -->
    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container" >
            <div class="row">
              <div class="mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l1600.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16001.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16002.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16003.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16004.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16005.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16006.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true"  style="background: rgba(0,0,0,0.8);">
      <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(0,0,0,0.2);">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class=" mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="img-fluid d-block mx-auto" src="<?php echo $codex; ?>/s-l16007.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    


<!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/mainstyles.css">

		</article>
	</section>
	
	 <footer><?php require_once('../layout/footer.php'); ?> </footer>
</div>

</body>
</html>