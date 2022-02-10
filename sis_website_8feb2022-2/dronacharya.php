<? 
error_reporting(0);
session_start();
//include("connection.php");
include('include/db.php');
@extract($_GET);
@extract($_POST);

//print_r($_SESSION);
//die();

$message="";
if(isset($button)){
if (!empty($_POST['validator']) && strtoupper($_POST['validator']) == strtoupper($_SESSION['6_letters_code'])) {
if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
{ 
$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} 
elseif(!empty($_SERVER['REMOTE_ADDR'])) 
{ 
$ip = $_SERVER['REMOTE_ADDR']; 
} 
else 
{ 
$ip="Not Set"; 
} 

$qry = "INSERT INTO event_registration(name,email,mobile_no,event_id,location,date,seat,utm_source,utm_medium,utm_campaign)VALUES('".addslashes($uname)."','".$email."','".$pno."','".$event_id."','".$event_city."','".$event_date."','".$no_seat."','".mysql_real_escape_string($_REQUEST['utm_source'])."','".mysql_real_escape_string($_REQUEST['utm_medium'])."','".mysql_real_escape_string($_REQUEST['utm_campaign'])."')";

$res = mysql_query($qry) or die(mysql_error());

$date=date("Y-m-d H:i:s");
if($res){
     $loc_arr=mysql_query("select * from tbl_event where event_id='1' and id='".$event_city."'");
while($loc=mysql_fetch_array($loc_arr))
{
$event_loc = $loc['city'].'-'.$loc['venue'];
} 
//$last_id=mysql_insert_id();
$studentid = mysql_insert_id();
 $subject = 'Thank you for Registering at Ek Aur Dronacharya Event, organized by SelaQui International School, Dehradun.';
         $txt = '
       <html>
    		    <body>

			     
			       <table>
                              
			        <table cellspacing="0" width="600" cellpadding="0" border="0" align="center" style="border:1px solid #3e3e3e">
                               

<tr>
				          <td><table cellspacing="0" width="550" cellpadding="0" border="0" align="center" style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; color:#333; line-height:20px;">
                                           <tr>
                                             <td align="left">&nbsp;</td>
                                           </tr>
                                           <tr>
                                             <td align="left"><strong>Dear '.ucwords($uname).',</strong></td>
                                           </tr>
                                           <tr>
                                             <td align="left">&nbsp;</td>
                                           </tr>
                                           <tr>
                                             <td align="left">Thank you for registering at Ek Aur Dronacharya Event at '.$event_loc .'! </td>
                                           </tr>
                                           <tr>
                                             <td align="left">&nbsp;</td>
                                           </tr>
										    <tr>
                                             <td align="left">We appreciate your interest in the event. Please show this mail at the Reception Desk at the venue.  </td>
                                           </tr>
                                           <tr>
                                             <td align="left">&nbsp;</td>
                                           </tr>
                                           <tr>
<td align="left"><strong>The details of the Event are as follows:</strong></td>                                
</tr>
                            <tr>
                                             <td align="left">&nbsp;</td>
                            </tr>
                            <tr>
<td align="left"><strong>Venue is :</strong> '.$event_loc.'</td>                                
</tr>
                         <tr>
<td align="left"><strong>Date and Time :</strong> '.$event_date.'</td>                                
</tr>
                         <tr>
<td align="left"><strong>No of Seats reserve :</strong>  '.$no_seat.'</td>                                
</tr>
                         <tr>
<td align="left"><strong>Mobile no :</strong>  '.$pno.'</td>                                
</tr>
                       
                      <tr>
					  <td>&nbsp;</td>
					  </tr>
					   <tr>
                         <td align="left">
For more information <strong>call us on 91- 8006020226.</strong>
						 <br>
						 You can also visit our website https://selaqui.org  
						 </td>
                       </tr>
					   <tr>
                                             <td align="left">&nbsp;</td>
                                           </tr>
										   
                       <tr>
                         <td align="left">&nbsp;</td>
                       </tr>
                       <tr>
<td align="left"> <strong>Warm Regards,<br/>

SelaQui International School </strong></td>                                
</tr>
                                          </table></td>
				        </tr>
				       <tr><td>&nbsp;</td></tr>
				      <tr>
				          <td>&nbsp;</td>
				     </tr>
			     </table>

			  </body>
			</html>';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: SelaQui International School<admissions@selaqui.org>". "\r\n";
		$headers .= "Return-Path: <noreply@selaqui.org>". "";

       $mail= mail($email,$subject,$txt,$headers);
        
       

$message="Successfully saved";
}
?>

<?php
unset($_SESSION['6_letters_code']);} else { ?>
<script type="text/javascript">
alert("Please Enter a valid Code");
</script>
<?php
}
}?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="canonical" href="https://www.selaqui.org/selaqui-school-contactus.php" />



<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-4634742-2']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Event: Ek Aur Dronacharya">
<meta name="keywords" content="">
<meta name="robots"content="index,follow">
<meta name="googlebot"content="INDEX,FOLLOW"/>
<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
<meta name="msnbot" content="INDEX,FOLLOW"/>


<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>

<title>Event: Ek Aur Dronacharya</title>

<?php include('include/class.php'); ?>

<!-- Global site tag (gtag.js) - AdWords: 1040837567 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1040837567"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-1040837567');
</script>

<script language="javascript">

function check()
{
if (document.form1.uname.value=="")
{
alert("Please Enter  Name");
document.form1.uname.focus();
return false;
}

var intAtPos = document.form1.email.value.indexOf("@");
var intDotPos = document.form1.email.value.indexOf(".");
var intMailLen = document.form1.email.value.length;
if(intMailLen==0)
{
alert("Please Enter E-mail Address")
document.form1.email.focus();
return false;
}
if((intDotPos >= intMailLen-2) || (intAtPos <= 0) || (intDotPos <= 0))
{
alert("Not a valid Email");
document.form1.email.focus();
return false;
}


if (document.form1.pno.value=="")
{
alert("Please Enter Telephone Number");
document.form1.pno.focus();
return false;
}else{

var n=$('#pno').val();
if (n.length < 10 || n.length > 12) {
alert("Mobile No. is not valid, Please Enter Correct Digits ");
$('#pno').focus();
return false;
}

}


if (document.form1.event_city.value=="")
{
alert("Please Select Event Venue");
document.form1.event_city.focus();
return false;
}



if (document.form1.validator.value=="")
{
alert("Please Insert code display in image.");
document.form1.validator.focus();
return false;
}
return true;
}


</script>

<script language="JavaScript" type="text/javascript">
function refreshCaptcha()
{
var img = document.images['captchaimg'];
img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}



</script>




</head>

<body id="other_page">

<div id="light" class="pop">
<div class="overlay">
</div>
<div class="loader_mail">
<div class="loaderTC_mail">
<div class="content_mail">
<div class="container container1 midcon1">
<section id="admissionopen">
<div id="subscribe">
<div class="container-fluid">
<div class="row justify-content-md-center">
<div class="col-lg-12">
<div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">        <img src="assets/images/sis_logo_test_w.png" alt="Sela Qui logo">                
<p class="wow fadeInDown" data-wow-delay="0.2s">
Thanks for filling your details
</p>				
<p class="wow fadeInDown" data-wow-delay="0.2s">To Register for the entrance exam please pay</p>
<h2 class="subscribe-title">9000/.</h2>
<p class="wow fadeInDown" data-wow-delay="0.2s">After payment admission office will get in touch with you with syllabus and venue. </p>				


</div>
</div>
</div>
</div>
</div>
</section>


</div>
<div>
<a href="javascript:void(0)" class="close" onclick="return ClosePopUP();">X</a>
</div>
</div>
</div>
</div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5N3WMT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
<!-- Navbar Start -->
<?php include('include/menu.php'); ?>
<!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->
<section id="allcontent" class="countdown-timer section-padding" style="background:url(assets/images/dronacharya.jpg) top no-repeat fixed !important; background-size:cover;">
<div class="container">
<div class="row">

<div class="col-xl-9 text-justify">
<div class="section-title-header text-center">
<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event: Ek Aur Dronacharya</h1>
</div>
<!--<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
<div class="team-img">
<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
</div>
</div>-->
<div style="color: green;" align="center" ><? //echo $message;?><a href="#" id="ABC" onclick="OpenPopUP();"></a></div>
<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">




<form name="form1" id="form1" method="post" action="" onSubmit="return check();">
<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
<div class="form-wrapper" style="opacity: 0.92;">								
<div class="row">
<div class="col-lg-12">
<h2>Please fill your details</h2>
</div>
<? if($message!=''){?>
<div class="col-lg-12">
<h2 style="text-align:center; color:red; font-size:24px;">Successfully Register</h2>
</div>
 <? } ?>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Name<strong class="text-red">*</strong></label>
<input type="text" name="uname" id="uname" class="textFild form-control" />
</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>E-mail ID</label><strong class="text-red">*</strong>
<input type="text" name="email" id="email" class="textFild form-control" />
</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Mobile<strong class="text-red">*</strong></label>
<input type="text" name="pno" id="pno" class="textFild form-control" />
</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Event Name

</label><strong class="text-red">*</strong>
<input type="text" name="event_name" id="event_name" class="textFild form-control" value="Ek Aur Dronacharya" readonly />
<input type="hidden" name="event_id" id="event_id"  value="1" />

</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Event Venue<strong class="text-red">*</strong></label>
<select name="event_city" id="event_city" class="form-control">
<option value="">--Select--</option>
<?php $loc_arr=mysql_query("select * from tbl_event where event_id='1'");
while($loc=mysql_fetch_array($loc_arr))
{?>
<option value="<?=$loc['id']; ?>"><?=$loc['city'].' - '.$loc['venue']; ?></option>
<? } ?>

</select>
</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Date and Time</label><strong class="text-red">*</strong>
<input type="text" name="event_date" id="event_date" class="textFild form-control" value="" readonly/>
</div> 
</div>										
<div class="col-lg-6 form-line">
<div class="form-group">
<label>Seat Availability</label><strong class="text-red">*</strong>
<input type="text" name="seat_available" id="seat_available" class="textFild form-control" value="" readonly/>
</div> 
</div>
<div class="col-lg-6 form-line">
<div class="form-group">
<label>How many passes required</label><strong class="text-red">*</strong>
<select class="form-control" name="no_seat" id="no_seat" required>
<option value="">--Select--</option>
<? for($i=1;$i<=20;$i++){?>
<option value="<?=$i;?>"><?=$i;?></option>
<? } ?>
</select>
</div> 
</div>											
<div class="col-lg-12 form-line">
<div class="row">
<div class="col-lg-6">
<div class="form-group text-right">
<label class="btn-block">&nbsp;</label>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
<a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>
</div> 
</div>
<div class="col-lg-6">
<div class="form-group">
<label>&nbsp;</label>
<input name="validator" id="validator" placeholder="Enter Captcha" type="text" value="" onClick="this.value='';" class="form-control" />
</div>
</div>
</div>                                				
</div>  
<div style="clear:both;"></div>
<div class="col-lg-6">                      
<div class="form-submit">						
<button type="submit" class="btn btn-common" name="button" id="button" ><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
</div>
</div>
<div class="col-lg-6">                      
<div class="form-submit">						
<button type="reset" class="btn btn-common" name="button2" id="button2"><i class="fa fa-refresh" aria-hidden="true"></i></i>  Reset</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>


<div class="col-xl-3">
<div class="row">
<div class="col-xl-12 col-lg-4 col-md-12 col-sm-12 col-12">
<?php include('include/news_glance.php'); ?>
</div>		  

<div class="col-xl-12 col-lg-4 col-md-6 col-sm-6 col-12">
<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
<div class="team-img">
<div id="admissionopen" class="subscribe-inner">
<?php include('include/admission_open_banner.php'); ?>
</div>
</div>
</div>
</div>	  

<div class="col-xl-12 col-lg-4 col-md-6 col-sm-6 col-12">
<?php include('include/E-Brochure.php'); ?>
</div>

</div>
</div>


</div>
</div>
</section>
<!-- Footer Section Start -->
<?php include('include/footer.php'); ?>	
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
<script src="assets/js/jquery.newsTicker.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/menu_jquery.js"></script>
<script src="assets/js/upload/uploadcontrol.js"></script>
<!--<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>-->
<script src="assets/js/jquery.validate.js"></script>
<script>
$(document).ready(function(){ 
$(".slide-toggle").click(function(){
$(".box").animate({
width: "toggle"
});
});
});
</script>
<script>
$(document).ready(function() { 	
$("#event_city").change( 
function(){
get_event_data(); 
});
function get_event_data(){	
var cid = $('#event_city').val();
 
$.post("event_data.php", { city_id: cid },

function(data){          
if(data != ""){    
var x=JSON.parse(data);

     var evenue = x.venue;
       var edate = x.event_date;
       var eseat = x.no_seat;
                  // var event_date = data[0]['event_date'];

 $("#event_date").val(edate); 
 $("#seat_available").val(eseat); 
           
}
});
}
});
</script>
<? //if($message!=''){?>

<? //echo '<script type="text/javascript">$("#ABC").click();</script>';} ?>
<script src="assets/js/jquery.logoslider.js"></script>
<script>
$(function() {
$('.js-imageslider').imageslider({
slideItems: '.my-slider-item',
slideContainer: '.my-slider-list',				
slideDistance: 5,
resizable: true,
pause: true
});
});
</script>
</body>
<script> 
$(window).load(function(){
$('code.language-javascript').mCustomScrollbar();
});
var nt_example1 = $('#nt-example1').newsTicker({
row_height: 60,
max_rows: 4,
duration: 4000,
prevButton: $('#nt-example1-prev'),
nextButton: $('#nt-example1-next')
});
</script>
</html>