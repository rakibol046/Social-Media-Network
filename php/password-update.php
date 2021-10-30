<?php
// error_reporting(0);

    require "db.php";
    session_start();
  if(isset($_POST["passwordUpdateBtn"])){
    $userid = $_SESSION['userid'];
    $password = $_POST["password"];
    $newPassword = $_POST["newPassword"];

    $result = mysqli_query($db, "SELECT password FROM userinfo where user_id='$userid'");
    
      $row = mysqli_fetch_assoc($result);
        $databasePassword = $row['password'];
  

    if($password == $databasePassword){           
          
        
            $result = mysqli_query($db, "UPDATE userinfo SET password='$newPassword' WHERE user_id = '$userid'");

            if($result==true){
              header("location:setting.php?updated=Updated");

            }
            else{
              echo "wrong in update";
          
            }
    }
    else{
        header("location:setting.php?wrong=Wrong password");
    }
 
  }
?>