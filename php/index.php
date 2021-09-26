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
        background-image: url("https://images.unsplash.com/photo-1554177255-61502b352de3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100vw;
      }

      .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
      }

      form {
        background-color: rgb(75 93 111);
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
        text-shadow:7px 6px 5px #e90606;
        box-shadow: 5px 10px 5px #2d0101;
        border: 5px solid lightblue;
        background: rgba(0, 0, 0, 0.5);
        /* border-radius: 0px 50% 0px 50%; */
      }
      #content h2{
        text-shadow: -8px 5px 5px red;
      }
      form{
        box-shadow: 0px 30px 129px 0 #8d0000;;
        background-color: white;
        border: 5px solid white;
        background: rgba(0, 0, 0, 0.5);

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
          <h1 class="text-primary text-center " id="title">CONNECTOR</h1>
          <h2 class="text-center text-white">
            <i> Connector </i> helps you connect and share with the people in your life
          </h2>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="login-form" id="">
            <form action="log_action.php" method="post" class="p-4">
              <h2 class="text-center text-white">Log in</h2>
              <div class="form-group pt-1">
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
              </div>
              <div class="form-group pt-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group pt-3">
                <input type="submit" class="btn btn-primary w-100" name="submit" value="Log In">
              </div>
              <div class="clearfix pt-3 text-white">
                <label class="float-start form-check-label">
                  <input type="checkbox"> Remember me </label>
                <a href="#" class="float-end text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Forgot Password?</a>
              </div>
              <hr>
              <a href="registration.php" type="button" class="btn text-center w-100 " id="create-btn">Create an Account</a>
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