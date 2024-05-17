<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<style>
    #min-height{
        border: 1px solid #ddd; /* Border color */
        border-radius: 10px; /* Border radius */
        padding: 30px;
        min-height: 681px;
        margin-top: 20px;
        margin: 20px 20px;
        font-family: Arial, Helvetica, sans-serif;
        font-style: italic;
        color: black;
    }
</style>

<div id="min-height" class="container-fluid" style="padding: 30px; min-height: 681px;" data-select2-id="min-height">
        <div class="container">

            <div class="row" style="padding-bottom: 20px;">
                <div class="col-md-10">

                    <div class="calender-inner">
                        <h3>Vaccination Registration</h3>


                        <form action="" method="post" onsubmit="return confirm('Are You Sure? \nyou want to Save your vaccination information...!')" data-select2-id="49">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="top-margin">
                                        <label for="exampleInput1" class="bmd-label-floating">Select Vaccination Center Province / State
                                            <span class="text-danger">*</span></label>
                                        <br>
                                        <select id="PROVINCE_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="getDistrict()" name="PROVINCE_ID" tabindex="-1" aria-hidden="true" data-select2-id="PROVINCE_ID" style="width: 100%;">
                                            <option value="0" data-select2-id="21">--Choose--</option>
                                            <option value="1" 0="">AZAD JAMMU KASHMIR</option><option value="2" 0="">BALOCHISTAN</option><option value="3" 0="">GILGIT BALTISTAN</option><option value="4" 0="">KHYBER PAKHTUNKHWA</option><option value="5" 0="">PUNJAB</option><option value="6" 0="">SINDH</option><option value="7" 0="">EGYPT</option><option value="8" 0="">YEMEN</option><option value="9" 0="">JORDAN</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="20" style="width: 438px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-PROVINCE_ID-container"><span class="select2-selection__rendered" id="select2-PROVINCE_ID-container" role="textbox" aria-readonly="true" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                    </div>
                                </div>
                                <div class="col-md-6" data-select2-id="48">
                                    <div class="top-margin" data-select2-id="47">
                                        <label for="exampleInput1" class="bmd-label-floating">Select Vaccination Center District
                                            <span class="text-danger">*</span></label>
                                        <br>
                                        <select id="DISTRICT_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="getVacinationCenter(this.value)" name="DISTRICT_ID" tabindex="-1" aria-hidden="true" data-select2-id="DISTRICT_ID" style="width: 100%;">
                                            <option value="0" data-select2-id="23">--Choose--</option>
                                            

                                        </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="22" style="width: 438px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-DISTRICT_ID-container"><span class="select2-selection__rendered" id="select2-DISTRICT_ID-container" role="textbox" aria-readonly="true" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-margin">
                                        <label for="exampleInput1" class="bmd-label-floating">Select Vaccination Center

                                            <span class="text-danger">*</span></label>
                                        <br>
                                        <select id="VACCINATION_CENTER_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="showForm()" name="VACCINATION_CENTER_ID" tabindex="-1" aria-hidden="true" data-select2-id="VACCINATION_CENTER_ID" style="width: 100%;">
                                            <option value="0" data-select2-id="25">--Choose--</option>


                                                                                        
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="24" style="width: 438px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-VACCINATION_CENTER_ID-container"><span class="select2-selection__rendered" id="select2-VACCINATION_CENTER_ID-container" role="textbox" aria-readonly="true" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="top-margin">
                                        <label for="exampleInput1" class="bmd-label-floating">Card No
                                            <span class="text-danger"></span></label>
                                        <br>
                                        <input type="text" name="CARD_NO" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div id="subform">
                                <div class="row">
                                    <h4>DOSE ONE</h4>
                                    <div class="col-md-6">
                                        <div class="top-margin">
                                            <label for="exampleInput1" class="bmd-label-floating">Select Vaccination Name

                                                <span class="text-danger">*</span></label>
                                            <br>
                                            <select id="DOSE_1_VACCINATION_NAME" class="js-example-basic-single form-control select2-hidden-accessible" name="DOSE_1_VACCINATION_NAME" tabindex="-1" aria-hidden="true" data-select2-id="DOSE_1_VACCINATION_NAME" style="width: 100%;">
                                                <option value="0" data-select2-id="35">--Choose--</option>

                                                <option>Sinopharm</option><option>Sinovac</option><option>CanSino Bio</option><option>Pfizer-BioNTech</option><option>Sputnik V</option><option>AstraZeneca</option><option>Pak-Vac-CanSino</option><option>Moderna</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="34" style="width: 438px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-DOSE_1_VACCINATION_NAME-container"><span class="select2-selection__rendered" id="select2-DOSE_1_VACCINATION_NAME-container" role="textbox" aria-readonly="true" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="top-margin">
                                            <label for="exampleInput1" class="bmd-label-floating">Vaccination Date
                                                <span class="text-danger">*</span></label>
                                            <br>
                                            <input type="date" name="DOSE_1_VACCINATION_DATE" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="row">
                                    <h4>DOSE TWO</h4>
                                    <div class="col-md-6">
                                        <div class="top-margin">
                                            <label for="exampleInput1" class="bmd-label-floating">Select Vaccination Name

                                                <span class="text-danger"></span></label>
                                            <br>
                                            <select id="DOSE_2_VACCINATION_NAME" class="js-example-basic-single form-control select2-hidden-accessible" name="DOSE_2_VACCINATION_NAME" tabindex="-1" aria-hidden="true" data-select2-id="DOSE_2_VACCINATION_NAME" style="width: 100%;">
                                                <option value="0" data-select2-id="45">--Choose--</option>
                                                <option>Sinopharm</option><option>Sinovac</option><option>CanSino Bio</option><option>Pfizer-BioNTech</option><option>Sputnik V</option><option>AstraZeneca</option><option>Pak-Vac-CanSino</option><option>Moderna</option>

                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="44" style="width: 438px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-DOSE_2_VACCINATION_NAME-container"><span class="select2-selection__rendered" id="select2-DOSE_2_VACCINATION_NAME-container" role="textbox" aria-readonly="true" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="top-margin">
                                            <label for="exampleInput1" class="bmd-label-floating">Vaccination Date
                                                <span class="text-danger"></span></label>
                                            <br>
                                            <input type="date" value="" name="DOSE_2_VACCINATION_DATE" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success btn-lg">Save</button>
                                    </div>
                                </div>

                            </div>






                        </form>
                    </div>



                </div>





            </div>
        </div>
    </div>
<?php
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>                