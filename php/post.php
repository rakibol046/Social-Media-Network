<?php
// error_reporting(0);

    require "db.php";
    session_start();
  if(isset($_POST["postbtn"])){
    $text = $_POST["text"];
          $file = $_FILES['file'];
          $fileName = $_FILES['file']['name'];
          $fileTempName = $_FILES['file']['tmp_name'];
          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));
          $allowed = array('jpeg', 'jpg', 'png');
          if(in_array($fileActualExt, $allowed)){
              $fileDestination = '../uploads/'.$fileName;
            if( move_uploaded_file($fileTempName, $fileDestination)){
                  // echo 1;
            }
            // else{
            //     echo 0;
            // }
              
          }
          // else{
          //     echo 0;
          // }
    $userid = $_SESSION['userid'];
    // $time = date('h:i', time());
    date_default_timezone_set("Asia/Dhaka");
    $date = date('M d Y', time()).", ".date('h:i A', time()) ;
    // $text = "hello";
    // $photo = "profile";
    // $userid = 4;
    // $date = "25-10-2021";
    // echo $fileName;
    // echo $userid;
    // echo $text;
    // echo $date;
    $result = mysqli_query($db, "INSERT INTO post(user_id, post_text, post_photo, post_date) VALUES ('$userid','$text','$fileName' ,'$date')");

    if($result==true){
      header("location:profile-page.php");
    }
    // else{
    //   echo 0;
    // }
  }
?>