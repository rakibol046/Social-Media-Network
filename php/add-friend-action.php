
<?php
// error_reporting(0);
require "db.php";
session_start();
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
        $friendId=$_GET['id'];

      
        $result = mysqli_query($db, "INSERT INTO friends(user_id, friends_id) VALUES('$userId', '$friendId')");
      
        if($result==true){
            header("location: add-friends.php");
        }
        
        
      
      
      }
      else{
          header("location: index.php");
      }



?>
