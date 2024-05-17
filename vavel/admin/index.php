<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style>
    #content > div.container-fluid > div:nth-child(2) > div:nth-child(n){
        width: 200px; /* Set your preferred width */
            height: 330px; /* Set your preferred height */
            overflow: hidden;
            border-radius: 10px;
            border: 5px solid #ddd;
            background-color: #fff;
            object-fit: cover; /* Maintain aspect ratio and cover the entire box */
            border-radius: 10px; /* Same radius as the container */
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

    
  <div class="row">
                                       
            <div class="col-md-3" style="padding-bottom:20px">
                        <a href="contact_report_query.php">
                            <!--calender-inner-->
                            <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n" style="text-align:center">
                                <h4>Report Query / Contact Vavel</h4>
                                <div class="single-product-image">
                                    <!--student-img-->
                                    
                                        <img src="../img/issue.png" alt="">                                               
    
                                </div>
                            </div>
                        </a>
                    </div>
            
                                    
            <div class="col-md-3" style="padding-bottom:20px">
                        <a href="profile.php">
                            <!--calender-inner-->
                            <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n" style="text-align:center">
                                <h4>My Profile</h4>
                                <div class="single-product-image">
                                    <!--student-img-->
                                    
                                        <img src="../img/my profile.png" alt="">                                              
    
                                </div>
                            </div>
                        </a>
                    </div>
            
                                    
            
            
                                    
            <div class="col-md-3" style="padding-bottom:20px">
                        <a href="update_profile.php">
                            <!--calender-inner-->
                            <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n" style="text-align:center">
                                <h4>Update Profile Image</h4>
                                <div class="single-product-image">
                                    <!--student-img-->
                                    
                                        <img src="../img/image.jpeg" alt="">                                               
    
                                </div>
                            </div>
                        </a>
                    </div>
            
                                    
            <div class="col-md-3" style="padding-bottom:20px">
                        <a href="covid_vacinated.php">
                            <!--calender-inner-->
                            <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n" style="text-align:center">
                                <h4>Add COVID Vaccine Details</h4>
                                <div class="single-product-image">
                                    <!--student-img-->
                                    
                                        <img src="../img/vaccine.jpeg" alt="">                                               
    
                                </div>
                            </div>
                        </a>
                    </div>
                      
                        
        

        

                <!-- <div class="col-md-3" style="padding-bottom:20px">-->
                <!--    <div class="calender-inner" style="text-align:center">-->
                <!--        <div id='calendar'></div>-->
                <!--    </div>-->
                <!--</div>-->
                
                                 

            </div>
  <!-- Content Row -->
  <div class="row">


    
  </div>
  <!-- Content Row -->







  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>