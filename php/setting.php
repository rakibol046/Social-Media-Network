<?php
error_reporting(0);
require "db.php";
$wrong="";
$updated="";
$message="";
$wrong= $_GET["wrong"];
$updated= $_GET["updated"];
$message= $_GET["message"];

session_start();
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
      
        $result = mysqli_query($db, "select * from userinfo where user_id='$userId'");
      
        $row = mysqli_fetch_assoc($result);
          $userName = $row["username"];
          $email = $row["email"];
          $password = $row["password"];
          $userPhoto = $row["user_photo"];
          $profession = $row["profession"];
          $college = $row["college"];
          $religion = $row["religion"];
          $address = $row["address"];
        
        
      
      
      }
      else{
          header("location: index.php");
      }



?> <DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <title>Connector</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../style/home2-style.css">
      <!-- <link rel="stylesheet" href="../style/main-content-style.css"> -->
      <link rel="stylesheet" href="../style/setting-style.css">
    </head>
    <body> 
      <?php require "navigation-bar.php"; ?>
     <div class="container">
        <div class="row pt-3">
        <div class="col-1"> </div>
          <div class="col-10"> <?php require "setting-content.php"; ?> </div>
         
        </div>
      </div>






      <!-- <script>
        $(document).ready(function() {
          $("#security-btn").click(function() {
            $(".general-setting").addClass("hide");
            $(".security-setting").addClass("show");
          }); 
          $("#general-btn").click(function() {
            $(".general-setting").removeClass("hide");
            $(".security-setting").removeClass("show");
            $(".security-setting").addClass("hide");
          });
        });
      </script> -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="../javascript/home2-scrips.js"></script>
      <script src="../javascript/main-content-scrips.js"></script>
    </body>
  </html>