<div class="main-content">
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
  ON post.user_id=userinfo.user_id
  ORDER BY RAND()");

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




  <div class="post-container">
    <div class="post-row">
      <div class="user-profile">
        <img src="../images/profile-pic.png">
        <div>
          <p>John Nicholson</p>
          <span>Sep 24 2021, 07,40 pm</span>
        </div>
      </div>
    </div>
    <p class="post-text"> Hello Friends.</p>
    <img src="../images/feed-image-1.png" class="post-img">
    <div class="post-row">
      <div class="activity-icons">
        <button id="likebtn">
          <i id="like" class='far fa-thumbs-up' style='font-size:px'></i>
        </button>
        <input id="input1" type="number" value="0" style="color: rgb(88, 99, 248);">
        <button id="dislikebtn">
          <i id="dislike" class="far fa-thumbs-down"></i>
        </button>
        <input id="input2" type="number" value="0" style="color: red;">
        <button id="commentbtn">
          <i class="far fa-comment"></i>
        </button>
        <input id="commentinput" type="text" hidden>


      </div>


      <div class="post-profile-icon">
      <img src="../images/profile-pic.png">
      </div>

    </div>
    
  </div>




  
</div>