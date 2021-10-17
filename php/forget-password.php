<?php
require "db.php";

    $forgetEmail=$_POST["femail"];
    $fresult = mysqli_query($db, "SELECT password FROM userinfo where email='$forgetEmail'");
        $fnumberOfRows = mysqli_num_rows( $fresult);
        if($fnumberOfRows>=1){

          $frow = mysqli_fetch_assoc($fresult);
            
          
            $to_email = $forgetEmail;
            $subject = "Forget password";
            $body = "Hi, Your Social Book Password : ".$frow['password'];;
            $headers = "From: mdrakibolislam046@gmail.com";
            mail($to_email, $subject, $body, $headers);
        }
        echo "1";

?>