<?php
// error_reporting(0);
require "db.php";
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
        $gender = $row["gender"];
        $college = $row["college"];
        $religion = $row["religion"];
        $address = $row["address"];
        
      
      
      }
      else{
          header("location: index.php");
      }


      $numberOfFriends = mysqli_num_rows(mysqli_query($db, "SELECT * FROM friends WHERE user_id='$userId'"));


?> <DOCTYPE html>
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
      <link rel="stylesheet" href="../style/profile-content-style.css">
    </head>
    <body> <?php require "navigation-bar.php"; ?>
     <div class="container-fluid">
        <div class="row ">
          
          <div class="col-12"> <?php require "profile-content.php"; ?> </div>
        </div>
      </div> 
      
      <script>
        //  var photoShow = $("#show-post-photo").files.item(0).name;
        //   alert("photoShow");
        //   if(photoShow=="../uploads/"){
        //     $("#show-post-photo").style.display="none";
        //   }



        const photo = document.querySelector("#photo");

        function fun() {
          photo.click();
        }
        photo.addEventListener("change", function() {
          var img = document.getElementById("imgPreView");
          img.style.display = "block";
          // img.src=result;
          const file = this.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function() {
              const result = reader.result;
              img.src = result;
            }
            reader.readAsDataURL(file);
          }
          document.getElementById("imgPreViewArea").style.display = "block";
          // document.getElementById("imgPreView").innerHTML= this.files.item(0).name;
          document.getElementById("post-btn").removeAttribute("disabled");
        })
        // function ClearImg(e){
        //   this.preventDefault();
        //   var img = document.getElementById("imgPreView");
        //   img.src="";
        // }
        function isEmpty() {
          let text = document.getElementById("text").value;
          if (text != "") {
            document.getElementById("post-btn").removeAttribute("disabled");
          } else {
            document.getElementById("post-btn").setAttribute("disabled", "disabled");
          }
        }
        //     photo.addEventListener("change", function() {
        //     const file = this.files[0];
        //     if(file){
        //         const reader = new FileReader();
        //         reader.onload = function(){
        //             var result = reader.result;
        //             img.src=result;
        //         }
        //         reader.readAsDataURL(file);
        //     }
        // })
      </script>
      <script>
        $(document).ready(function() {

          $("#clearImgBtn").click(function(e) {
            // alert("Data inserted");
            e.preventDefault();
            var img = document.getElementById("imgPreView");
            img.src = "";
            document.getElementById("imgPreViewArea").style.display = "none";
            document.getElementById("post-btn").setAttribute("disabled", "disabled");
            isEmpty();
            // var text = $("#text").val();
            // var photo = "profile";
            // // var text = "hello";
            // alert("working");
            //   $.ajax({
            //   url: "post.php",
            //   type : "POST",
            //   data : {text_post:text, photo_post:photo},
            //   success : function(data){
            //     if(data == 1){
            //       alert("done");
            //     }
            //   }
            // });
          });

        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="../javascript/home2-scrips.js"></script>
      <script src="../javascript/main-content-scrips.js"></script>
    </body>
  </html>