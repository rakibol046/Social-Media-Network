<?php
// error_reporting(0);
require "db.php";

session_start();
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
        $search_value = $_POST["search"];

// $sql = "SELECT * FROM userinfo WHERE username LIKE '%{$search_value}%'";
// $result = mysqli_query($db, $sql) ;


            $subQuery = "SELECT friends_id FROM friends WHERE user_id='$userId'";
             $result = mysqli_query($db, "SELECT user_id,username, user_photo FROM userinfo
             WHERE user_id!= '$userId' AND user_id NOT IN ($subQuery) AND username LIKE '%{$search_value}%'
            ");

if(mysqli_num_rows($result) > 0 ){


              while($row = mysqli_fetch_assoc($result)){
                echo "<div class='profile-details'>
                                <div class='pd-left'>
                                    <div class='pd-row'>
                                        <img src='../uploads/{$row["user_photo"]}' class='pd-image'>
                                        <div>
                                        <a href='public-profile.php?id={$row["user_id"]}'> <h3> {$row["username"]} </h3></a>
                                            
                            
                                        </div>
                            
                                    </div>
                            
                                </div>
                                 <div class='pd-right'>
                                     
                                 <a href='public-profile.php?id={$row["user_id"]}'>See Profile</a>
                                 <a href='add-friend-action.php?id={$row["user_id"]} '>Add Friend</a>
                                     
                            
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