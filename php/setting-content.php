<div class="row w-100">
        <!-- <div class="col-lg-3 col-sm-12 left-col">
          <h1>Settings</h1>
          <p id="general-btn">
            <i class="fas fa-cog"></i> General </p>
          <p id="security-btn">
            <i class="fas fa-shield-alt"></i>Security </p>
        </div> -->
        <!-- <div class="col-lg-1"></div> -->
        <div class="col-lg-12 col-sm-12 right-col ">
            <div class="general-setting bg-white">
                <div class="form" id="">
                <form action="profile-update.php" method="post" enctype="multipart/form-data" class="p-4">
                <h2 class="text-center">General Setting</h2>
                <hr>
                <div class="profile-change-area">
                    <img src="../uploads/<?php echo $userPhoto?>" alt="" height="200px" width="200px">
                    <br>
                    <input type="file" name="file" value="">
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <div class="form-group pt-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $userName?>">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" disabled required="required" value="<?php echo $email?>">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address?>">
                    </div>
                    <!-- <div class="form-group pt-3">
                        <label for="">Gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                        </div>
                    </div> -->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                    <div class="form-group pt-3">
                        <label for="">Profession</label>
                        <input type="text" class="form-control" name="profession" value="<?php echo $profession?>">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">College</label>
                        <input type="text" class="form-control" name="college" value="<?php echo $college?>">
                    </div>
                    <div class="form-group pt-3">
                        <label for="">Religion</label>
                        <input type="text" class="form-control" name="religion" value="<?php echo $religion?>">
                    </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn mt-2 text-center w-25 float-end bg-primary text-white " id="profileUpdateBtn" name="profileUpdateBtn">Save</button>
                </form>
                <br>
                <br>
            </div>
            </div>



            <div class="security-setting bg-white my-3">

            <form action="#" method="post" class="p-4 security-form">
                <h2 class="text-center">Security</h2>
                <hr>
                     <div class="form-group pt-3 input-field">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" value="">
                    </div>
                     <div class="form-group pt-3 input-field">
                        <label for="">New Password</label>
                        <input type="text" class="form-control" name="newPassword" value="">
                    </div>
                     <div class="form-group pt-3 input-field">
                        <label for="">Confirm new password</label>
                        <input type="text" class="form-control" name="confirmNewPassword" value="">
                    </div>
                <br>
                <br>
                <hr>
                <button type="submit" class="btn mt-2 text-center w-25 float-end bg-primary text-white " id="passwordUpdateBtn" name="passwordUpdateBtn">Save</button>
                <br>
                </form>
                <br>

            </div>
        </div>
      </div>