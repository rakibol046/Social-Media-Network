<?php
// error_reporting(0);
require "db.php";

session_start();
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
        $search_value = $_POST["search"];

// $sql = "SELECT * FROM userinfo WHERE username LIKE '%{$search_value}%'";
// $result = mysqli_query($db, $sql) ;


$result = mysqli_query($db, "SELECT  userinfo.user_photo,userinfo.username, friends.friends_id 
                            FROM friends
                            INNER JOIN userinfo
                            ON friends.friends_id=userinfo.user_id
                            WHERE friends.user_id = '$userId' AND username LIKE '%{$search_value}%'
                            ORDER BY RAND();");

if(mysqli_num_rows($result) > 0 ){


              while($row = mysqli_fetch_assoc($result)){
                echo "<div class='profile-details'>
                                <div class='pd-left'>
                                    <div class='pd-row'>
                                        <img src='../uploads/{$row["user_photo"]}' class='pd-image'>
                                        <div>
                                        <a href='friends-profile.php?id={$row["friends_id"]}'> <h3> {$row["username"]} </h3></a>
                                            
                            
                                        </div>
                            
                                    </div>
                            
                                </div>
                                 <div class='pd-right'>
                                     
                                     <a href='friends-profile.php?id={$row["friends_id"]}'>Profile</a>
                                      <a >Message</a>
                                     
                            
                                 </div>
                            
                            </div>";
              }
   
}else{
    echo "<h2>No Record Found.</h2>";
}
}
else{
    header("location: index.php");
}

?>