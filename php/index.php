<?php
error_reporting(0);
require "db.php";

if(isset($_POST['login-submit'])) {
  $message="";
      $email=$_POST["email"];

      $password=$_POST["password"];
      $r = mysqli_query($db, "SELECT user_id, verify FROM userinfo where email='$email'");
        $n = mysqli_num_rows( $r);
        if($n>=1){
      
        $result = mysqli_query($db, "SELECT user_id, verify FROM userinfo where email='$email' AND password='$password'");
        $numberOfRows = mysqli_num_rows( $result);
        if($numberOfRows>=1){

          $row = mysqli_fetch_assoc($result);
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $userid = $row['user_id'];
            $verify = $row['verify'];


          if($verify==1){
            session_start();
            $_SESSION['userid']= $userid;
            // echo $userid;
            
            header("location:home2.php");

          }
          else{
            mysqli_query($db, "DELETE FROM userinfo where user_id='$userid'");
            $message = "You have no account";
          }

          
        }
        else{
          $message = "Wrong password";

        }
     }
     else{
      $message = "You have no account";
    }
       
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/nav_style.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      body {
        background-image: url("../photo/cover.png") ;
        background-repeat: no-repeat;
  background-size: cover;
  background-attachment: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100vw;

      }

  
      form{
        /* box-shadow: 0px 30px 129px 0 #8d0000;; */
        background-color: white;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        position: relative;
        width: 340px;
        margin: 50px auto;
        font-size: 15px;


      }
      form img{
        position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
      }

      .login-form form .custom-form {
        width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  /* margin-bottom: 30px; */
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: white;
        }
        .login-form form #input-field{
          position: relative;
        }
        .login-form form #input-field label{
          position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
  color: white;

        }

        .login-form #input-field  input:focus + label,
        .login-form #input-field  input:valid + label {
              transform: translateY(-18px);
              color: #ff652f;
              font-size: .8rem;
            }

      #create-btn {
        background-color: #17af17;
        color: white;
      }

      #create-btn:hover {
        background-color: #139613;
      }

      #content {
        margin: auto;
        padding: 20px;
      }
      #content h1{
        font-size: 3rem;
        font-weight: bold;
        letter-spacing: 30px
      }
      #content h2{
        text-shadow: -8px 5px 5px red;
      }
  

      @media (max-width: 580px) {
        body {
          height: auto;
          width: 100%;
        }

        .login-form {
          width: 100%;
        }
      }

      #mymodel {
        width: auto;
        height: auto;
        position: fixed;
        top: 5px;
        right: 5px;
        display: none;
      }
    </style>
  </head>
  <body>
    <!-- message model -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 " id="content">
          <h1 class="text-white text-center " id="title"> <pre>SOCIAL<br>  BOOK</pre></h1>
          <h2 class="text-center text-white">
            <i> S H A R E  Y O U R  L I F E </i>
          </h2>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="login-form" id="">
            <form action="" method="post" class="p-4">
              <img class="" src="../photo/avatar.png" alt="">
              <h2 class="text-center mt-5" style="color: orange" > Login</h2>
              <p class="hint-text text-center" style="color: red;"> <?php echo $message ;?> </p>
              <div class="form-group pt-1 mb-3"  id="input-field">
              
                <input type="text" class="custom-form" name="email" placeholder="" required="required">
                <label for="email">Email</label>
              </div>
              <div class="form-group pt-1" id="input-field">
                
                <input type="password" class="custom-form" name="password" placeholder="" required="required">
                <label for="email">Password</label>
              </div>
            
              <div class="clearfix pt-3 text-white">
                <label class="float-start form-check-label">
                  <input type="checkbox"> Remember me </label>
                <a href="#" class="float-end text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Forgot Password?</a>
              </div>
              <div class="form-group pt-3">
                <input type="submit" class="btn  w-100" style="background: #edb140" name="login-submit" value="Log In">
                <br>
              </div>
              <hr>
              <a href="registration.php" type="button" class="btn text-center w-100 bg-success " id="create-btn">Create an Account</a>
            </form>
          </div>
        </div>
      </div>
      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->
      <!-- forget password model -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black" id="exampleModalLabel">Enter Your Email</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <input type="email" class="form-control border border-3" id="femail" require placeholder="your email">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary w-100" name="forget_submit" id="forget-btn" data-bs-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
        <!-- forget password model end-->
      </div>


      <!-- message model -->
      <div class="message-model">
        <div class="alert alert-primary alert-dismissible" id="mymodel">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button> we sent your password on your email. check it.
        </div>
      </div>

      
      <script>
        $(document).ready(function() {
          $("#forget-btn").click(function() {
            $("#mymodel").show();
          });
        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>