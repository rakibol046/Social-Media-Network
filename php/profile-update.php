<?php
// error_reporting(0);

    require "db.php";
    session_start();
    $file = "1";
  if(isset($_POST["profileUpdateBtn"])){
    $userid = $_SESSION['userid'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $profession = $_POST["profession"];
    $college = $_POST["college"];
    $religion = $_POST["religion"];
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];

    if($fileName != ""){           
                $fileTempName = $_FILES['file']['tmp_name'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $allowed = array('jpeg', 'jpg', 'png');
                if(in_array($fileActualExt, $allowed)){
                    $fileDestination = '../uploads/'.$fileName;
                    if( move_uploaded_file($fileTempName, $fileDestination)){
                        // echo 1;
                    }
                    // else{
                    //     echo 0;
                    // }
                    
                }
                // else{
                //     echo 0;
                // }
        
            $result = mysqli_query($db, "UPDATE userinfo SET username='$name', user_photo='$fileName', address='$address',
            profession='$profession', college='$college', religion='$religion'
            WHERE user_id = '$userid'");

            if($result==true){
              header("location:setting.php?message=Updated");

            }
            // else{
            //   echo 0;
          
            // }
    }
    else{

        echo "so what is the problem";
        $rresult = mysqli_query($db, "UPDATE userinfo SET username='$name', address='$address',
        profession='$profession', college='$college', religion='$religion'
        WHERE user_id = '$userid'");

        if($rresult==true){
          header("location:setting.php?message=Updated");
        
        }
        
    }
  }
?>