<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h3>Massages</h3>
                    <div> <?php  if(isset($messages)){ echo $messages; }?></div>
                </div>

                <div class="ibox-content">
                    <form method="POST" id="serviceForm" class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url(); ?>partners/massages">
                        <div class="hr-line-dashed"></div> 
                        <input type="hidden" class="form-control" name="featureId" required="" value="">
                        <div class="row">
                            <input type="hidden" name="fkServiceId" id="fkServiceId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkServiceId;endif;?>">
                            <input type="hidden" name="fkVendorId" id="fkVendorId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkVendorId;endif;?>">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Health Benefits of massages.  </label>
                                        <textarea rows="4" class="form-control" id="adoutService" name="adoutService"><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->adoutService;endif;?></textarea>
                                        <input type="hidden" name="massId" id="massId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->massId;endif;?>">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Brief Description about you / your centre ? *</label><br/>
                                        <textarea name="aboutUs" id="aerobicsUserDescription" class="t-f-full" required=""><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->aboutUs;endif;?></textarea>
                                        <span class="has-error"><?php echo form_error("aboutUs"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>What is your total experience in this field (in no. of years)? *</label>
                                    <input id="aerobicsExperience" name="experience" type="text" class="form-control" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->experience;endif;?>" onkeypress="return isNumberKey(event,'mobileErr')" maxlength="2" required="">
                                    <span class="has-error"><?php echo form_error("experience"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Where do you provide service? *</label><br>
                                           <?php if(isset($serviceData) && !empty($serviceData)):
                                                $provideService =  unserialize($serviceData[0]->provideService);
                                           endif;?>
                                        <label class="m-320-10 chargesClass"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_my_centre", $provideService)):echo"checked";endif;endif;?> type="checkbox" name="provideService[]" class="icheck" value="at_my_centre"> at my centre </label>
                                        <label class="m-left-10"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_my_home", $provideService)):echo"checked";endif;endif;?> type="checkbox" name="provideService[]" class="icheck" value="at_my_home"> at my home </label>
                                        <label class="m-left-10"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_customer_location", $provideService)):echo"checked";endif;endif;?> type="checkbox" id="arobicService" onclick="customShow('arobicService', 'arobicQue')" name="provideService[]" class="icheck" value="at_customer_location"> at customer location </label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-md-12" id="arobicQue" <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_customer_location", $provideService)): echo "style='display:block'"; else: echo "style='display:none'";endif; else:echo "style='display:none'";endif;?>>
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>What item do you carry with yourself required for massage ?</label><br/>
                                            <textarea name="item" id="item" class="t-f-full" required=""><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->item;endif;?></textarea>
                                            <span class="has-error"><?php echo form_error("item"); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>You can travel within</label>
                                            <select  name="travelling" id="aerobicsTravelKM" class="bs-select form-control" data-size="4" data-live-search="true" title="Traving KM"  >
                                                <option value="">Select Travel KM</option>

                                                <?php for($i=1;$i<=26;$i++):?>
                                                <option value="<?php echo $i;?>" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->travelling == $i):echo"selected";endif;endif;?>><?php echo $i;?></option>
                                                <?php endfor;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Do you have a vehicle?</label>
                                            <select  name="vehicle" id="aerobicsVehicle" class="bs-select form-control" data-size="4" data-live-search="true" title="Floor Name"  >
                                                <option value="1" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->vehicle == 1):echo"selected";endif;endif;?>>Yes</option>
                                                <option value="0" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->vehicle == 0):echo"selected";endif;endif;?>>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Type of massages you provide ?</label><br/>
                                        <textarea name="typeMass" id="typeMass" class="t-f-full" required=""><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->typeMass;endif;?></textarea>
                                        <span class="has-error"><?php echo form_error("typeMass"); ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if(isset($serviceData) && !empty($serviceData)):
                                $chargeType =  unserialize($serviceData[0]->chargeType);
                                $chargeAmount =  unserialize($serviceData[0]->chargeAmount);
                                $discAmount = unserialize($serviceData[0]->discAmount);
                            endif; ?>
                            <div class="col-md-7"> 
                                <div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Select currency ?</label>
                                            <select  name="currency" id="currency" class="bs-select form-control" data-size="4" title="Currency"  >
                                                <option value="INR" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "INR"):echo"selected";endif;endif;?>>Indian(INR)</option>
                                                <option value="LKR" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "LKR"):echo"selected";endif;endif;?>>Sri Lanka(LKR)</option>
                                                <option value="AED" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "AED"):echo"selected";endif;endif;?>>Dubai(AED)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5"><label  for="typehead">Massages Charges *</label></div>
                                    <div class="col-lg-3"><label  for="typehead">Price </label></div>
                                    <div class="col-lg-3"><label  for="typehead">( % )</label></div>
                                    <div class="has-error m-left-30" id="chargesErr"><?php echo form_error("centerContact"); ?></div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="per30min" onclick="customShow('per30min', 'per30minDiv')" value="per_30_min" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_30_min", $chargeType)):echo"checked";endif;endif;?>/> Per 30 Min</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_30_min", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="per30minDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="per30minText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_30_min", $chargeAmount)):echo $chargeAmount['per_30_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="100" id="disc30minText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_30_min", $discAmount)):echo $discAmount['per_30_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="per60min" onclick="customShow('per60min', 'per60minDiv')" value="per_60_min" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_60_min", $chargeType)):echo"checked";endif;endif;?>/> Per 60 Min</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_60_min", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="per60minDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="per60minText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_60_min", $chargeAmount)):echo $chargeAmount['per_60_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="100" id="disc60minText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_60_min", $discAmount)):echo $discAmount['per_60_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="per90min" onclick="customShow('per90min', 'per90minDiv')" value="per_90_min" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_90_min", $chargeType)):echo"checked";endif;endif;?>/> Per 90 Min</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_90_min", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="per90minDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="per90minText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_90_min", $chargeAmount)):echo $chargeAmount['per_90_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="100" id="disc90minText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_90_min", $discAmount)):echo $discAmount['per_90_min'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4 charges"><input type="checkbox" name="chargeType[]" id="perSession" onclick="customShow('perSession', 'perSessionDiv')" value="per_session" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_session", $chargeType)):echo"checked";endif;endif;?>/> Per Session</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_session", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perSessionDiv" >
                                        <div class="col-md-6">
                                                <input maxlength="100" id="perSessionText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_session", $chargeAmount)):echo $chargeAmount['per_session'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="100" id="discSessionText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_session", $discAmount)):echo $discAmount['per_session'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="clear : both"></div>

                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perVisit" onclick="customShow('perVisit', 'perVisitDiv')" value="per_visit" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_visit", $chargeType)):echo"checked";endif;endif;?>/> Per Visit</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_visit", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perVisitDiv">
                                        <div class="col-md-6">
                                                <input maxlength="50" id="perVisitText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_visit", $chargeAmount)):echo $chargeAmount['per_visit'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discVisitText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_visit", $discAmount)):echo $discAmount['per_visit'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perMonth" onclick="customShow('perMonth', 'perMonthDiv')" value="per_month" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_month", $chargeType)):echo"checked";endif;endif;?>/> Per Month</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_month", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perMonthDiv">
                                            <div class="col-md-6">
                                                <input id="perMonthText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_month", $chargeAmount)):echo $chargeAmount['per_month'];endif;endif;?>" >
                                            </div>
                                            <div class="col-md-6">
                                                <input id="perDayText1" tabindex="1" class="form-control" type="text" name="chargeAmountText" placeholder="Program details" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_month", $chargeAmount)):echo $serviceData[0]->chargeAmountText;endif;endif;?>" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
<!--                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Photo </label>
                                    <input id="photoList" name="photoList[]" type="file" class="" multiple="" onchange="ValidateSingleInput(this);">
                                    Please press CTRL to select multiple files.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Documents/Certificates </label>
                                    <input id="documents" name="documents[]" type="file" class="" multiple="" onchange="ValidateSingleInputFile(this);">
                                    Please press CTRL to select multiple files.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Video </label>
                                    <input id="video" name="video[]" type="text" class="form-control" >
                                    Kindly paste your video link here<br>
                                    <a onclick="addMoreVideo();"><i class="fa fa-plus-circle fa-lg"></i></a>
                                </div>
                            </div>-->
                            <!--<div id="moreVideos"></div>-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Is your centre for Women Only ? </label>
                                    <label class="has-error" ><?php echo form_error("centerType"); ?></label>
                                    <select name="centerType" id="centerType" class="bs-select form-control required" data-size="auto" title="centerType" onchange="showWomenTime(this.value,'womenDiv')">
                                        <option <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->centerType == 1):echo"selected";endif;endif;?> value="1">Yes</option>
                                        <option <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->centerType == 0):echo"selected";endif;endif;?> value="0">No</option>
                                    </select>
                                    <div class="has-error"><?php echo form_error("centerType"); ?></div>
                                </div>
                            </div>
                        </div>
                        <?php // print_r($serviceData); ?>
                        
                        <?php if(isset($serviceData) && !empty($serviceData)):
                                $days =  unserialize($serviceData[0]->days);
                                $openingHours =  unserialize($serviceData[0]->openingHours);
                                $closingHours =  unserialize($serviceData[0]->closingHours);
                        endif; ?>
                        <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label class="col-md-3" for="typehead">Days *</label>
                                    <label class="col-md-3" for="typehead">Opening Hours</label>
                                    <label class="col-md-3" for="typehead">Closing Hours</label>
                                    <label class="has-error m-left-30" id="checkDays"><?php echo form_error("centerType"); ?></label>
                                    <div id="checkDaysTime">
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <input type="checkbox" name="days[]" id="check1" onclick="customShowDays('check1', 'open1','close1')" value="Monday" <?php if(isset($days) && !empty($days)):if(in_array("Monday", $days)):echo"checked";endif;endif;?>/> Monday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open1" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Monday']) && empty($openingHours['Monday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Monday", $openingHours)):echo $openingHours['Monday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="close1" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Monday']) && empty($closingHours['Monday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Monday", $closingHours)):echo $closingHours['Monday'];endif;endif;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="checkbox" id="allOpenHour" onclick="allDaysHour('allOpenHour', 'open1','close1')"/> All Days 
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check2" onclick="customShowDays('check2', 'open2','close2')" value="Tuesday" <?php if(isset($days) && !empty($days)):if(in_array("Tuesday", $days)):echo"checked";endif;endif;?>/> Tuesday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open2" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Tuesday']) && empty($openingHours['Tuesday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Tuesday", $openingHours)):echo $openingHours['Tuesday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="close2" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Tuesday']) && empty($closingHours['Tuesday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Tuesday", $closingHours)):echo $closingHours['Tuesday'];endif;endif;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check3" onclick="customShowDays('check3', 'open3','close3')" value="Wednesday" <?php if(isset($days) && !empty($days)):if(in_array("Wednesday", $days)):echo"checked";endif;endif;?>/> Wednesday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open3" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Wednesday']) && empty($openingHours['Wednesday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Wednesday", $openingHours)):echo $openingHours['Wednesday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="close3" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Wednesday']) && empty($closingHours['Wednesday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Wednesday", $closingHours)):echo $closingHours['Wednesday'];endif;endif;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check4" onclick="customShowDays('check4', 'open4','close4')" value="Thursday" <?php if(isset($days) && !empty($days)):if(in_array("Thursday", $days)):echo"checked";endif;endif;?>/> Thursday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open4" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Thursday']) && empty($openingHours['Thursday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Thursday", $openingHours)):echo $openingHours['Thursday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="close4" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Thursday']) && empty($closingHours['Thursday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Thursday", $closingHours)):echo $closingHours['Thursday'];endif;endif;?>">
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check5" onclick="customShowDays('check5', 'open5','close5')" value="Friday" <?php if(isset($days) && !empty($days)):if(in_array("Friday", $days)):echo"checked";endif;endif;?>/> Friday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open5" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Friday']) && empty($openingHours['Friday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Friday", $openingHours)):echo $openingHours['Friday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="close5" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Friday']) && empty($closingHours['Friday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Friday", $closingHours)):echo $closingHours['Friday'];endif;endif;?>">
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check6" onclick="customShowDays('check6', 'open6','close6')" value="Saturday" <?php if(isset($days) && !empty($days)):if(in_array("Saturday", $days)):echo"checked";endif;endif;?>/> Saturday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open6" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Saturday']) && empty($openingHours['Saturday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Saturday", $openingHours)):echo $openingHours['Saturday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="close6" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Saturday']) && empty($closingHours['Saturday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Saturday", $closingHours)):echo $closingHours['Saturday'];endif;endif;?>">
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check7" onclick="customShowDays('check7', 'open7','close7')" value="Sunday" <?php if(isset($days) && !empty($days)):if(in_array("Sunday", $days)):echo"checked";endif;endif;?>/> Sunday
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open7" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['Sunday']) && empty($openingHours['Sunday'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("Sunday", $openingHours)):echo $openingHours['Sunday'];endif;endif;?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="close7" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['Saturday']) && empty($closingHours['Saturday'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("Sunday", $closingHours)):echo $closingHours['Sunday'];endif;endif;?>">
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-top-10">
                                            <div class="col-md-3">
                                              <input type="checkbox" name="days[]" id="check8" onclick="customShowDays('check8', 'open8','close8')" value="break_hours" <?php if(isset($days) && !empty($days)):if(in_array("break_hours", $days)):echo"checked";endif;endif;?>/> break_hours
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <input id="open8" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['break_hours']) && empty($openingHours['break_hours'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("break_hours", $openingHours)):echo $openingHours['break_hours'];endif;endif;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3" data-autoclose="true">
                                                <div class="bootstrap-timepicker input-group">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="close8" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['break_hours']) && empty($closingHours['break_hours'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("break_hours", $closingHours)):echo $closingHours['break_hours'];endif;endif;?>">
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="womenDiv" style="<?php if($serviceData[0]->centerType == 0){ ?>display: none;"<?php } ?> class="m-top-10">
                                            <label class="m-top-10" for="typehead">Separate Time Slots (For womens only)</label>
                                            <div class="col-md-12 m-top-10">
                                                <div class="col-md-3">
                                                  <input type="checkbox" name="days[]" id="check9" onclick="customShowDays('check9', 'open9','close9')" value="morning_shift" <?php if(isset($days) && !empty($days)):if(in_array("morning_shift", $days)):echo"checked";endif;endif;?>/>morning_shift
                                                </div>
                                                <div class="col-md-3" data-autoclose="true">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="open9" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['morning_shift']) && empty($openingHours['morning_shift'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("morning_shift", $openingHours)):echo $openingHours['morning_shift'];endif;endif;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3" data-autoclose="true">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <div class="bootstrap-timepicker input-group">
                                                            <input id="close9" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['morning_shift']) && empty($closingHours['morning_shift'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("morning_shift", $closingHours)):echo $closingHours['morning_shift'];endif;endif;?>">
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-top-10">
                                                <div class="col-md-3">
                                                  <input type="checkbox" name="days[]" id="check10" onclick="customShowDays('check10', 'open10','close10')" value="evening_shift" <?php if(isset($days) && !empty($days)):if(in_array("evening_shift", $days)):echo"checked";endif;endif;?>/> evening_shift
                                                </div>
                                                <div class="col-md-3" data-autoclose="true">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <input id="open10" autocomplete="off" class="form-control timepicker" type="text" name="openingHours[]" <?php if(!isset($openingHours['evening_shift']) && empty($openingHours['evening_shift'])):echo"disabled";endif;?> value="<?php if(isset($openingHours) && !empty($openingHours)):if(array_key_exists("evening_shift", $openingHours)):echo $openingHours['evening_shift'];endif;endif;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-3" data-autoclose="true">
                                                    <div class="bootstrap-timepicker input-group">
                                                        <div class="bootstrap-timepicker input-group">
                                                            <input id="close10" autocomplete="off" class="form-control timepicker" type="text" name="closingHours[]" <?php if(!isset($closingHours['evening_shift']) && empty($closingHours['evening_shift'])):echo"disabled";endif;?> value="<?php if(isset($closingHours) && !empty($closingHours)):if(array_key_exists("evening_shift", $closingHours)):echo $closingHours['evening_shift'];endif;endif;?>">
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if(isset($serviceData) && !empty($serviceData)):
                                                $womenDays =  unserialize($serviceData[0]->womenDays);
                                            endif; ?>
                                            <div class="col-md-12 m-top-10">
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays1" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("mon", $womenDays)):echo"checked";endif;endif;?> value="mon" /> <label>Mon</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays2" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("tue", $womenDays)):echo"checked";endif;endif;?> value="tue" /> <label>Tue</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays3" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("wed", $womenDays)):echo"checked";endif;endif;?> value="wed" /> <label>Wed</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays4" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("thu", $womenDays)):echo"checked";endif;endif;?> value="thu" /> <label>Thu</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays5" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("fri", $womenDays)):echo"checked";endif;endif;?> value="fri" /> <label>Fri</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays6" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("sat", $womenDays)):echo"checked";endif;endif;?> value="sat" /> <label>Sat</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="checkbox" name="womenDays[]" id="womenDays7" <?php if(isset($womenDays) && !empty($womenDays)):if(in_array("sun", $womenDays)):echo"checked";endif;endif;?> value="sun" /> <label>Sun</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary" type="submit" onclick="return timeSlot()" name="submit" value="editFeature">Save changes</button>
                                <button class="btn btn-info" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showHideFiled(id,checked){
        if (checked == 1) {
         $("#"+id).css("display", "block");
      }else if (checked == 0) {
        $("#"+id).css("display", "none");
      };
    }
</script>

