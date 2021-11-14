
        <!--profile page---------->

        <div class="profile-container">
    <!-- <img src="../images/cover.png" class="cover-img"> -->

<div class="profile-details">
    <div class="pd-left">
        <div class="pd-row">
            <img src="../uploads/<?php echo $friendPhoto ?> " class="pd-image">
            <div>
                <h3><?php echo $friendName ?> </h3>
                <p><?php echo $numberOfFriends ?> Friends</p>
               

            </div>

        </div>

    </div>
     <div class="pd-right">
         
         <button type="button"><img src="../images/add-friends.png">Friend</button>
          <button type="button"><img src="message.png">Message</button>
          <br>
          <a href=""><img src="../images/more.png"></a>

     </div>

</div>


<div class="profile-info">
    
    <div class="info-col">
        <div class="profile-intro">
            <!-- <h3>Intro</h3>
            <p class="intro-text">Believe in your self and you can do unbelievable things <img src="../images/feeling.png"></p>
            <hr> -->
            <ul>
                <li><img src="../images/profile-job.png"><?php echo $profession?></li>
                <li><img src="../images/profile-study.png"><?php echo $college?></li>
                 <li><img src="../images/profile-location.png"><?php echo $email?></li>
                 <li><img src="../images/profile-location.png"><?php echo $address?></li>
                 <li><img src="../images/profile-location.png"><?php echo $gender?></li>
                 <li><img src="../images/profile-location.png"><?php echo $religion?></li>
            </ul>

        </div>


    </div>
     <div class="post-col">



<?php
  $postResult = mysqli_query($db, "SELECT post.post_id, post.post_text, post.post_photo, post.post_date, userinfo.username, userinfo.user_photo
  FROM post
  INNER JOIN userinfo
  ON post.user_id=userinfo.user_id AND userinfo.user_id = '$userId'
  ORDER BY post.post_id DESC;");

  while($postData = mysqli_fetch_assoc($postResult)){
   echo "<div class='post-container'>
   <div class='post-row'>
     <div class='user-profile'>
       <img src='../uploads/{$postData["user_photo"]}'>
       <div>
         <p>{$postData["username"]}</p>
         <span>{$postData["post_date"]}</span>
       </div>
     </div>
   </div>";

   echo "<p class='post-text'> {$postData["post_text"]}</p>";
   if($postData["post_photo"] != ""){
      echo "<img id='show-post-photo' src='../uploads/{$postData["post_photo"]}' class='post-img'>";
   }
  
   echo " <div class='post-row'>
     <div class='activity-icons'>
       <button id='likebtn'>
         <i id='like' class='far fa-thumbs-up' style='font-size:px'></i>
       </button>
       <input id='input1' type='number' value='0' style='color: rgb(88, 99, 248);'>
       <button id='dislikebtn'>
         <i id='dislike' class='far fa-thumbs-down'></i>
       </button>
       <input id='input2' type='number' value='0' style='color: red;'>
       <button id='commentbtn'>
         <i class='far fa-comment'></i>
       </button>
       <input id='commentinput' type='text' hidden>


     </div>


     <div class='post-profile-icon'>
     <img src='../images/profile-pic.png'>
     </div>

   </div>
   
 </div>
";
                   
  }
?>







     </div>

   

</div>
</div>