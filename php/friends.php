
<?php
// error_reporting(0);
require "db.php";
session_start();
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
      
        $result = mysqli_query($db, "select * from userinfo where user_id='$userId'");
      
        $row = mysqli_fetch_assoc($result);
          $userName = $row["username"];
          $userPhoto = $row["user_photo"];
        
        
      
      
      }
      else{
          header("location: index.php");
      }



?>




<DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
		<title>Social Book</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../style/home2-style.css">
        <link rel="stylesheet" href="../style/friends.css">

	</head>
	<body>

    <?php require "navigation-bar.php"; ?>

    <div class="container">

        <div class="row pt-3">
            <div class="col-3 p-3">
            <?php require "left-sidebar.php"; ?>
            </div>

            <div class="col-7 friends ">
                <div class="header">
                    <h1 class="text-primary m-3">Friends</h1>
                </div>
                <hr>
                <div class="search ">
                    <div class="form">
                        <div class="input-group">
                        <input type="text" class="form-control w-50" id="search" placeholder="Search Friends">
                       
                        </div>
                    </div>
                </div>

                <hr>
                <div id="data">
                    <ul class="list-group">
                    <?php 
                    
                    
                            $userId=$_SESSION['userid'];
                          
                            $result = mysqli_query($db, "SELECT  userinfo.user_photo,userinfo.username, friends.friends_id 
                            FROM friends
                            INNER JOIN userinfo
                            ON friends.friends_id=userinfo.user_id
                            WHERE friends.user_id = '$userId'
                            ORDER BY RAND();");

                            
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='profile-details'>
                                <div class='pd-left'>
                                    <div class='pd-row'>
                                        <img src='../uploads/{$row["user_photo"]}' class='pd-image'>
                                        <div>
                                        <a href='friends-profile.php?id={$row["friends_id"]}'> <h3> {$row["username"]} </h3></a>
                                            
                            
                                        </div>
                            
                                    </div>
                            
                                </div>
                                 <div class='pd-right'>
                                     
                                     <a href='friends-profile.php?id={$row["friends_id"]}'>Profile</a>
                                      <a >Message</a>
                                     
                            
                                 </div>
                            
                            </div>";
                           }
                            
                              
                            
                    ?>
                        
                    </ul>
                </div>
            </div>
            <?php  ?>
            </div>
            
        </div>
             
</div>
<script>
        $(document).ready(function() {
            $("#search").on("keyup",function(){
            var search_term = $(this).val();
            $.ajax({
                url: "search-friends.php",
                type: "POST",
                data : {search:search_term },
                success: function(data) {
                $("#data").html(data);
                }
            });
            });
        });
      </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
        <script src="../javascript/home2-scrips.js"></script>
    </body>
    </html>