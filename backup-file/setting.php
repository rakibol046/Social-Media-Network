<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/nav_style.css">
    <link rel="stylesheet" href="../style/setting-style.css">
    <title>Document</title>
    <style>
      * {
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
}
body{
    background-color:  #132429fa;
    color: white;
}

    #main-content{
      background-color:  #132429fa;
      padding: 60px 0px 0px 0px;
      height: auto;
      width: 100%;
      /* display: block;
      overflow: hidden; */

  }
  @media (max-width: 991px){
    #main-content{
      padding: 60px 0px 60px 0px;
    }
  }
    </style>
  </head>
  <body>
    
  <?php
    require("nav.php");
   ?>


      <div class="" id="main-content">
      <div class="row w-100">
        <div class="col-lg-3 col-sm-12 left-col">
          <h1>Settings</h1>
          <p id="general-btn">
            <i class="fas fa-cog"></i> General </p>
          <p id="security-btn">
            <i class="fas fa-shield-alt"></i>Security </p>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-8 col-sm-12 right-col">
            <div class="general-setting">
                <div class="form" id="">
                <form action="#" method="post" class="p-4">
                <h2 class="text-center">General Setting</h2>
                <hr>
                <div class="profile-change-area">
                    <img src="" alt="" height="200px" width="200px">
                    <br>
                    <input type="file">
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <div class="form-group pt-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" disabled required="required" value="">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                    <div class="form-group pt-3">
                        <label for="">Profession</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">College</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Religion</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    </div>
                </div>
                <hr>
                <a href="registration.php" type="button" class="btn mt-2 text-center w-25 float-end bg-white " id="create-btn">Save</a>
                </form>
            </div>
            </div>



            <div class="security-setting">

            <form action="#" method="post" class="p-4 security-form">
                <h2 class="text-center">Security</h2>
                <hr>
                     <div class="form-group pt-3 input-field">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                     <div class="form-group pt-3 input-field">
                        <label for="">New Password</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                     <div class="form-group pt-3 input-field">
                        <label for="">Confirm new password</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                <br>
                <br>
                <hr>
                <a href="registration.php" type="button" class="btn mt-2 text-center w-25 float-end bg-white " id="create-btn">Save</a>
                <br>
                </form>

            </div>
        </div>
      </div>

      </div>
    
    <script>
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
      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>