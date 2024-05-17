<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container">
                  <div class="calender-inner">
                            <h3> Update Profile</h3>
                <div class="row" style="padding-bottom: 20px;">
                    <div class="text-danger">1) Your profile picture once uploaded can’t be updated untill 3 months.</div>
                    <div class="text-danger">2) If your profile picture seems inappropriate will be taken down and you will be informed via registered email.</div>
                    <br><br>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group res-mg-t-15">
                               <div class="row">
                            <img src="https://admission.usindh.edu.pk/admission/dash_assets/img/cp1.jpg" width="150px" height="150px">

                            <img src="https://admission.usindh.edu.pk/admission/dash_assets/img/cp2.jpg" width="150px" height="150px">
                            </div>
  <div class="row">
                            <img src="https://admission.usindh.edu.pk/admission/dash_assets/img/cp3.jpg" width="150px" height="150px">

                            <img src="https://itsc.usindh.edu.pk/eportal/includes/dash_assets/img/correct-photo.jpg" width="150px" height="150px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                      
                             <div class="row">
                                 
                                 </div>
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                <div id="pwd-container1">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Profile Image
                                            <span class="text-danger">*</span>
                                        </label>
                                        <br>
                                        <img src="" alt="Profile" class="" id="profile-image-view" onclick="setImage()" width="150px" height="150px" name="profile-image-view">
                                        <input type="file" name="profile_image" id="profile_image" onchange="changeImage(this,'profile_image','profile-image-view')" accept=".jpg,.png,.jpeg" value="">
                                        <input type="text" name="profile_image1" id="profile_image1" value="" hidden="">
                                        <span class="text-danger">Image must be passport size with white background and image size should be less than 500KB</span>                                                                                                                             
                                    </div>
                                        
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" name="submit" value="Update">
                                </div>

                            </form>
                        </div>



                    </div>



                   
                </div>
            </div>

<?php
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>            