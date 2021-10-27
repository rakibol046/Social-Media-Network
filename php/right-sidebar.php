<?php
// error_reporting(0);
require "db.php";
    if(isset($_SESSION['userid'])){

        $userId=$_SESSION['userid'];
    
      }



?>



<div class="right-sidebar">

    <div class="sidebar-title">
            <h4>Active now</h4>
            <!-- <a href="#">Hide Chat</a> -->
        </div>
        <?php
            $result = mysqli_query($db, "select username, user_photo from userinfo ORDER BY RAND() LIMIT 8");
                            
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='online-list'>
                <div class='online'>
                    <img src='../photo/{$row["user_photo"]}.jpg'>
                </div>
                <p class='m-2'>{$row["username"]}</p>
        
            </div>";
            }
        ?>

        


</div>