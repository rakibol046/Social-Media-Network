
<?php

session_start();
    if(isset($_SESSION['userid'])){
        $userid=$_SESSION['userid'];
        
        // if(isset($_POST['submit'])) {
        // $result = mysqli_query($db, "select verify from userinfo where email='$email'");
      
        // $row = mysqli_fetch_assoc($result);
        //   $verify = $row["verify"];
        
        
      
        //    if($_POST['code']==$verify){
        //       if(mysqli_query($db, "update userinfo set verify=1 where email='$email'")){
        //           header("location:home2.php");
        //       }
              
        //   }
        //   else{
        //       $message = "Enter Correct Code";
        //   }
        // }
      }
      else{
          header("location: index.php");
      }



?>




<DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"> 
		<title>Socialbook</title>
		<link rel="stylesheet" href="../style/home2-style.css">

	</head>
	<body>

		<nav>
			<div class="nav-left"> 
				<img src="../images/logo.png" class="logo">
				<ul>
					<li><img src="../images/notification.png"></li>
					<li><img src="../images/inbox.png"></li>
					<li><img src="../images/video.png"></li>
				</ul>
			</div>
			<div class="nav-right">
				<div class="search-box">
					<img src="../images/search.png">
					<input type="text" placeholder="Search">
				</div>

				<div class="nav-user-icon online" onclick="settingsMenuToggle()">
					<img src="../images/profile-pic.png">

					
				</div>

			</div>
            
            <!------------------------ setting-menu---------------------->
            <div class="settings-menu">

                <div id="dark-btn">
                    <span></span>
                </div>
                <div class="setting-menu-inner">
                    <div class="user-profile">
                        <img src="../images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                            <a href="#">See Your Profile</a>
                        </div>
                    </div>
                    <hr>
                    <div class="user-profile">
                        <img src="../images/feedback.png">
                        <div>
                            <p>Give Feedback</p>
                            <a href="#">Help us to improve</a>
                        </div>
                    </div>
                    <hr>
                    <div class="settings-links">
                        <img src="../images/setting.png" class="settings-icon">
                        <a href="#">Settings & Privacy <img src="../images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="../images/help.png" class="settings-icon">
                        <a href="#">Help & Support <img src="../images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="../images/display.png" class="settings-icon">
                        <a href="#">Display & Accessibility <img src="../images/arrow.png" width="10px"></a>
                    </div>
                    <div class="settings-links">
                        <img src="../images/logout.png" class="settings-icon">
                        <a href="logout.php">Logout <img src="../images/arrow.png" width="10px"></a>
                    </div>




                </div>
                


            </div>

		</nav>
        <div class="container">
			<!------------- left-sidebar-------------- -->
			<div class="left-sidebar">
				<div class="imp-links">
					<a href="#"><img src="../images/news.png"> Latest News</a>
					<a href="#"><img src="../images/friends.png"> Friends</a>
					<a href="#"><img src="../images/group.png"> Group</a>
					<a href="#"><img src="../images/marketplace.png"> Marcketplace</a>
					<a href="#"><img src="../images/watch.png"> Watch</a>
					<a href="#">See More</a>

				</div>
				<div class="shortcut-links">
					<p>Your Shortcuts</p>
					<a href="#"><img src="../images/Shortcut-1.png"> Web Developers</a>
					<a href="#"><img src="../images/Shortcut-2.png"> Web Design Course</a>
					<a href="#"><img src="../images/Shortcut-3.png"> Full Stack Development</a>
					<a href="#"><img src="../images/Shortcut-4.png"> Website Experts</a>
					

					
				</div>
				
			</div>
            <!------------- main-content-------------- -->

			<div class="main-content">
                
                <div class="story-gallery">
                    <div class="story story1">
                        <img src="../images/upload.png">
                        <p>Post Story</p>
                    </div>
                    <div class="story story2">
                        <img src="../images/member-1.png">
                        <p>Alison</p>
                    </div>
                    <div class="story story3">
                        <img src="../images/member-2.png">
                        <p>Jackson</p>
                    </div>
                    <div class="story story4">
                        <img src="../images/member-3.png">
                        <p>Samona</p>
                    </div>
                    <div class="story story5">
                        <img src="../images/member-4.png">
                        <p>John Doe</p>
                    </div>
                </div>

                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="../images/profile-pic.png">
                        <div>
                            <p>John Nicholson</p>
                            <small>Public</small>
                        </div>
                    </div>
                </div>

                <div class="post-input-container">
                    <textarea rows="3" placeholder="What's on your mind, John?"></textarea>
                    <div class="add-post-link">
                        <a href="#"><img src="../images/live-video.png"> Live Video</a>
                        <a href="#"><img src="../images/photo.png"> Photo/Video</a>
                        <a href="#"><img src="../images/feeling.png"> Feeling/Activity</a>

                    </div>

                </div>

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
                    
                    <p class="post-text"> Hello Friends.<a href="#">#weather</a> <a href="#">#Mood</a></p>
                    <img src="../images/feed-image-1.png" class="post-img">

                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="../images/like-blue.png"> 289</div>
                            <div><img src="../images/comments.png"> 59</div>
                            <div><img src="../images/share.png"> 20</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="../images/profile-pic.png">

                        </div>

                    </div>

                </div>
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
                    
                    <p class="post-text"> Chilling With Friends.<a href="#">#weather</a> <a href="#">#Mood</a></p>
                    <img src="../images/feed-image-2.png" class="post-img">

                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="../images/like-blue.png"> 456</div>
                            <div><img src="../images/comments.png"> 453</div>
                            <div><img src="../images/share.png"> 79</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="../images/profile-pic.png">

                        </div>

                    </div>

                </div>
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
                    
                    <p class="post-text"> Good Times.<a href="#">#weather</a> <a href="#">#Mood</a></p>
                    <img src="../images/feed-image-3.png" class="post-img">

                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="../images/like-blue.png"> 768</div>
                            <div><img src="../images/comments.png"> 675</div>
                            <div><img src="../images/share.png"> 754</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="../images/profile-pic.png">

                        </div>

                    </div>

                </div>
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
                    
                    <p class="post-text"> HI.<a href="#">#weather</a> <a href="#">#Mood</a></p>
                    <img src="../images/feed-image-4.png" class="post-img">

                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="../images/like-blue.png"> 1k</div>
                            <div><img src="../images/comments.png"> 890</div>
                            <div><img src="../images/share.png"> 490</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="../images/profile-pic.png">

                        </div>

                    </div>

                </div>
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
                    
                    <p class="post-text"> Meeting Time.<a href="#">#weather</a> <a href="#">#Mood</a></p>
                    <img src="../images/feed-image-5.png" class="post-img">

                    <div class="post-row">
                        <div class="activity-icons">
                            <div><img src="../images/like-blue.png"> 5k</div>
                            <div><img src="../images/comments.png"> 3k</div>
                            <div><img src="../images/share.png"> 1k</div>
                        </div>
                        <div class="post-profile-icon">
                            <img src="../images/profile-pic.png">

                        </div>

                    </div>

                </div>
                <button type="button" class="Load-more-btn"> Load More</button>








            </div>
                <!------------- right-sidebar-------------- -->
            <div class="right-sidebar">

                <div class="sidebar-title">
                    <h4>Events</h4>
                    <a href="#">See All</a>

                </div>
                <div class="event">
                    <div class="left-event">
                        <h3>12</h3>
                        <span>Sep</span>
                    </div>
                    <div class="right-event">
                        <h4>Social Work</h4>
                        <p>Farmgate,Dhaka</p>
                        <a href="#">More Info</a>
                    </div>
                </div>
                <div class="event">
                    <div class="left-event">
                        <h3>22</h3>
                        <span>Oct</span>
                    </div>
                    <div class="right-event">
                        <h4>Student Work</h4>
                        <p>Farmgate,Dhaka</p>
                        <a href="#">More Info</a>
                    </div>
                </div>
                <div class="sidebar-title">
                    <h4>Advertisement</h4>
                    <a href="#">Close</a>
                </div>
                <img src="../images/advertisement.png" class="sidebar-ads">

                <div class="sidebar-title">
                    <h4>Conversation</h4>
                    <a href="#">Hide Chat</a>
                </div>

                <div class="online-list">
                    <div class="online">
                        <img src="../images/member-1.png">
                    </div>
                    <p>Alison Mina</p>

                </div>
                <div class="online-list">
                    <div class="online">
                        <img src="../images/member-2.png">
                    </div>
                    <p>jackson Aston</p>

                </div>
                <div class="online-list">
                    <div class="online">
                        <img src="../images/member-3.png">
                    </div>
                    <p>Samona Rose</p>

                </div>






    </div>
</div>

    
  <div class="footer">
      <p>Copyright 2021 - Ahnaf Shanto</p>
  </div>
        <script src="../javascript/home2-scrips.js"></script>
    </body>
    </html>