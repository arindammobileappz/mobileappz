<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h3>Fitness Studio</h3>
                </div>

                <div class="ibox-content">
                    <form method="POST" id="serviceForm" class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url(); ?>/partners/fitnessstudio">
                        <div class="hr-line-dashed"></div> 
                        <input type="hidden" class="form-control" name="featureId" required="" value="">
                        <div class="row">
                            <input type="hidden" name="fkServiceId" id="fkServiceId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkServiceId;endif;?>">
                            <input type="hidden" name="fkVendorId" id="fkVendorId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkVendorId;endif;?>">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>About Fitness Studio  </label>
                                        <textarea rows="4" class="form-control" id="adoutService" name="adoutService"><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->adoutService;endif;?></textarea>
                                        <input type="hidden" name="fitId" id="fitId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fitId;endif;?>">
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Please mention if you have received any award/Accolades?</label>
                                        <input id="aerobicsAward" name="awards" type="text" class="form-control" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->awards;endif;?>">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>What is your total experience in this field (in no. of years)? *</label>
                                    <input id="aerobicsExperience" name="experience" type="text" class="form-control" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->experience;endif;?>" onkeypress="return isNumberKey(event)" maxlength="2" required="">
                                    <span class="has-error"><?php echo form_error("experience"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Brief Description about you/ your centre ? *</label><br/>
                                        <textarea name="aboutUs" id="aerobicsUserDescription" class="t-f-full" required=""><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->aboutUs;endif;?></textarea>
                                        <span class="has-error"><?php echo form_error("aboutUs"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                 <?php if(isset($serviceData) && !empty($serviceData)):
                                        $ageGroup =  unserialize($serviceData[0]->ageGroup);
                                endif; ?>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="icheck-inline">
                                        <label>Which age group you cater to? *</label><br>
                                            
                                            <input type="checkbox" value="Below 10" <?php if(isset($serviceData) && !empty($serviceData) && is_array($ageGroup)):if(in_array("Below 10", $ageGroup)):echo"checked";endif;endif;?> name="ageGroup[]" id="ageGroup1" class="multiCheckbox">
                                            <label>Below 10</label>
                                            
                                            <input type="checkbox" value="10-25" <?php if(isset($serviceData) && !empty($serviceData) && is_array($ageGroup)):if(in_array("10-25", $ageGroup)):echo"checked";endif;endif;?> name="ageGroup[]" id="ageGroup2" class="multiCheckbox">
                                            <label>10-25</label>
                                            
                                            <input type="checkbox" value="Above 25" <?php if(isset($serviceData) && !empty($serviceData) && is_array($ageGroup)):if(in_array("Above 25", $ageGroup)):echo"checked";endif;endif;?> name="ageGroup[]" id="ageGroup3" class="multiCheckbox">
                                            <label>Above 25</label>
                                            
                                        <span class="has-error"><?php echo form_error("ageGroup[]"); ?></span>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12">
                                <?php if(isset($serviceData) && !empty($serviceData) && is_array($serviceData)):
                                        $amenities =  unserialize($serviceData[0]->amenities);
                                endif; ?>
                                <div class="col-lg-12">
                                    <div class="icheck-inline">
                                        <label>What are the amenities your centre have *</label><br>
                                            
                                            <input type="checkbox" value="Change Room" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Change Room", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities1" class="multiCheckbox">
                                            <label>Change Room</label>
                                            
                                            <input type="checkbox" value="Locker" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Locker", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities2" class="multiCheckbox">
                                            <label>Locker</label>
                                            
                                            <input type="checkbox" value="Group classes" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Group classes", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities3" class="multiCheckbox">
                                            <label>Group classes</label>
                                            
                                            <input type="checkbox" value="AC" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("AC", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities4" class="multiCheckbox">
                                            <label>AC</label>
                                            
                                            <input type="checkbox" value="Parking" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Parking", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities5" class="multiCheckbox">
                                            <label>Parking</label>
                                            
                                            <input type="checkbox" value="Personal Trainer" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Personal Trainer", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities6" class="multiCheckbox">
                                            <label>Personal Trainer</label>
                                            
                                            <input type="checkbox" value="Spa" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Spa", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities7" class="multiCheckbox">
                                            <label>Spa</label>
                                            
                                            <input type="checkbox" value="Medical Aid" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Medical Aid", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities8" class="multiCheckbox">
                                            <label>Medical Aid</label>
                                            
                                            <input type="checkbox" value="Drinking water" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Drinking water", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities9" class="multiCheckbox">
                                            <label>Drinking water</label>
                                            
                                            <input type="checkbox" value="Wi-Fi" <?php if(isset($serviceData) && !empty($serviceData) && is_array($amenities)):if(in_array("Wi-Fi", $amenities)):echo"checked";endif;endif;?> name="amenities[]" id="amenities10" class="multiCheckbox">
                                            <label>Wi-Fi</label>
                                            
                                        <span class="has-error"><?php echo form_error("amenities[]"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($serviceData) && !empty($serviceData)):
                                      $chargeType =  unserialize($serviceData[0]->chargeType);
                                      $chargeAmount =  unserialize($serviceData[0]->chargeAmount);
                             endif;?>
                            <div class="col-md-6"> 
                                <div>
                                    <div class="col-lg-12">
                                        <label  for="typehead">Fitness Studio Charges *</label>
                                    </div>
                                    <div class="has-error m-left-30" id="chargesErr"><?php echo form_error("centerContact"); ?></div>
                                    <div class="col-md-12">
                                        <div class="col-md-4 charges"><input type="checkbox" name="chargeType[]" id="perSession" onclick="customShow('perSession', 'perSessionDiv')" value="Per session" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Per session", $chargeType)):echo"checked";endif;endif;?>/> Per session</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Per session", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perSessionDiv" ><input maxlength="100" id="perSessionText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Per session", $chargeAmount)):echo $chargeAmount['Per session'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div style="clear : both"></div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perDay" onclick="customShow('perDay', 'perDayDiv')" value="Per Day" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Per Day", $chargeType)):echo"checked";endif;endif;?>/> Per Day</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Per Day", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perDayDiv"><input maxlength="50" id="perDayText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Per Day", $chargeAmount)):echo $chargeAmount['Per Day'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perMonth" onclick="customShow('perMonth', 'perMonthDiv')" value="Per Month" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Per Month", $chargeType)):echo"checked";endif;endif;?>/> Per Month</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Per Month", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perMonthDiv"><input maxlength="50" id="perMonthText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Per Month", $chargeAmount)):echo $chargeAmount['Per Month'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="bimonthly" onclick="customShow('bimonthly', 'bimonthlyDiv')" value="Bimonthly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Bimonthly", $chargeType)):echo"checked";endif;endif;?>/> Bimonthly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Bimonthly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="bimonthlyDiv"><input maxlength="50" id="bimonthlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Bimonthly", $chargeAmount)):echo $chargeAmount['Bimonthly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="quarterly" onclick="customShow('quarterly', 'quarterlyDiv')" value="Quarterly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Quarterly", $chargeType)):echo"checked";endif;endif;?>/> Quarterly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Quarterly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="quarterlyDiv"><input maxlength="50" id="quarterlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Quarterly", $chargeAmount)):echo $chargeAmount['Quarterly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="halfYearly" onclick="customShow('halfYearly', 'halfYearlyDiv')" value="Half Yearly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Half Yearly", $chargeType)):echo"checked";endif;endif;?>/> Half Yearly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Half Yearly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="halfYearlyDiv"><input maxlength="50" id="halfYearlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Half Yearly", $chargeAmount)):echo $chargeAmount['Half Yearly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="annually" onclick="customShow('annually', 'annuallyDiv')" value="Annually" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Annually", $chargeType)):echo"checked";endif;endif;?>/> Annually</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Annually", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="annuallyDiv"><input maxlength="50" id="annuallyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Annually", $chargeAmount)):echo $chargeAmount['Annually'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Select currency ?</label>
                                    <select  name="currency" id="currency" class="bs-select form-control" data-size="4" title="Currency"  >
                                        <option value="INR" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "INR"):echo"selected";endif;endif;?>>Indian(INR)</option>
                                        <option value="LKR" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "LKR"):echo"selected";endif;endif;?>>Sri Lanka(LKR)</option>
                                        <option value="AED" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->currency == "AED"):echo"selected";endif;endif;?>>Dubai(AED)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary" type="submit" name="submit" value="editFeature">Save changes</button>
                                <button class="btn btn-info" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>