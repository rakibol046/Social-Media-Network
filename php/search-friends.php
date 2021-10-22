<?php
// error_reporting(0);
require "db.php";
$search_value = $_POST["search"];


$sql = "SELECT * FROM userinfo WHERE username LIKE '%{$search_value}%'";
$result = mysqli_query($db, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = ' <ul class="list-group">';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<li class='list-group-item '> 
                               
                <img src='../photo/{$row["user_photo"]}.jpg' alt=' width='50px' height='50px' class='mr-3 float-start'> 
                <a href=' class='float-start'>{$row["username"]}</a>
                <a href='' class='float-end'>Profile</a>
            </li>";
              }
    $output .= "</ul>";

    mysqli_close($db);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>