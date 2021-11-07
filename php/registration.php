<?php
// error_reporting(0);
    require "db.php";
	$message="";
    if(isset($_POST['registration'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['confirm_password'];
        $gender = $_POST['gender'];
        if($gender!=""){
          if($password==$c_password){
              $numberOfRows = mysqli_num_rows(mysqli_query($db, "select email from userinfo where email='$email'"));
              if( $numberOfRows>=1){
                  $message = "Account already present";
              }
              else{
                  $verify_code = rand(100000,999999);
      
          $to_email = $email;
          $subject = "Verificatiin Code";
          $body = "Hi, ".$username." Verification code is ". $verify_code;
          $headers = "From: mdrakibolislam046@gmail.com";

          if (mail($to_email, $subject, $body, $headers)) {
            mysqli_query($db, "insert into userinfo(username, email, password, gender, verify ) value('$username','$email', '$password', '$gender', '$verify_code')");
            header("location: confirm_code.php?email=$email");
          } else {
            echo "Email sending failed...";
          }
          
              }
          }
          else{
              $message = "Password not matched";
          }
        }
        else{
          $message = "Select gender";
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
    <title>Social Book</title>
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

      .signup-form {
        width: 400px;
        margin: 50px auto;
        font-size: 15px;
      }

    

      /* form {
        background-color: rgb(75 93 111);
      } */
      form{
        background-color: white;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        position: relative;

      }

      
    .signup-form form img{
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
        width: 100px;
        background: rgba(255,255,255, 0.8);
        border-radius: 50%;
      }

      .signup-form form .custom-form {
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
        .signup-form form #input-field{
          position: relative;
        }
        .signup-form form #input-field label{
          position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
  color: white;

        }

        .signup-form #input-field  input:focus + label,
        .signup-form #input-field  input:valid + label {
              transform: translateY(-18px);
              color: #ff652f;
              font-size: .8rem;
            }


      @media (max-width: 580px){
        body {
        height: auto;
        width: 100%;
      }
            .signup-form {
            width: 100%;
            height: auto;
            }
            }


    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 " id="content">
        <h1 class="text-white text-center " id="title"> <pre>SOCIAL<br>  BOOK</pre></h1>
          <h2 class="text-center text-white">
            <i> S H A R E  Y O U R  L I F E </i>
          </h2>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="signup-form " id="form">
            <form action="" method="post" class="p-4 ">
              <img class="" src="../photo/profile.png" alt="">
              <h2 class="text-center  mt-5" style="color: orange" >Register</h2>
              <p class="hint-text text-center text-white">Create your account. </p>
              <p class="hint-text text-center" style="color: red;"> <?php echo $message ;?> </p>
              <div class="form-group pt-1 mb-3"  id="input-field">
              <input type="text" class="custom-form" name="username" placeholder="" required="required">
              <label for="name">Full Name</label>
              </div>
              <div class="form-group pt-1 mb-3"  id="input-field">
                <input type="email" class="custom-form" name="email" placeholder="" required="required">
                <label for="email">Email</label>
              </div>
              <div class="form-group pt-1 mb-3"  id="input-field">
                <input type="password" class="custom-form" name="password" placeholder="" required="required">
                <label for="Password">Password</label>
              </div>
              <div class="form-group pt-1 mb-3"  id="input-field">
                <input type="password" class="custom-form" name="confirm_password" placeholder="" required="required">
                <label for="Password">Confirm Password</label>
              </div>


              <strong class="d-block pt-3 pb-1 text-white" >Gender ? </strong>
              
              <div class="form-check form-check-inline text-white">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline text-white">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline text-white">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
                  <label class="form-check-label" for="inlineRadio2">Other</label>
                </div>



              <div class="form-group pt-3 text-white">
                <label class="form-check-label">
                  <input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
                </label>
              </div>
              <div class="form-group pt-3">
                <button type="submit" name="registration" class="btn btn-success btn-lg w-100">Register Now</button>
              </div>
            </form>
            <div class="text-center text-white mb-3">Already have an account? <i> <b> <a href="index.php" style="color: white;  " >Login</a></b></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>