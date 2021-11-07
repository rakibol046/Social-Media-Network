
        <!--profile page---------->

        <div class="profile-container">
    <!-- <img src="../images/cover.png" class="cover-img"> -->

<div class="profile-details">
    <div class="pd-left">
        <div class="pd-row">
            <img src="../uploads/<?php echo $userPhoto ?> " class="pd-image">
            <div>
                <h3><?php echo $userName ?> </h3>
                <p>120 Friends-20 mutual</p>
                <img src="../images/member-1.png">
                 <img src="../images/member-2.png">
                  <img src="../images/member-3.png">
                   <img src="../images/member-4.png">

            </div>

        </div>

    </div>
     <!-- <div class="pd-right">
         
         <button type="button"><img src="../images/add-friends.png">Friend</button>
          <button type="button"><img src="message.png">Message</button>
          <br>
          <a href=""><img src="../images/more.png"></a>

     </div> -->

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
                 <li><img src="../images/email.png" style="width: 20px;margin-left: 4px;"><?php echo $email?></li>
                 <li><img src="../images/profile-location.png"><?php echo $gender?></li>
                 <li><img src="../images/gender.png" style="width: 20px;margin-left: 4px;"><?php echo $address?></li>
                 
                 <li><img src="../images/religion.png" style="width: 20px;margin-left: 4px;"><?php echo $religion?></li>
            </ul>

        </div>
<!-- 
        <div class="profile-intro">
            <div class="title-box">
                <h3>Photos</h3>
           <a href="">All Photos</a>

            </div>
            
          
           <div class="photo-box">
            <div><img src="../images/photo1.png"></div>
            <div><img src="../images/photo2.png"></div>
            <div><img src="../images/photo3.png"></div>
            <div><img src="../images/photo4.png"></div>
            <div><img src="../images/photo5.png"></div>
            <div><img src="../images/photo6.png"></div>
              
           </div>

        </div> -->
        <div class="profile-intro">
            <div class="title-box">
                <h3>Friends</h3>
           <a href="friends.php">All Friends</a>


            </div>
            
          
           <div class="friends-box">
            <div><img src="../images/member-1.png"><p>Nadia</p></div>
            <div><img src="../images/member-2.png"><p>John</p></div>
            <div><img src="../images/member-3.png"><p>Alina</p></div>
            <div><img src="../images/member-4.png"><p>Mota</p></div>

        </div>
        </div>
        
        



    </div>
     <div class="post-col">
         
     <div class="write-post-container">
    <div class="user-profile">
      <img src="../uploads/<?php echo $userPhoto ?>">
      <div>
        <p> <?php echo $userName ?> </p>
        <small>Public</small>
      </div>
    </div>
  </div>
  <div class="post-input-container">
   <form method="post" action="post.php" enctype="multipart/form-data">
   <textarea rows="3" placeholder="What's on your mind, <?php echo $userName ?>?" name="text" id="text" onkeyup="isEmpty()"></textarea>
   <input type="file"  name="file" id="photo" hidden>
   <div class="filearea bg-secondary"  id="imgPreViewArea">
   <button id="clearImgBtn">X</button>
   <img class="filename" id="imgPreView" src="" alt="" style="display: none;" width="200px" height="100px">
   </div>
    <div class="add-post-link">
      <div class="link">
        <a href="#"  onclick="fun()">
            <img src="../images/photo.png"> Photo/Video </a>
        <a href="#">
            <img src="../images/feeling.png"> Feeling/Activity </a>
        <a href="#">
            <img src="../images/live-video.png"> Live Video </a>
      </div>
      <div id="btn">
          <button type="submit" name="postbtn" disabled name="post-btn" id="post-btn" class="btn btn-primary ">Post</button>
      </div>
        
    </div>
    
   </form>
  </div>


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
     <button id='uptade-btn' class='btn btn-primary  mx-3  mt-2'>Update</button>
     <a href='post-delete.php?postid={$postData["post_id"]}' style='text-decoration: none; color:white;'> <button id='delete-btn'  class='btn btn-danger mt-2'>Delete</button></a>
     </div>

   </div>
   
 </div>
";
                   
  }
?>







     </div>

   

</div>
</div>