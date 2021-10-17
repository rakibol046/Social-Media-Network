<?php
// error_reporting(0);
require "db.php";
$message="";
if(isset($_GET['email'])){
  $email = $_GET['email'];
  if(isset($_POST['submit'])) {
  $result = mysqli_query($db, "select verify, user_id from userinfo where email='$email'");

  $row = mysqli_fetch_assoc($result);
    $verify = $row["verify"];
    $userid = $row["user_id"];
  
  

     if($_POST['code']==$verify){
        if(mysqli_query($db, "update userinfo set verify=1 where email='$email'")){

            session_start();
            $_SESSION['userid']= $userid;
            header("location:home2.php");
        }
        
    }
    else{
        $message = "Enter Correct Code";
    }
  }
}
else{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body{
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
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
p a{
    color: white;
}
.login-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}

</style>
</head>
<body>
<div class="login-form" id="">
    <form action="" method="post">
        <h2 class="">Verification</h2> 
        
        <p class="hint-text" > <?php echo "We sent you a verification code on ". $email . " Check you Email and Enter the code";?> </p>     
        <p class="hint-text text-center" style="color: red;"> <?php echo $message ;?> </p> 
        <div class="form-group">
            <input type="text" class="form-control" name="code" placeholder="Enter Code" required="required">
        </div>
       
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
        </div>
               
    </form>
    
</div>
</body>
</html>


