<?php 
 session_start();
 include("dbconfig.php");
if($_SESSION['name']=='')
  {
     header('location:reg.php');
  }

?>

<?php 

 	
 	


 if(isset($_GET['pid']))
 {  
 	$ps_id=$_GET['pid'];
 	// verwijder de post
     
        
       
      if($sql3)
      {
    	header("location:my_task.php");
      }

 }

?>