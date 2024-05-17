<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="col-lg-12 mb-6">

                    <!--Form with header-->
                    <div class="card border-primary rounded-0">

                        <div class="card-header p-0">
                            <div class="bg-primary text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contact Vavel:</h3>
                                <p class="m-0">Report any Query, Problem or issues. We will reply solve and reply within 48 hours.</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <label>Your name</label>
                                <div class="input-group">
                                    <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Name" readonly="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your email</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="E-Mail Address" readonly="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>CNIC</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-primary"></i></div>
                                    <input type="text" class="form-control" id="cnic" name="cnic" value="" placeholder="CNIC" readonly="">
                                </div>
                            </div>

                            <!--Select Gender-->
                            <div class="form-group">
                                <label for="" style="font-size:17px">Select Gender<span class="text-danger">*</span></label>
                                
                                <select name="gender_id" id="gender_id" onchange="getPrograms();" class="js-example-basic-single form-control mb-3 select2-hidden-accessible" required="" data-select2-id="gender_id" tabindex="-1" aria-hidden="true">
                                    <option value="0" data-select2-id="2">Gender</option><option value="80">Male</option>
                                    <option value="80">Female</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 901px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gender_id-container"><span class="select2-selection__rendered" id="select2-gender_id-container" role="textbox" aria-readonly="true" title="Select gender">Select gender</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                <label for="" style="font-size:17px">Select problem<span class="text-danger">*</span></label>
                                <select name="program_id" id="program_id" class="js-example-basic-single form-control mb-3 select2-hidden-accessible" required="" data-select2-id="program_id" tabindex="-1" aria-hidden="true">
                                    <option value="0" data-select2-id="4">select program</option>
                                    <option value="0" data-select2-id="4">Problem Of Selecting Country</option>
                                    <option value="0" data-select2-id="4">Problem in payment</option>
                                    <option value="0" data-select2-id="4">other</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 203px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-program_id-container"><span class="select2-selection__rendered" id="select2-program_id-container" role="textbox" aria-readonly="true" title="select program">select program</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="col-md-3">

                                <label for="exampleInput1" class="bmd-label-floating">Select Your Country</label>
                                <select class="js-example-basic-single form-control select2-hidden-accessible" name="session_year" id="session_year" data-select2-id="session_year" tabindex="-1" aria-hidden="true">
                                    <option value="-1" data-select2-id="6">Select country</option>
                                    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
                                    

                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 203px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-session_year-container"><span class="select2-selection__rendered" id="select2-session_year-container" role="textbox" aria-readonly="true" title="Select country">Select country</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            </div>

                            <div class="form-group">
                                <br>
                                <label>Subject / Title <span class="text-danger">*</span></label>
                                <div class="input-group mb-1 mb-sm-0">
                                    <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                                    <input type="text" class="form-control" name="query_title" id="query_title" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message <span class="text-danger">*</span> (Please provide detailed message or description of your Issue/Query)</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                                    <textarea class="form-control" name="query_message" id="query_message" required=""></textarea>
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label>Upload Image</label>-->
<!--                                <div class="input-group mb-2 mb-sm-0">-->
<!--                                    <div class="input-group-addon bg-light"><i class="fa fa-image text-primary"></i></div>-->
<!--                                    <input type="file" id="query_image" onchange="return fileValidation()" name="query_image" >-->
<!---->
<!--                                </div>-->
<!--                            </div>-->

                            <input type="hidden" name="hdn_deptID" id="hdn_deptID" value="80">
                            <input type="hidden" name="hdn_userId" id="hdn_userId" value="173808">
                            <input type="hidden" name="hdn_deptName" id="hdn_deptName" value=" ">
                            <div class="text-center">
                                <button class="btn btn-primary btn-block rounded-0 py-2" type="submit" onclick="submit_query('173808')" name="submit_query" id="submit_query">Submit</button>

                            </div>
                        </div>
                    </div>


<?php
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>