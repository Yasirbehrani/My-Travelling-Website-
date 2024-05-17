<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div id="min-height" class="container-fluid" style="padding: 30px; min-height: 531px;">

        
            <div class="card">

                <div class="admintab-wrap edu-tab1 mg-t-30">
                    <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">

                                                    <li class="active">
                                <a data-toggle="tab" href="#profile" id="profile_view" aria-expanded="true">
                               
                                    <span class="fa fa-user-o"></span>  Personal Information                                
                                </a>
                            
                        

                    </ul>
                    <div class="tab-content">
                        
                            <div id="profile" class="tab-pane animated custon-tab-style1 active">
                                <form onsubmit="event.preventDefault();" id="form_profile" method="post" enctype="multipart/form-data" action="">
                                    <div class="card-body">
        <div class="card-header text-center">
            <h3>Personal Information</h3>
        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating">Prefix
                    <span class="text-danger">*</span></label>
                      <select class=" form-control mb-3" name="PREFIX_ID" id="PREFIX_ID">
                    <option value="0">--Choose Title--</option><option value="2" selected="">MR.</option><option value="3">MS.</option><option value="4">MRS.</option><option value="1">DR.</option><option value="5">PROF.</option><option value="6">PROF. DR.</option><option value="7">ENGR.</option>                   
                </select>
                    </div>
                    </div>
                    
            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating">Full Name
                    <span class="text-danger">*</span></label>
                    <input  type="text" id="FIRST_NAME" class="form-control" name="FIRST_NAME" value="">
                    <input type="text" id="USER_ID" class="" name="USER_ID" value="173808" hidden="">

                </div>
            </div>
            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating">Surname
                        <span class="text-danger">*</span></label>
                        <input  type="text" id="LAST_NAME" class="form-control" name="LAST_NAME" value="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating"> Email
                        <span class="text-danger">*</span></label>
                    <input type="text" id="EMAIL" class="form-control" name="EMAIL" value="">

                </div>
            </div>
           


        </div>
        <div class="row">
                            <div class="col-md-3">
                    <div class="top-margin">
                        <label for="exampleInput1" class="bmd-label-floating">CNIC / Form-B
                            <span class="text-danger">*</span></label>
                        <input  type="text" id="CNIC_NO" class="form-control" name="CNIC_NO" value="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="top-margin">
                        <label for="exampleInput1" class="bmd-label-floating">CNIC Expiry
                            <span class="text-danger"></span></label>
                        <div class="form-group data-custon-pick" id="data_2">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input  data-toggle="tooltip" title="" type="text" id="CNIC_EXPIRY" name="CNIC_EXPIRY" class="form-control" value="" data-original-title="CNIC Expiry Date">
                            </div>
                        </div>
                    </div>
                </div>

                            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating">Father's Name
                        <span class="text-danger"></span></label>
                    <input  type="text" id="FNAME" class="form-control" name="FNAME" value="">
                </div>
            </div>
            



        </div>
        <div class="row">
             <div class="col-md-3">
                <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Date Of Birth
                    <span class="text-danger">* &nbsp;<small>dd/mm/yyyy</small></span></label>
                <div class="form-group data-custon-pick" id="data_2">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input  type="text" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" class="form-control" value="">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating"> Mobile Code
                        <span class="text-danger">*</span></label>
                <select class="js-example-basic-single form-control mb-3 select2-hidden-accessible" name="MOBILE_CODE" id="MOBILE_CODE" tabindex="-1" aria-hidden="true" data-select2-id="MOBILE_CODE">
                    <option value="0093">AFGHANISTAN &nbsp;&nbsp; 0093</option><option value="00355">ALBANIA &nbsp;&nbsp; 00355</option><option value="00213">ALGERIA &nbsp;&nbsp; 00213</option><option value="00376">ANDORRA &nbsp;&nbsp; 00376</option><option value="00244">ANGOLA &nbsp;&nbsp; 00244</option><option value="00672">ANTARCTICA &nbsp;&nbsp; 00672</option><option value="0054">ARGENTINA &nbsp;&nbsp; 0054</option><option value="00374">ARMENIA &nbsp;&nbsp; 00374</option><option value="00297">ARUBA &nbsp;&nbsp; 00297</option><option value="0061">AUSTRALIA &nbsp;&nbsp; 0061</option><option value="0043">AUSTRIA &nbsp;&nbsp; 0043</option><option value="00994">AZERBAIJAN &nbsp;&nbsp; 00994</option><option value="00973"> &nbsp;&nbsp; 00973</option><option value="00880">BANGLADESH &nbsp;&nbsp; 00880</option><option value="00375">BELARUS &nbsp;&nbsp; 00375</option><option value="0032">BELGIUM &nbsp;&nbsp; 0032</option><option value="00501">BELIZE &nbsp;&nbsp; 00501</option><option value="00229">BENIN &nbsp;&nbsp; 00229</option><option value="00975">BHUTAN &nbsp;&nbsp; 00975</option><option value="00591">BOLIVIA &nbsp;&nbsp; 00591</option><option value="00387">BOSNIA AND HERZEGOVINA &nbsp;&nbsp; 00387</option><option value="00267">BOTSWANA &nbsp;&nbsp; 00267</option><option value="0055">BRAZIL &nbsp;&nbsp; 0055</option><option value="00246">BRITISH INDIAN OCEAN TERRITORY &nbsp;&nbsp; 00246</option><option value="00673">BRUNEI &nbsp;&nbsp; 00673</option><option value="00359">BULGARIA &nbsp;&nbsp; 00359</option><option value="00226">BURKINA FASO &nbsp;&nbsp; 00226</option><option value="00257">BURUNDI &nbsp;&nbsp; 00257</option><option value="00855">CAMBODIA &nbsp;&nbsp; 00855</option><option value="00237">CAMEROON &nbsp;&nbsp; 00237</option><option value="001">CANADA &nbsp;&nbsp; 001</option><option value="00238">CAPE VERDE &nbsp;&nbsp; 00238</option><option value="00236">CENTRAL AFRICAN REPUBLIC &nbsp;&nbsp; 00236</option><option value="00235">CHAD &nbsp;&nbsp; 00235</option><option value="0056">CHILE &nbsp;&nbsp; 0056</option><option value="0086">CHINA &nbsp;&nbsp; 0086</option><option value="0061">CHRISTMAS ISLAND &nbsp;&nbsp; 0061</option><option value="0061">COCOS ISLANDS &nbsp;&nbsp; 0061</option><option value="0057">COLOMBIA &nbsp;&nbsp; 0057</option><option value="00269">COMOROS &nbsp;&nbsp; 00269</option><option value="00682">COOK ISLANDS &nbsp;&nbsp; 00682</option><option value="00506">COSTA RICA &nbsp;&nbsp; 00506</option><option value="00385">CROATIA &nbsp;&nbsp; 00385</option><option value="0053">CUBA &nbsp;&nbsp; 0053</option><option value="00599">CURACAO &nbsp;&nbsp; 00599</option><option value="00357">CYPRUS &nbsp;&nbsp; 00357</option><option value="00420">CZECH REPUBLIC &nbsp;&nbsp; 00420</option><option value="00243">DEMOCRATIC REPUBLIC OF THE CONGO &nbsp;&nbsp; 00243</option><option value="0045">DENMARK &nbsp;&nbsp; 0045</option><option value="00253">DJIBOUTI &nbsp;&nbsp; 00253</option><option value="00670">EAST TIMOR &nbsp;&nbsp; 00670</option><option value="00593">ECUADOR &nbsp;&nbsp; 00593</option><option value="0020">EGYPT &nbsp;&nbsp; 0020</option><option value="00503">EL SALVADOR &nbsp;&nbsp; 00503</option><option value="00240">EQUATORIAL GUINEA &nbsp;&nbsp; 00240</option><option value="00291">ERITREA &nbsp;&nbsp; 00291</option><option value="00372">ESTONIA &nbsp;&nbsp; 00372</option><option value="00251">ETHIOPIA &nbsp;&nbsp; 00251</option><option value="00500">FALKLAND ISLANDS &nbsp;&nbsp; 00500</option><option value="00298">FAROE ISLANDS &nbsp;&nbsp; 00298</option><option value="00679">FIJI &nbsp;&nbsp; 00679</option><option value="00358">FINLAND &nbsp;&nbsp; 00358</option><option value="0033">FRANCE &nbsp;&nbsp; 0033</option><option value="00689">FRENCH POLYNESIA &nbsp;&nbsp; 00689</option><option value="00241">GABON &nbsp;&nbsp; 00241</option><option value="00220">GAMBIA &nbsp;&nbsp; 00220</option><option value="00995">GEORGIA &nbsp;&nbsp; 00995</option><option value="0049">GERMANY &nbsp;&nbsp; 0049</option><option value="00233">GHANA &nbsp;&nbsp; 00233</option><option value="00350">GIBRALTAR &nbsp;&nbsp; 00350</option><option value="0030">GREECE &nbsp;&nbsp; 0030</option><option value="00299">GREENLAND &nbsp;&nbsp; 00299</option><option value="00502">GUATEMALA &nbsp;&nbsp; 00502</option><option value="00224">GUINEA &nbsp;&nbsp; 00224</option><option value="00245">GUINEA-BISSAU &nbsp;&nbsp; 00245</option><option value="00592">GUYANA &nbsp;&nbsp; 00592</option><option value="00509">HAITI &nbsp;&nbsp; 00509</option><option value="00504">HONDURAS &nbsp;&nbsp; 00504</option><option value="00852">HONG KONG &nbsp;&nbsp; 00852</option><option value="0036">HUNGARY &nbsp;&nbsp; 0036</option><option value="00354">ICELAND &nbsp;&nbsp; 00354</option><option value="0091">INDIA &nbsp;&nbsp; 0091</option><option value="0062">INDONESIA &nbsp;&nbsp; 0062</option><option value="0098">IRAN &nbsp;&nbsp; 0098</option><option value="00964">IRAQ &nbsp;&nbsp; 00964</option><option value="00353">IRELAND &nbsp;&nbsp; 00353</option><option value="00972">ISRAEL &nbsp;&nbsp; 00972</option><option value="0039">ITALY &nbsp;&nbsp; 0039</option><option value="00225">IVORY COAST &nbsp;&nbsp; 00225</option><option value="0081">JAPAN &nbsp;&nbsp; 0081</option><option value="00962">JORDAN &nbsp;&nbsp; 00962</option><option value="007">KAZAKHSTAN &nbsp;&nbsp; 007</option><option value="00254">KENYA &nbsp;&nbsp; 00254</option><option value="00686">KIRIBATI &nbsp;&nbsp; 00686</option><option value="00383">KOSOVO &nbsp;&nbsp; 00383</option><option value="00965">KUWAIT &nbsp;&nbsp; 00965</option><option value="00996">KYRGYZSTAN &nbsp;&nbsp; 00996</option><option value="00856">LAOS &nbsp;&nbsp; 00856</option><option value="00371">LATVIA &nbsp;&nbsp; 00371</option><option value="00961">LEBANON &nbsp;&nbsp; 00961</option><option value="00266">LESOTHO &nbsp;&nbsp; 00266</option><option value="00231">LIBERIA &nbsp;&nbsp; 00231</option><option value="00218">LIBYA &nbsp;&nbsp; 00218</option><option value="00423">LIECHTENSTEIN &nbsp;&nbsp; 00423</option><option value="00370">LITHUANIA &nbsp;&nbsp; 00370</option><option value="00352">LUXEMBOURG &nbsp;&nbsp; 00352</option><option value="00853">MACAU &nbsp;&nbsp; 00853</option><option value="00389">MACEDONIA &nbsp;&nbsp; 00389</option><option value="00261">MADAGASCAR &nbsp;&nbsp; 00261</option><option value="00265">MALAWI &nbsp;&nbsp; 00265</option><option value="0060">MALAYSIA &nbsp;&nbsp; 0060</option><option value="00960">MALDIVES &nbsp;&nbsp; 00960</option><option value="00223">MALI &nbsp;&nbsp; 00223</option><option value="00356">MALTA &nbsp;&nbsp; 00356</option><option value="00692">MARSHALL ISLANDS &nbsp;&nbsp; 00692</option><option value="00222">MAURITANIA &nbsp;&nbsp; 00222</option><option value="00230">MAURITIUS &nbsp;&nbsp; 00230</option><option value="00262">MAYOTTE &nbsp;&nbsp; 00262</option><option value="0052">MEXICO &nbsp;&nbsp; 0052</option><option value="00691">MICRONESIA &nbsp;&nbsp; 00691</option><option value="00373">MOLDOVA &nbsp;&nbsp; 00373</option><option value="00377">MONACO &nbsp;&nbsp; 00377</option><option value="00976">MONGOLIA &nbsp;&nbsp; 00976</option><option value="00382">MONTENEGRO &nbsp;&nbsp; 00382</option><option value="00212">MOROCCO &nbsp;&nbsp; 00212</option><option value="00258">MOZAMBIQUE &nbsp;&nbsp; 00258</option><option value="0095">MYANMAR &nbsp;&nbsp; 0095</option><option value="00264">NAMIBIA &nbsp;&nbsp; 00264</option><option value="00674">NAURU &nbsp;&nbsp; 00674</option><option value="00977">NEPAL &nbsp;&nbsp; 00977</option><option value="0031">NETHERLANDS &nbsp;&nbsp; 0031</option><option value="00599">NETHERLANDS ANTILLES &nbsp;&nbsp; 00599</option><option value="00687">NEW CALEDONIA &nbsp;&nbsp; 00687</option><option value="0064">NEW ZEALAND &nbsp;&nbsp; 0064</option><option value="00505">NICARAGUA &nbsp;&nbsp; 00505</option><option value="00227">NIGER &nbsp;&nbsp; 00227</option><option value="00234">NIGERIA &nbsp;&nbsp; 00234</option><option value="00683">NIUE &nbsp;&nbsp; 00683</option><option value="00850">NORTH KOREA &nbsp;&nbsp; 00850</option><option value="0047">NORWAY &nbsp;&nbsp; 0047</option><option value="00968">OMAN &nbsp;&nbsp; 00968</option><option value="0092" selected="" data-select2-id="228">PAKISTAN &nbsp;&nbsp; 0092</option><option value="00680">PALAU &nbsp;&nbsp; 00680</option><option value="00970">PALESTINE &nbsp;&nbsp; 00970</option><option value="00507">PANAMA &nbsp;&nbsp; 00507</option><option value="00675">PAPUA NEW GUINEA &nbsp;&nbsp; 00675</option><option value="00595">PARAGUAY &nbsp;&nbsp; 00595</option><option value="0051">PERU &nbsp;&nbsp; 0051</option><option value="0063">PHILIPPINES &nbsp;&nbsp; 0063</option><option value="0064">PITCAIRN &nbsp;&nbsp; 0064</option><option value="0048">POLAND &nbsp;&nbsp; 0048</option><option value="00351">PORTUGAL &nbsp;&nbsp; 00351</option><option value="00974">QATAR &nbsp;&nbsp; 00974</option><option value="00242">REPUBLIC OF THE CONGO &nbsp;&nbsp; 00242</option><option value="00262">REUNION &nbsp;&nbsp; 00262</option><option value="0040">ROMANIA &nbsp;&nbsp; 0040</option><option value="007">RUSSIA &nbsp;&nbsp; 007</option><option value="00250">RWANDA &nbsp;&nbsp; 00250</option><option value="00590">SAINT BARTHELEMY &nbsp;&nbsp; 00590</option><option value="00290">SAINT HELENA &nbsp;&nbsp; 00290</option><option value="00590">SAINT MARTIN &nbsp;&nbsp; 00590</option><option value="00508">SAINT PIERRE AND MIQUELON &nbsp;&nbsp; 00508</option><option value="00685">SAMOA &nbsp;&nbsp; 00685</option><option value="00378">SAN MARINO &nbsp;&nbsp; 00378</option><option value="00239">SAO TOME AND PRINCIPE &nbsp;&nbsp; 00239</option><option value="00966">SAUDI ARABIA &nbsp;&nbsp; 00966</option><option value="00221">SENEGAL &nbsp;&nbsp; 00221</option><option value="00381">SERBIA &nbsp;&nbsp; 00381</option><option value="00248">SEYCHELLES &nbsp;&nbsp; 00248</option><option value="00232">SIERRA LEONE &nbsp;&nbsp; 00232</option><option value="0065">SINGAPORE &nbsp;&nbsp; 0065</option><option value="00421">SLOVAKIA &nbsp;&nbsp; 00421</option><option value="00386">SLOVENIA &nbsp;&nbsp; 00386</option><option value="00677">SOLOMON ISLANDS &nbsp;&nbsp; 00677</option><option value="00252">SOMALIA &nbsp;&nbsp; 00252</option><option value="0027">SOUTH AFRICA &nbsp;&nbsp; 0027</option><option value="0082">SOUTH KOREA &nbsp;&nbsp; 0082</option><option value="00211">SOUTH SUDAN &nbsp;&nbsp; 00211</option><option value="0034">SPAIN &nbsp;&nbsp; 0034</option><option value="0094">SRI LANKA &nbsp;&nbsp; 0094</option><option value="00249">SUDAN &nbsp;&nbsp; 00249</option><option value="00597">SURINAME &nbsp;&nbsp; 00597</option><option value="0047">SVALBARD AND JAN MAYEN &nbsp;&nbsp; 0047</option><option value="00268">SWAZILAND &nbsp;&nbsp; 00268</option><option value="0046">SWEDEN &nbsp;&nbsp; 0046</option><option value="0041">SWITZERLAND &nbsp;&nbsp; 0041</option><option value="00963">SYRIA &nbsp;&nbsp; 00963</option><option value="00886">TAIWAN &nbsp;&nbsp; 00886</option><option value="00992">TAJIKISTAN &nbsp;&nbsp; 00992</option><option value="00255">TANZANIA &nbsp;&nbsp; 00255</option><option value="0066">THAILAND &nbsp;&nbsp; 0066</option><option value="00228">TOGO &nbsp;&nbsp; 00228</option><option value="00690">TOKELAU &nbsp;&nbsp; 00690</option><option value="00676">TONGA &nbsp;&nbsp; 00676</option><option value="00216">TUNISIA &nbsp;&nbsp; 00216</option><option value="0090">TURKEY &nbsp;&nbsp; 0090</option><option value="00993">TURKMENISTAN &nbsp;&nbsp; 00993</option><option value="00688">TUVALU &nbsp;&nbsp; 00688</option><option value="00256">UGANDA &nbsp;&nbsp; 00256</option><option value="00380">UKRAINE &nbsp;&nbsp; 00380</option><option value="00971">UNITED ARAB EMIRATES &nbsp;&nbsp; 00971</option><option value="0044">UNITED KINGDOM &nbsp;&nbsp; 0044</option><option value="001">UNITED STATES &nbsp;&nbsp; 001</option><option value="00598">URUGUAY &nbsp;&nbsp; 00598</option><option value="00998">UZBEKISTAN &nbsp;&nbsp; 00998</option><option value="00678">VANUATU &nbsp;&nbsp; 00678</option><option value="00379">VATICAN &nbsp;&nbsp; 00379</option><option value="0058">VENEZUELA &nbsp;&nbsp; 0058</option><option value="0084">VIETNAM &nbsp;&nbsp; 0084</option><option value="00681">WALLIS AND FUTUNA &nbsp;&nbsp; 00681</option><option value="00212">WESTERN SAHARA &nbsp;&nbsp; 00212</option><option value="00967">YEMEN &nbsp;&nbsp; 00967</option><option value="00260">ZAMBIA &nbsp;&nbsp; 00260</option><option value="00263">ZIMBABWE &nbsp;&nbsp; 00263</option>                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="227" style="width: 230px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-MOBILE_CODE-container"><span class="select2-selection__rendered" id="select2-MOBILE_CODE-container" role="textbox" aria-rue" title="PAKISTAN &nbsp;&nbsp; 0092">PAKISTAN &nbsp;&nbsp; 0092</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                </div>
            </div>
            <div class="col-md-3">
                <div class="top-margin">

                    <label for="exampleInput1" class="bmd-label-floating"> Mobile No
                        <span class="text-danger">*</span></label>
                    <input type="text" id="MOBILE_NO" class="form-control" name="MOBILE_NO" value="">

                </div>
            </div>
            <div class="col-md-3">
                <div class="top-margin">
                    <label for="exampleInput1" class="bmd-label-floating">Place of Birth
                        <span class="text-danger"></span></label>
                    <input  type="text" id="PLACE_OF_BIRTH" class="form-control" name="PLACE_OF_BIRTH" value="">
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Country
                    <span class="text-danger"></span></label>
                <br>

                <select disabled="" id="COUNTRY_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="getProvinces(this.value)" name="COUNTRY_ID" tabindex="-1" aria-hidden="true" data-select2-id="COUNTRY_ID">
                    <option value="0">--Choose--</option>
                    <option value="1">AFGHANISTAN</option><option value="2">ALBANIA</option><option value="3">ALGERIA</option><option value="4">AMERICAN SAMOA</option><option value="5">ANDORRA</option><option value="6">ANGOLA</option><option value="7">ANGUILLA</option><option value="8">ANTARCTICA</option><option value="9">ANTIGUA AND BARBUDA</option><option value="10">ARGENTINA</option><option value="11">ARMENIA</option><option value="12">ARUBA</option><option value="13">AUSTRALIA</option><option value="14">AUSTRIA</option><option value="15">AZERBAIJAN</option><option value="16">BAHAMAS</option><option value="17">BAHRAIN</option><option value="18">BANGLADESH</option><option value="19">BARBADOS</option><option value="20">BELARUS</option><option value="21">BELGIUM</option><option value="22">BELIZE</option><option value="23">BENIN</option><option value="24">BERMUDA</option><option value="25">BHUTAN</option><option value="26">BOLIVIA</option><option value="27">BOSNIA AND HERZEGOVINA</option><option value="28">BOTSWANA</option><option value="29">BRAZIL</option><option value="30">BRITISH INDIAN OCEAN TERRITORY</option><option value="31">BRITISH VIRGIN ISLANDS</option><option value="32">BRUNEI</option><option value="33">BULGARIA</option><option value="34">BURKINA FASO</option><option value="35">BURUNDI</option><option value="36">CAMBODIA</option><option value="37">CAMEROON</option><option value="38">CANADA</option><option value="39">CAPE VERDE</option><option value="40">CAYMAN ISLANDS</option><option value="41">CENTRAL AFRICAN REPUBLIC</option><option value="42">CHAD</option><option value="43">CHILE</option><option value="44">CHINA</option><option value="45">CHRISTMAS ISLAND</option><option value="46">COCOS ISLANDS</option><option value="47">COLOMBIA</option><option value="48">COMOROS</option><option value="49">COOK ISLANDS</option><option value="50">COSTA RICA</option><option value="51">CROATIA</option><option value="52">CUBA</option><option value="53">CURACAO</option><option value="54">CYPRUS</option><option value="55">CZECH REPUBLIC</option><option value="56">DEMOCRATIC REPUBLIC OF THE CONGO</option><option value="57">DENMARK</option><option value="58">DJIBOUTI</option><option value="59">DOMINICA</option><option value="60">DOMINICAN REPUBLIC</option><option value="61">EAST TIMOR</option><option value="62">ECUADOR</option><option value="63">EGYPT</option><option value="64">EL SALVADOR</option><option value="65">EQUATORIAL GUINEA</option><option value="66">ERITREA</option><option value="67">ESTONIA</option><option value="68">ETHIOPIA</option><option value="69">FALKLAND ISLANDS</option><option value="70">FAROE ISLANDS</option><option value="71">FIJI</option><option value="72">FINLAND</option><option value="73">FRANCE</option><option value="74">FRENCH POLYNESIA</option><option value="75">GABON</option><option value="76">GAMBIA</option><option value="77">GEORGIA</option><option value="78">GERMANY</option><option value="79">GHANA</option><option value="80">GIBRALTAR</option><option value="81">GREECE</option><option value="82">GREENLAND</option><option value="83">GRENADA</option><option value="84">GUAM</option><option value="85">GUATEMALA</option><option value="86">GUERNSEY</option><option value="87">GUINEA</option><option value="88">GUINEA-BISSAU</option><option value="89">GUYANA</option><option value="90">HAITI</option><option value="91">HONDURAS</option><option value="92">HONG KONG</option><option value="93">HUNGARY</option><option value="94">ICELAND</option><option value="95">INDIA</option><option value="96">INDONESIA</option><option value="97">IRAN</option><option value="98">IRAQ</option><option value="99">IRELAND</option><option value="100">ISLE OF MAN</option><option value="101">ISRAEL</option><option value="102">ITALY</option><option value="103">IVORY COAST</option><option value="104">JAMAICA</option><option value="105">JAPAN</option><option value="106">JERSEY</option><option value="107">JORDAN</option><option value="108">KAZAKHSTAN</option><option value="109">KENYA</option><option value="110">KIRIBATI</option><option value="111">KOSOVO</option><option value="112">KUWAIT</option><option value="113">KYRGYZSTAN</option><option value="114">LAOS</option><option value="115">LATVIA</option><option value="116">LEBANON</option><option value="117">LESOTHO</option><option value="118">LIBERIA</option><option value="119">LIBYA</option><option value="120">LIECHTENSTEIN</option><option value="121">LITHUANIA</option><option value="122">LUXEMBOURG</option><option value="123">MACAU</option><option value="124">MACEDONIA</option><option value="125">MADAGASCAR</option><option value="126">MALAWI</option><option value="127">MALAYSIA</option><option value="128">MALDIVES</option><option value="129">MALI</option><option value="130">MALTA</option><option value="131">MARSHALL ISLANDS</option><option value="132">MAURITANIA</option><option value="133">MAURITIUS</option><option value="134">MAYOTTE</option><option value="135">MEXICO</option><option value="136">MICRONESIA</option><option value="137">MOLDOVA</option><option value="138">MONACO</option><option value="139">MONGOLIA</option><option value="140">MONTENEGRO</option><option value="141">MONTSERRAT</option><option value="142">MOROCCO</option><option value="143">MOZAMBIQUE</option><option value="144">MYANMAR</option><option value="145">NAMIBIA</option><option value="146">NAURU</option><option value="147">NEPAL</option><option value="148">NETHERLANDS</option><option value="149">NETHERLANDS ANTILLES</option><option value="150">NEW CALEDONIA</option><option value="151">NEW ZEALAND</option><option value="152">NICARAGUA</option><option value="153">NIGER</option><option value="154">NIGERIA</option><option value="155">NIUE</option><option value="156">NORTH KOREA</option><option value="157">NORTHERN MARIANA ISLANDS</option><option value="158">NORWAY</option><option value="159">OMAN</option><option value="160" selected="" data-select2-id="470">PAKISTAN</option><option value="161">PALAU</option><option value="162">PALESTINE</option><option value="163">PANAMA</option><option value="164">PAPUA NEW GUINEA</option><option value="165">PARAGUAY</option><option value="166">PERU</option><option value="167">PHILIPPINES</option><option value="168">PITCAIRN</option><option value="169">POLAND</option><option value="170">PORTUGAL</option><option value="171">PUERTO RICO</option><option value="172">QATAR</option><option value="173">REPUBLIC OF THE CONGO</option><option value="174">REUNION</option><option value="175">ROMANIA</option><option value="176">RUSSIA</option><option value="177">RWANDA</option><option value="178">SAINT BARTHELEMY</option><option value="179">SAINT HELENA</option><option value="180">SAINT KITTS AND NEVIS</option><option value="181">SAINT LUCIA</option><option value="182">SAINT MARTIN</option><option value="183">SAINT PIERRE AND MIQUELON</option><option value="184">SAINT VINCENT AND THE GRENADINES</option><option value="185">SAMOA</option><option value="186">SAN MARINO</option><option value="187">SAO TOME AND PRINCIPE</option><option value="188">SAUDI ARABIA</option><option value="189">SENEGAL</option><option value="190">SERBIA</option><option value="191">SEYCHELLES</option><option value="192">SIERRA LEONE</option><option value="193">SINGAPORE</option><option value="194">SINT MAARTEN</option><option value="195">SLOVAKIA</option><option value="196">SLOVENIA</option><option value="197">SOLOMON ISLANDS</option><option value="198">SOMALIA</option><option value="199">SOUTH AFRICA</option><option value="200">SOUTH KOREA</option><option value="201">SOUTH SUDAN</option><option value="202">SPAIN</option><option value="203">SRI LANKA</option><option value="204">SUDAN</option><option value="205">SURINAME</option><option value="206">SVALBARD AND JAN MAYEN</option><option value="207">SWAZILAND</option><option value="208">SWEDEN</option><option value="209">SWITZERLAND</option><option value="210">SYRIA</option><option value="211">TAIWAN</option><option value="212">TAJIKISTAN</option><option value="213">TANZANIA</option><option value="214">THAILAND</option><option value="215">TOGO</option><option value="216">TOKELAU</option><option value="217">TONGA</option><option value="218">TRINIDAD AND TOBAGO</option><option value="219">TUNISIA</option><option value="220">TURKEY</option><option value="221">TURKMENISTAN</option><option value="222">TURKS AND CAICOS ISLANDS</option><option value="223">TUVALU</option><option value="224">U.S. VIRGIN ISLANDS</option><option value="225">UGANDA</option><option value="226">UKRAINE</option><option value="227">UNITED ARAB EMIRATES</option><option value="228">UNITED KINGDOM</option><option value="229">UNITED STATES</option><option value="230">URUGUAY</option><option value="231">UZBEKISTAN</option><option value="232">VANUATU</option><option value="233">VATICAN</option><option value="234">VENEZUELA</option><option value="235">VIETNAM</option><option value="236">WALLIS AND FUTUNA</option><option value="237">WESTERN SAHARA</option><option value="238">YEMEN</option><option value="239">ZAMBIA</option><option value="240">ZIMBABWE</option>
                </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="469" style="width: 230px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-COUNTRY_ID-container"><span class="select2-selection__rendered" id="select2-COUNTRY_ID-container" role="textbox" aria-rue" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

            </div>
        </div>
        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Province / State
                    <span class="text-danger"></span></label>
                <br>
                <select  id="PROVINCE_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="getDistrict(this.value)" name="PROVINCE_ID" tabindex="-1" aria-hidden="true" data-select2-id="PROVINCE_ID"><option value="0" data-select2-id="478">--Choose--</option><option value="1">AZAD JAMMU KASHMIR</option><option value="2">BALOCHISTAN</option><option value="3">GILGIT BALTISTAN</option><option value="4">KHYBER PAKHTUNKHWA</option><option value="5">PUNJAB</option><option value="6">SINDH</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="477" style="width: 230px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-PROVINCE_ID-container"><span class="select2-selection__rendered" id="select2-PROVINCE_ID-container" role="textbox" aria-rue" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

            </div>
        </div>
        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">District
                    <span class="text-danger"></span></label>
                <br>
                <select  id="DISTRICT_ID" class="js-example-basic-single form-control select2-hidden-accessible" onchange="getCity(this.value)" name="DISTRICT_ID" tabindex="-1" aria-hidden="true" data-select2-id="DISTRICT_ID"><option value="0" data-select2-id="504">--Choose--</option><option value="127">BADIN</option><option value="130">DADU</option><option value="153">GHOTKI</option><option value="131">HYDERABAD</option><option value="142">JACOBABAD</option><option value="132">JAMSHORO</option><option value="136">KARACHI</option><option value="143">KASHMORE</option><option value="154">KHAIRPUR</option><option value="144">LARKANA</option><option value="133">MATIARI</option><option value="147">MIRPUR KHAS</option><option value="151" data-select2-id="512">NAUSHAHRO FEROZE</option><option value="145">QAMBAR SHAHDADKOT</option><option value="148">SANGHAR</option><option value="152">SHAHEED BENAZIR ABAD</option><option value="146">SHIKARPUR</option><option value="128">SUJAWAL</option><option value="155">SUKKUR</option><option value="134">TANDO ALLAHYAR</option><option value="135">TANDO MUHAMMAD KHAN</option><option value="149">THARPARKAR</option><option value="129">THATTA</option><option value="150">UMERKOT</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="503" style="width: 230px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-DISTRICT_ID-container"><span class="select2-selection__rendered" id="select2-DISTRICT_ID-container" role="textbox" aria-rue" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

            </div>
        </div>
        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">City
                    <span class="text-danger"></span></label>
                <br>
                <select  id="CITY_ID" class="js-example-basic-single form-control select2-hidden-accessible" name="CITY_ID" tabindex="-1" aria-hidden="true" data-select2-id="CITY_ID"> <option value="0" data-select2-id="513">--Choose--</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="510" style="width: 230px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-CITY_ID-container"><span class="select2-selection__rendered" id="select2-CITY_ID-container" role="textbox" aria-rue" title="--Choose--">--Choose--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Home Address <small>Postal Address</small>
                    <span class="text-danger">*</span></label>
                <textarea  name="HOME_ADDRESS" id="HOME_ADDRESS" class="form-control" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div class="col-md-3">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Parmanent Address
                    <span class="text-danger"></span></label>
                <textarea  name="PERMANENT_ADDRESS" id="PERMANENT_ADDRESS" class="form-control" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div class="col-md-2">
            <div class="top-margin">
                <label for="exampleInput1" class="bmd-label-floating">Zip / Postal Code
                    <span class="text-danger"></span></label>
                <input  type="text" id="ZIP_CODE" class="form-control" name="ZIP_CODE" value="">

            </div>
        </div>
        <div class="col-md-2">
            <div class="top-margin">
                <label for="BLOOD_GROUP" class="bmd-label-floating">Blood Group

                    <span class="text-danger"></span></label>

                <select  name="BLOOD_GROUP" id="BLOOD_GROUP" class="form-control">
                    <option value="0">--Choose Blood Group--</option><option value="A+">A+</option><option value="A-">A-</option><option value="B+">B+</option><option value="B-">B-</option><option value="O+">O+</option><option value="O-">O-</option><option value="AB+">AB+</option><option value="AB-">AB-</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="top-margin">
                <label for="GENDER" class="bmd-label-floating">Gender

                    <span class="text-danger">*</span></label>

                <select  name="GENDER" id="GENDER" class="form-control">
                    <option value="0">--choose--</option> ;
                    <option value="M" selected="">MALE</option><option value="F">FEMALE</option><option value="O">OTHER</option>
                </select>
            </div>
        </div>

    </div>
            <div class="row">
            <div class="col-md-3">
                <div class="top-margin">
               <button class="btn btn-primary btn-md" id="save_family_info_link">Save</button>
                </div>

            </div>

    </div>

</div>

<script>
    function getProvinces(country_id){
        let query_string = "action=PROVINCES";
        if(country_id>0){
            query_string +="&COUNTRY_ID="+country_id;

        }else{
            $('#CITY_ID').html(" <option value='0'>--Choose--</option>");
            $('#DISTRICT_ID').html(" <option value='0'>--Choose--</option>");
            $('#PROVINCE_ID').html(" <option value='0'>--Choose--</option>");
            return;
        }
        callAjax("../view/ajax_get.php?"+query_string,'PROVINCE_ID');
    }
    function getDistrict(province_id){
        let query_string = "action=DISTIRCTS";
        let country_id = $('#COUNTRY_ID').val();
        if(province_id>0&&country_id>0){
            query_string +="&PROVINCE_ID="+province_id+"&COUNTRY_ID="+country_id;

        }else{
            $('#DISTRICT_ID').html(" <option value='0'>--Choose--</option>");
            return;
        }
        callAjax("../view/ajax_get.php?"+query_string,'DISTRICT_ID');
    }
    function getCity(district_id){

        let country_id = $('#COUNTRY_ID').val();
        let PROVINCE_ID = $('#PROVINCE_ID').val();
        populateCity(district_id,PROVINCE_ID,country_id);
    }
    function populateCity(district_id,PROVINCE_ID,country_id){
        let query_string = "action=CITIES";
        if(PROVINCE_ID>0&&country_id>0&&(district_id>=0||district_id==-1)){
            query_string +="&PROVINCE_ID="+PROVINCE_ID+"&COUNTRY_ID="+country_id+"&DISTRICT_ID="+district_id;
            //console.log('PROVINCE_ID'+PROVINCE_ID+'country_id'+country_id);
        }else{
            console.log('PROVINCE_ID'+PROVINCE_ID+'country_id'+country_id);
            $('#CITY_ID').html(" <option value='0'>--Choose--</option>");
            return;
        }
        callAjax("../view/ajax_get.php?"+query_string,'CITY_ID');
    }
    getProvinces('160');getDistrict('6');populateCity('151','6','160');   $( document ).ready(function() {
     setTimeout(
        function() {
          console.log("ok");
          
          $('#DISTRICT_ID').val(151).change();
           //$('#PROVINCE_ID').val(6).change();
        }, 1000);
    });
   
</script>                                </form>
                            </div>
                        
