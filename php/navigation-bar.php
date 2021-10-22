
		<nav>
			<div class="nav-left"> 
			<a herf="home2.php"><img src="../images/logo.png" class="logo"> </a>
            <!-- <a herf="#"> SOCIAL BOOK</a> -->
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
                            <p><?php echo $userName ?></p>
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