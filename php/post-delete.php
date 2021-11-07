<?php

require "db.php";
      $postId=$_GET['postid'];

      $query= "DELETE FROM post where post_id='$postId'";
    		
	  $Result= mysqli_query($db,$query);
      if($Result==true){
	  header("location:profile-page.php");
      }


 ?>