<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div style="float:left;">
                        <h3>Aerobics</h3>
                        <div> <?php  if(isset($messages)){ echo $messages; }?></div>
                    </div>
                    <?php
                    if(isset($serviceData[0]->updateStatus) && $serviceData[0]->updateStatus==1) { ?>
                    <div style="margin-left:400px;padding-top:2px;">
                        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aerobics">
                               Change Request
                            </button>-->
                            <span><a href="javascript:void(0);" class="requestclass">Change Request</a><span>
                    </div>
                    <?php } ?>
                 </div>
                <div class="ibox-content">
                    <form method="POST" id="serviceForm" class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url(); ?>vendorview/updateRequestedService" >
                        <div class="hr-line-dashed"></div> 
                        <div class="row">
                            <input type="hidden" name="fkServiceId" id="fkServiceId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkServiceId;endif;?>">
                            <input type="hidden" name="fkVendorId" id="fkVendorId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->fkVendorId;endif;?>">
                            <input type="hidden" id="tablesName" name="tablesName" value="aerobics"/>
                           
                            <div class="col-lg-12 form-group">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>About Aerobics </label>
                                        <textarea rows="4" class="form-control" id="adoutService" name="adoutService"><?php if(isset($serviceData[0]->adoutService) && !empty($serviceData[0]->adoutService)):echo $serviceData[0]->adoutService;elseif(isset ($_POST['adoutService'])):echo $_POST['adoutService'];endif;?></textarea>
                                        <input type="hidden" name="aeroId" id="aeroId" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->aeroId;endif;?>">
                                    </div>
                                </div>
                                
                            </div> 
                            <div class="col-lg-12 form-group">
                                <div class="col-lg-6">
                                <label>Do you have any of the following certification? </label>
                                <?php if(isset($serviceData) && !empty($serviceData)):
                                   $certification =  unserialize($serviceData[0]->certification);
                                endif;?>
                                <div class="icheck-inline">
                                    <label><input <?php if(isset($certification) && !empty($certification)):if(in_array("International Fitness Association(IFA)", $certification)):echo"checked";endif;endif;?>  type="checkbox" name="certification[]" class="icheck" value="International Fitness Association(IFA)"> International Fitness Association(IFA) </label><br>
                                    <label><input <?php if(isset($certification) && !empty($certification)):if(in_array("Aerobics and fitness association of America(AFAA)", $certification)):echo"checked";endif;endif;?> type="checkbox" name="certification[]" class="icheck" value="Aerobics and fitness association of America(AFAA)"> Aerobics and fitness association of America(AFAA) </label><br>
                                    <label><input   <?php if(isset($certification) && !empty($certification)):if(in_array("Indian Academy of Fitness Training(IAFT)", $certification)):echo"checked";endif;endif;?> type="checkbox" name="certification[]" class="icheck" value="Indian Academy of Fitness Training(IAFT)"> Indian Academy of Fitness Training(IAFT) </label><br>
                                    <textarea id="certificationId" name="moreCertification" placeholder="Any other certification . For more than one separate each by a comma" class="t-f-full" rows="1"><?php if(isset($serviceData[0]->moreCertification) && !empty($serviceData[0]->moreCertification)):echo $serviceData[0]->moreCertification;elseif(isset ($_POST['moreCertification'])):echo $_POST['moreCertification'];endif;?></textarea><br>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Please mention if you have received any Award/Accolades ?</label>
                                        <input id="aerobicsAward" name="awards" type="text" class="form-control" value="<?php if(isset($serviceData[0]->awards) && !empty($serviceData[0]->awards)):echo $serviceData[0]->awards;elseif(isset ($_POST['awards'])):echo $_POST['awards'];endif;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>What is your total experience in this field (in no. of years) ? *</label>
                                    <input id="aerobicsExperience" name="experience" type="tel" class="form-control" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->experience;endif;?>" onkeypress="return isNumberKey(event,'mobileErr')" maxlength="2" required="">
                                    <span class="has-error"><?php echo form_error("experience"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                     <div class="form-group">
                                        <div class="icheck-inline">
                                            <label>
                                                Do you have membership of any association/board of personal trainers? </label>
                                            <label>
                                            <input type="radio" name="ifPersonalTrainer"  class="icheck" value="1" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->ifPersonalTrainer == 1):echo"checked";endif;endif;?> onclick="showHideFiled('personal_trainers', 1)"> Yes </label>
                                            <label class="m-left-10">
                                            <input type="radio" name="ifPersonalTrainer"  class="icheck deposit" value="0" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->ifPersonalTrainer == 0):echo"checked";endif;endif;?> onclick="showHideFiled('personal_trainers', 0)"> No </label>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6" id="personal_trainers" <?php if(isset($serviceData) && !empty($serviceData)){if($serviceData[0]->ifPersonalTrainer == 1){ echo "style='display:block'"; }else{ echo"style='display:none'"; } }?>>
                                    <div class="form-group">
                                    <label>What is the name of the association/board of personal trainers ?</label>
                                    <input id="personalTrainer" name="personalTrainer" type="text" class="form-control" value="<?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->personalTrainer;endif;?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-group " >
                                        <label>Where do you provide service? *</label><br>
                                           <?php if(isset($serviceData) && !empty($serviceData)):
                                                $provideService =  unserialize($serviceData[0]->provideService);
                                           endif;?>
                                        <label class="chargesClass"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_my_centre", $provideService)):echo"checked";endif;endif;?> type="checkbox" name="provideService[]" class="icheck" value="at_my_centre"> At my centre </label>
                                        <label class="m-top-10"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_my_home", $provideService)):echo"checked";endif;endif;?> type="checkbox" name="provideService[]" class="icheck" value="at_my_home"> At my home </label>
                                        <label class="m-top-10"><input <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_customers_location", $provideService)):echo"checked";endif;endif;?> type="checkbox" id="arobicService" onclick="customShow('arobicService', 'arobicQue')" name="provideService[]" class="icheck" value="at_customers_location"> At customer location </label>
                                    </div>
                                </div>
                                <br><br>
                                <div id="arobicQue" <?php if(isset($provideService) && !empty($provideService)):if(in_array("at_customers_location", $provideService)): echo "style='display:block'"; else: echo "style='display:none'";endif; else:echo "style='display:none'";endif;?>>
                                <div class="col-lg-3">
                                    <div>
                                        <label>You can travel within</label>
                                        <select  name="travelling" id="aerobicsTravelKM" class="bs-select form-control" data-size="4" title="Traving KM"  >
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
                                        <select  name="vehicle" id="aerobicsVehicle" class="bs-select form-control" data-size="4" title="Floor Name"  >
                                            <option value="1" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->vehicle == 1):echo"selected";endif;endif;?>>Yes</option>
                                            <option value="0" <?php if(isset($serviceData) && !empty($serviceData)):if($serviceData[0]->vehicle == 0):echo"selected";endif;endif;?>>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-12 form-group">
                                    <label>Brief Description about you/ your centre ? *</label><br/>
                                    <textarea name="aboutUs" id="aerobicsUserDescription" class="form-control" rows="2" required=""><?php if(isset($serviceData) && !empty($serviceData)):echo $serviceData[0]->aboutUs;endif;?></textarea>
                                    <span class="has-error"><?php echo form_error("aboutUs"); ?></span>
                                </div>
                            </div>
                            
                            <?php if(isset($serviceData) && !empty($serviceData)):
                                      $chargeType =  unserialize($serviceData[0]->chargeType);
                                      $chargeAmount =  unserialize($serviceData[0]->chargeAmount);
                                      $discAmount = unserialize($serviceData[0]->discAmount);
                             endif;?>
                            <div class="col-md-6"> 
                                <div class="form-group">
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
                                    <div class="col-lg-5"><label  for="typehead">Aerobics Charges *</label></div>
                                    <div class="col-lg-3"><label  for="typehead">Price </label></div>
                                    <div class="col-lg-3"><label  for="typehead">( % )</label></div>
                                    <div class="has-error m-left-30 " id="chargesErr"><?php echo form_error("centerContact"); ?></div>
                                    <div class="col-md-12 ">
                                        <div class="col-md-4 charges"><input type="checkbox" name="chargeType[]" id="perSession" onclick="customShow('perSession', 'perSessionDiv')" value="per_session" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_session", $chargeType)):echo"checked";endif;endif;?>/> Per Session</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_session", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perSessionDiv" >
                                            <div class="col-md-6">
                                                <input maxlength="100" id="perSessionText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_session", $chargeAmount)):echo $chargeAmount['per_session'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="100" id="discSessionText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType) && !empty($discAmount['per_session'])):if(array_key_exists("per_session", $discAmount)):echo $discAmount['per_session'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear : both"></div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perVisit" onclick="customShow('perVisit', 'perVisitDiv')" value="per_visit" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_visit", $chargeType)):echo"checked";endif;endif;?>/> Per Visit</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_visit", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perVisitDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="perVisitText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType) ):if(array_key_exists("per_visit", $chargeAmount)):echo $chargeAmount['per_visit'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discVisitText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType) && !empty($discAmount['per_visit'])):if(array_key_exists("per_visit", $discAmount)):echo $discAmount['per_visit'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perDay" onclick="customShow('perDay', 'perDayDiv')" value="per_day" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_day", $chargeType)):echo"checked";endif;endif;?>/> Per Day</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_day", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perDayDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="perDayText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_day", $chargeAmount)):echo $chargeAmount['per_day'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discDayText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_day", $discAmount)):echo $discAmount['per_day'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="perMonth" onclick="customShow('perMonth', 'perMonthDiv')" value="per_month" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("per_month", $chargeType)):echo"checked";endif;endif;?>/> Per Month</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("per_month", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="perMonthDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="perMonthText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_month", $chargeAmount)):echo $chargeAmount['per_month'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("per_month", $discAmount)):echo $discAmount['per_month'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="bimonthly" onclick="customShow('bimonthly', 'bimonthlyDiv')" value="Bimonthly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Bimonthly", $chargeType)):echo"checked";endif;endif;?>/> Bimonthly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Bimonthly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="bimonthlyDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="bimonthlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Bimonthly", $chargeAmount)):echo $chargeAmount['Bimonthly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Bimonthly", $discAmount)):echo $discAmount['Bimonthly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="quarterly" onclick="customShow('quarterly', 'quarterlyDiv')" value="Quarterly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Quarterly", $chargeType)):echo"checked";endif;endif;?>/> Quarterly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Quarterly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="quarterlyDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="quarterlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Quarterly", $chargeAmount)):echo $chargeAmount['Quarterly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Quarterly", $discAmount)):echo $discAmount['Quarterly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="halfYearly" onclick="customShow('halfYearly', 'halfYearlyDiv')" value="half_yearly" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("half_yearly", $chargeType)):echo"checked";endif;endif;?>/> Half Yearly</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("half_yearly", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="halfYearlyDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="halfYearlyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("half_yearly", $chargeAmount)):echo $chargeAmount['half_yearly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("half_yearly", $discAmount)):echo $discAmount['half_yearly'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="annually" onclick="customShow('annually', 'annuallyDiv')" value="Annually" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("Annually", $chargeType)):echo"checked";endif;endif;?>/> Annually</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("Annually", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="annuallyDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="annuallyText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="&#8377; 00.00" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Annually", $chargeAmount)):echo $chargeAmount['Annually'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("Annually", $discAmount)):echo $discAmount['Annually'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-top-10">
                                        <div class="col-md-4"><input type="checkbox" name="chargeType[]" id="freeMember" onclick="customShow('freeMember', 'freeMemberDiv')" value="freeMember" <?php if(isset($chargeType) && !empty($chargeType)):if(in_array("freeMember", $chargeType)):echo"checked";endif;endif;?>/> Free with Gym membership</div>
                                        <div class="col-md-8 <?php if(isset($chargeType) && !empty($chargeType)):if(!in_array("freeMember", $chargeType)):echo"customHide";endif;else: echo 'customHide';endif;?>" id="freeMemberDiv">
                                            <div class="col-md-6">
                                                <input maxlength="50" id="freeMemberText" tabindex="1" class="form-control" type="text" name="chargeAmount[]" placeholder="Provide specific details" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("freeMember", $chargeAmount)):echo $chargeAmount['freeMember'];endif;endif;?>" >
                                            </div>
                                            <div class="col-md-6">
                                                <input maxlength="50" id="discMonthText" tabindex="1" class="form-control" type="text" name="discAmount[]" placeholder="%" value="<?php if(isset($chargeType) && !empty($chargeType)):if(array_key_exists("freeMember", $discAmount)):echo $discAmount['freeMember'];endif;endif;?>" onkeypress="return isNumberKey(event,'chargesErr')">
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
                               <!-- <button class="btn btn-primary" type="submit" onclick="return timeSlot()" name="submit" value="editFeature">Save changes</button>
                                <button class="btn btn-info" type="reset">Reset</button>-->
                            </div>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
