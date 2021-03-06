<script src="<?php echo base_url(); ?>inspinia/js/plugins/clockpicker/clockpicker.js"></script>
<script src="<?php echo base_url();?>inspinia/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>inspinia/bootstrap-touchspin/bootstrap.touchspin.css" rel="stylesheet">

<?php  if($this->uri->segment(1) == "partners" ){ 
    if($this->uri->segment(2) == "signUp" || $this->uri->segment(2) == "editProfile" ){ ?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript">
    
//    Google Address Api
    var directionsDisplay; 
    var directionsService = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function() {
        new google.maps.places.SearchBox(document.getElementById('centerAddress'));
        directionsDisplay = new google.maps.DirectionsRenderer({'draggable': true});
    });
</script>
<?php } } ?>

<script type="text/javascript">   
var count = 0;
function addMoreVideo() {
    $("#moreVideos").append('  <div class="col-lg-6"><div class="form-group"><label>Video *</label><input name="video[]" type="text" class="form-control" ></div></div>');
    var contentH  = $('.content').height();
    var colHeight = $("#moreVideos .col-lg-6").height();

    if(count % 2)
    {
        var contentH  = $('.content').height(contentH);
    }
    else
    {
        var contentH  = $('.content').height(contentH+colHeight);
    }
    count++;
}

function checkCheck(){
    if($("#checkDaysTime").find("input[type=checkbox]").is(":checked")){
        return true;
    }else{
        $("#checkDays").html("Please select at least one");
        return false;
    }
}

function timeSplit(time){
    var splitTime = time.split(":");
    var hour = parseInt(splitTime[0]);
    var min = parseInt(splitTime[1]);
    hour = hour*60;
    var totalTime = hour + min;
    return totalTime;
    
}

function timeSlot() {
    
    var flag,flag1=0,flag2=0,flag3=0,flag4=0,flag5=0,flag6=0,flag7=0,flag8=0,flag9=0,flag10=0,count=0;
    
    if($("#check1").prop("checked") == true){
        var day1 = $("#day1").val();
        var day2 = $("#day2").val();
        var min1 = timeSplit(day1);
        var min2 = timeSplit(day2);
        count++;
        if(min1 < min2){ flag1 = 1; }else{ flag1 = 0; }
    }
    if($("#check2").prop("checked") == true){
        var day3 = $("#day3").val();
        var day4 = $("#day4").val();
        var min3 = timeSplit(day3);
        var min4 = timeSplit(day4);
        count++;
        if(min3 < min4){ flag2 = 1; }else{ flag2 = 0; }
    }
    if($("#check3").prop("checked") == true){
        var day5 = $("#day5").val();
        var day6 = $("#day6").val();
        var min5 = timeSplit(day5);
        var min6 = timeSplit(day6);
        count++;
        if(min5 < min6){ flag3 = 1; }else{ flag3 = 0; }
    }
    if($("#check4").prop("checked") == true){
        var day7 = $("#day7").val();
        var day8 = $("#day8").val();
        var min7 = timeSplit(day7);
        var min8 = timeSplit(day8);
        count++;
        if(min7 < min8){ flag4 = 1; }else{ flag4 = 0; }
    }
    if($("#check5").prop("checked") == true){
        var day9 = $("#day9").val();
        var day10 = $("#day10").val();
        var min9 = timeSplit(day9);
        var min10 = timeSplit(day10);
        count++;
        if(min9 < min10){ flag5 = 1; }else{ flag5 = 0; }
    }
    if($("#check6").prop("checked") == true){
        var day11 = $("#day11").val();
        var day12 = $("#day12").val();
        var min11 = timeSplit(day11);
        var min12 = timeSplit(day12);
        count++;
        if(min11 < min12){ flag6 = 1; }else{ flag6 = 0; }
    }
    if($("#check7").prop("checked") == true){
        var day13 = $("#day13").val();
        var day14 = $("#day14").val();
        var min13 = timeSplit(day13);
        var min14 = timeSplit(day14);
        count++;
        if(min13 < min14){ flag7 = 1; }else{ flag7 = 0; }
    }
    if($("#check8").prop("checked") == true){
        var lunch1 = $("#lunch1").val();
        var lunch2 = $("#lunch2").val();
        var min15 = timeSplit(lunch1);
        var min16 = timeSplit(lunch2);
        count++;
        if(min15 < min16){ flag8 = 1; }else{ flag8 = 0; }
    }
    if($("#check9").prop("checked") == true){
        var shift1 = $("#shift1").val();
        var shift2 = $("#shift2").val();
        var min17 = timeSplit(shift1);
        var min18 = timeSplit(shift2);
        count++;
        if(min17 < min18){ flag9 = 1; }else{ flag9 = 0; }
    }
    if($("#check10").prop("checked") == true){
        var shift3 = $("#shift3").val();
        var shift4 = $("#shift4").val();
        var min19 = timeSplit(shift3);
        var min20 = timeSplit(shift4);
        count++;
        if(min19 < min20){ flag10 = 1; }else{ flag10 = 0; }
    }
    flag = flag1+flag2+flag3+flag4+flag5+flag6+flag7+flag8+flag9+flag10;

    if(count == flag){ 
        $("#checkDays").html(""); 
        return true; 
    }else{ 
        $("#checkDays").html("Please enter valid time duration"); 
        return false; 
    }
    
}


$(document).ready(function () {
    $("#wizard").steps();
    $("#form").steps({
        bodyTag: "fieldset",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Always allow going backward even if the current step contains invalid fields!
            if (currentIndex > newIndex)
            {
                return true;
            }

            // Forbid suppressing "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age").val()) < 18)
            {
                return false;
            }

            var form = $(this);

            // Clean up if user went backward before
            if (currentIndex < newIndex)
            {
                // To remove error styles
                $(".body:eq(" + newIndex + ") label.error", form).remove();
                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
            }

            // Disable validation on fields that are disabled or hidden.
            form.validate().settings.ignore = ":disabled,:hidden";

            // Start validation; Prevent going forward if false
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Suppress (skip) "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age").val()) >= 18)
            {
                $(this).steps("next");
            }

            // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                $(this).steps("previous");
            }
        },

        onCanceled: function (event) {
            window.location.assign('<?php echo site_url('partners'); ?>');
        },

        onFinishing: function (event, currentIndex)
        {

            var form = $(this);
            form.validate().settings.ignore = ":disabled";
            // Start validation; Prevent form submission if false
            if(form.valid() == true){
                if(checkCheck() == true){
                    if(checkText('centerName','err_centerName') == true){
                        if(checkEmail('centerEmail','err_centerEmail') == true){
                            if(checkPhone('centerContact','centreContactErr') == true){
                                if(checkPassword('password','confirm') == true){
                                    if(checkConfirm('password','confirm') == true){
                                        if(checkText('contactPersonName','err_coperson') == true){
                                            if(checkPhone('contactMobile','mobileErr') == true){
                                                if(checkEmail('contactEmail','err_contactEmail') == true){
//                                                    if(checkEmailExist('centerEmail','err_centerEmail') == true){
//                                                        if(checkEmailExist('contactEmail','err_contactEmail') == true){
                                                            return timeSlot();
//                                                        }
//                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }else{
                return form.valid();
            }
            // Disable validation on fields that are disabled.
            // At this point it's recommended to do an overall check (mean ignoring only disabled fields)




        },
        onFinished: function (event, currentIndex)
        {

            bootbox.alert({closeButton: false,message:"Hey thanks for providing these details.A verification link has been emailed to you.Kindly verify and then you are all set to login!",callback:function() {form.submit();}});
            $('.modal-footer').addClass('text-center');
            $('.modal-footer [data-bb-handler="ok"]').html('Okay');
            var form = $(this);
            // Submit form input

        }
    }).validate({
        errorPlacement: function (error, element)
        {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    
    $("#formEdit").steps({
        bodyTag: "fieldset",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Always allow going backward even if the current step contains invalid fields!
            if (currentIndex > newIndex)
            {
                return true;
            }

            // Forbid suppressing "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age").val()) < 18)
            {
                return false;
            }

            var form = $(this);

            // Clean up if user went backward before
            if (currentIndex < newIndex)
            {
                // To remove error styles
                $(".body:eq(" + newIndex + ") label.error", form).remove();
                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
            }

            // Disable validation on fields that are disabled or hidden.
            form.validate().settings.ignore = ":disabled,:hidden";

            // Start validation; Prevent going forward if false
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Suppress (skip) "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age").val()) >= 18)
            {
                $(this).steps("next");
            }

            // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                $(this).steps("previous");
            }
        },

        onCanceled: function (event) {
            window.location.assign('<?php echo site_url('partners/vendorServices'); ?>');
        },

        onFinishing: function (event, currentIndex)
        {

            var form = $(this);
            form.validate().settings.ignore = ":disabled";

            // Start validation; Prevent form submission if false
            if(form.valid() == true){
                if(checkCheck() == true){
                    if(checkText('centerName','err_centerName') == true){
                        if(checkEmail('centerEmail','err_centerEmail') == true){
                            if(checkPhone('centerContact','centreContactErr')){
                                if(checkText('contactPersonName','err_coperson')){
                                    if(checkPhone('contactMobile','mobileErr')){
                                        if(checkEmail('contactEmail','err_contactEmail')){
                                            return timeSlot();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }else{
                return form.valid();
            }
            // Disable validation on fields that are disabled.
            // At this point it's recommended to do an overall check (mean ignoring only disabled fields)




        },
        onFinished: function (event, currentIndex)
        {

            bootbox.alert({closeButton: false,message:"Hey thanks for providing these details.A verification link has been emailed to you.Kindly verify and then you are all set to login!",callback:function() {form.submit();}});
            $('.modal-footer').addClass('text-center');
            $('.modal-footer [data-bb-handler="ok"]').html('Okay');
            var form = $(this);
            // Submit form input

        }
    }).validate({
        errorPlacement: function (error, element)
        {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });



//        $('.clockpicker').clockpicker();

});
    
//  Custom Show Hide Function
function customShowDays(checkId,day1,day2){

    if($("#"+checkId).prop("checked") == true){
        $('#'+day1).prop("disabled", false);
        $('#'+day2).prop("disabled", false);
        $("#"+day1).prop('required',true);
        $("#"+day2).prop('required',true);
    }else{
        $('#'+day1).prop("disabled", true);
        $('#'+day2).prop("disabled", true);
        $('#'+day1).val('');
        $('#'+day2).val('');
        $("#"+day1).prop('required',false);
        $("#"+day2).prop('required',false);
    }
}

function customTimeSlot(checkId,day1,day2){
        
        if($("#"+checkId).prop("checked") == true){
            $('#'+day1).show();
            $('#'+day2).show();
            $("#"+day1).prop('required',true);
            $("#"+day2).prop('required',true);
        }else{
            $('#'+day1).hide();
            $('#'+day2).hide();
            $('#'+day1).val('');
            $('#'+day2).val('');
            $("#"+day1).prop('required',false);
            $("#"+day2).prop('required',false);
        }
    }
    
function showWomenTime(selectVal,divId){
        if(selectVal == 1){
            $("#"+divId).show(function(){
                $("#"+divId).find("input[type=text]").prop('required',true);
                $("#"+divId).find("input[type=text]").prop('disabled',false);
                $("#"+divId).find("input[type=checkbox]").prop('checked',true);
                var contentH  = $('.content').height();
                var contentH  = $('.content').height(contentH+78);
            });
        }else{
             $("#"+divId).hide(function(){
                $("#"+divId).find("input[type=text]").prop('required',false);
                $("#"+divId).find("input[type=text]").prop('disabled',true);
                $("#"+divId).find("input[type=checkbox]").prop('checked',false);
                var contentH  = $('.content').height();
                var contentH  = $('.content').height(contentH-78);
            });
            
        }
    }

//   Fill Monday Value to all days
function allDaysHour(checkId,valId1,valId2){
        
        if($("#"+checkId).prop("checked") == true){
            var openHour = $("#"+valId1).val();
            var closeHour = $("#"+valId2).val();

            if(openHour == '' && closeHour == ''){
                alert("Monday Time is Required");
                $("#"+checkId).prop('checked', false);
            }else{
                var i;
                for(i=2;i<8;i++){
                    $("#check"+i).prop('checked', true);
                }
                var k;
                for(k=3;k<15;k++){
                    if(k%2==0){
                        $("#day"+k).prop("disabled", false);
                        $("#day"+k).val(closeHour);
                    }else{
                        $("#day"+k).prop("disabled", false);
                        $("#day"+k).val(openHour);
                    }
                }
            }
        }else{
            var j;
            for(j=2;j<8;j++){
                $("#check"+j).prop('checked', false);
            }
            var l;
            for(l=3;l<15;l++){
                if(l%2==0){
                    $("#day"+l).prop("disabled", true);
                    $("#day"+l).val('');
                }else{
                    $("#day"+l).prop("disabled", true);
                    $("#day"+l).val('');
                }
            }
        }
    }

//  Validate Image 
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Sorry,   '" + sFileName + "'   is invalid, allowed extensions are : -   " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
    
//  Validate File 
var _validFileDocExtensions = [".pdf", ".doc"];    
function ValidateSingleInputFile(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileDocExtensions.length; j++) {
                var sCurExtension = _validFileDocExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                alert("Sorry,   '" + sFileName + "'   is invalid, allowed extensions are : -   " + _validFileDocExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
   
</script>

<script type="text/javascript">
    function showHideFiled(id,checked){
        if (checked == 1) {
         $("#"+id).css("display", "block");
      }else if (checked == 0) {
        $("#"+id).css("display", "none");
      };
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.timepicker').timepicker({
            defaultTime: false,
            showMeridian:false
        });
        handleBootstrapSelect();
    });
</script>