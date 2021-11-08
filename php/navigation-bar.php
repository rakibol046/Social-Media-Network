
		<nav>
			<div class="nav-left"> 
			<!-- <a href="home2.php"><img src="../images/logo.png" class="logo"> </a> -->
            <a href="home2.php" style="font-size: 32px; color: white; text-decoration: none;"> <b style="color: red;">C</b>ONNECTOR</a>
				
			</div>
			<div class="nav-right">
				<!-- <div class="search-box">
					<img src="../images/search.png">
					<input type="text" placeholder="Search">
				</div> -->
                <a href="profile-page.php" style="font-size: 20px; border-right:2px solid white; border-left:2px solid white;border-radius: 30px; padding:0px 5px 0px 5px; color: white; text-decoration: none;"> <?php echo $userName ?></a>
				<div class="nav-user-icon online" onclick="settingsMenuToggle()">
					<img src="../uploads/<?php echo $userPhoto ?>">

					
				</div>

			</div>
            
            <!------------------------ setting-menu---------------------->
            <div class="settings-menu">

                <!-- <div id="dark-btn">
                    <span></span>
                </div> -->
                <div class="setting-menu-inner">
                    <div class="user-profile">
                        <img src="../uploads/<?php echo $userPhoto ?>">
                        <div>
                            <p><?php echo $userName ?></p>
                            <a href="profile-page.php">See Your Profile</a>
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="user-profile">
                        <img src="../images/feedback.png">
                        <div>
                            <p>Give Feedback</p>
                            <a href="#">Help us to improve</a>
                        </div>
                    </div> -->
                    
                    <div class="settings-links">
                        <img src="../images/setting.png" class="settings-icon">
                        <a href="setting.php">Settings & Privacy <img src="../images/arrow.png" width="10px"></a>
                    </div>
                    <!-- <div class="settings-links">
                        <img src="../images/help.png" class="settings-icon">
                        <a href="#">Help & Support <img src="../images/arrow.png" width="10px"></a>
                    </div> -->
                    <!-- <div class="settings-links">
                        <img src="../images/display.png" class="settings-icon">
                        <a href="#">Display & Accessibility <img src="../images/arrow.png" width="10px"></a>
                    </div> -->
                    <div class="settings-links">
                        <img src="../images/logout.png" class="settings-icon">
                        <a href="logout.php">Logout <img src="../images/arrow.png" width="10px"></a>
                    </div>




                </div>
                


            </div>

		</nav>