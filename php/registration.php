<?php
error_reporting(0);
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
    <title>Document</title>
    <style>
      body {
        background-color: lightslategray;
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

      .signup-form {
        width: 400px;
        margin: 50px auto;
        font-size: 15px;
      }

      form {
        background-color: rgb(75 93 111);
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
          <h1 class="text-primary bg-white text-center shadow-sm p-1 mb-2 bg-body rounded">CONNECTOR</h1>
          <h2 class="text-center text-white">
            <i> Connector </i> helps you connect and share with the people in your life
          </h2>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="signup-form shadow-sm p-1 mb-5 bg-body rounded">
            <form action="" method="post" class="p-4">
              <h2 class="text-center text-white">Register</h2>
              <p class="hint-text text-center text-white">Create your account. </p>
              <p class="hint-text text-center" style="color: red;"> <?php echo $message ;?> </p>
              <div class="form-group pt-3">
              <input type="text" class="form-control" name="username" placeholder="Full Name" required="required">
              </div>
              <div class="form-group pt-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
              </div>
              <div class="form-group pt-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group pt-3">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
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
            <div class="text-center text-black">Already have an account? <a href="index.php">Sign in</a>
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