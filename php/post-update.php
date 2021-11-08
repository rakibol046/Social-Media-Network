<?php
error_reporting(0);
require "db.php";
$postId=$_GET['postid'];
$updateMessage =$_GET['updatemessage'];

session_start();
   
        if($_SESSION['userid']){

        $userId=$_SESSION['userid'];
        $updateText = $_POST["updatetext"];
      
        $result = mysqli_query($db, "select * from userinfo where user_id='$userId'");
      
        $row = mysqli_fetch_assoc($result);
          $userName = $row["username"];
          $userPhoto = $row["user_photo"];

          if(isset($_POST["submit"])){

          $query= "UPDATE post set post_text='$updateText' where post_id='$postId'";
                
          $Result= mysqli_query($db,$query);
          if($Result==true){
          header("location:profile-page.php");
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
<title>Social Book</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../style/home2-style.css">
      <link rel="stylesheet" href="../style/main-content-style.css">
<style>
    /* body{
        background-image: url("../photo/cover.png") ;
        background-repeat: no-repeat;
  background-size: cover;
  background-attachment: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100vw;
    } */
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
<?php require "navigation-bar.php"; ?>



<div class="login-form" id="">
    <form action="" method="post">
        <h2 class="">UPDATE POST</h2> 
        
       
        <div class="form-group">
            <textarea rows="5" type="text" class="form-control" name="updatetext" ><?php echo $updateMessage;?></textarea>
        </div>
       
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Update">
        </div>
               
    </form>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="../javascript/home2-scrips.js"></script>
      <script src="../javascript/main-content-scrips.js"></script>
</body>
</html>


