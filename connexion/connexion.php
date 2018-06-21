 <?php

 
$__connexion = connectx();
 
function connectx(){
     
     $serverx="localhost";
     $userx="root";//
	   $passx = "123456";
     $DBx = "dauction";
	 // mysqli_connect($servidor,$usuario,$pass,$DB); 
     $connexion = new mysqli($serverx,$userx,$passx,$DBx);

     //The connection to the DB, it's correct?
     if(!$connexion){
        echo "Error when trying to connecting to DB [error connexion DB]";
        exit();
     }
     
     //else { echo "Success to connecting to DB!!!!!"; }

	 
	      
	 return $connexion;
  }
  
  function Desconnecti($link){
    mysqli_close($link);
  }

?>
