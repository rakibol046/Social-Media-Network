<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpeg', 'jpg', 'png');
        if(in_array($fileActualExt, $allowed)){
            $fileDestination = '../uploads/'.$fileName;
           if( move_uploaded_file($fileTempName, $fileDestination)){
                echo 1;
           }
           else{
               echo 0;
           }
            
        }
        else{
            echo 0;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit"></button>
    
    </form>
</body>
</html>