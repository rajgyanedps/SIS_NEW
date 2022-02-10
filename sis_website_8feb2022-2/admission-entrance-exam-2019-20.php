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
	$amt='7500';
//echo "INSERT INTO entrance_exam(student_name,class_name,dob,email,mobile_no,exam_center)VALUES('".addslashes($uname)."','".$classname."','".$dob."','".$email."','".$pno."','".$exam_center."')";
	
$qry = "INSERT INTO entrance_exam(student_name,class_name,dob,email,mobile_no,exam_center)VALUES('".addslashes($uname)."','".$classname."','".$dob."','".$email."','".$pno."','".$exam_center."')";

$res = mysql_query($qry) or die(mysql_error());

$date=date("Y-m-d H:i:s");
if($res){
	//$last_id=mysql_insert_id();
	$studentid = mysql_insert_id();

 $code = "SELAQUI".date('Ymd').$studentid.rand(10,899);
 $QueryStatementForOrder= "insert into payment set
 ordercode='".$code."',
memberid='".$studentid."',
paymentstatus='pending',
Payamount='".$amt."',
regidate ='".$date."'";

                        //echo  $QueryStatementForOrder;die;
 $RegistrationQuery = mysql_query($QueryStatementForOrder);
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

<meta name="description" content="Admission Entrance Exam 2019-20">
<meta name="keywords" content="">
<meta name="robots"content="index,follow">
<meta name="googlebot"content="INDEX,FOLLOW"/>
<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
<meta name="msnbot" content="INDEX,FOLLOW"/>


<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>

<title>Admission Entrance Exam 2019-20</title>

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
alert("Please Enter  Username");
document.form1.uname.focus();
return false;
}
if (document.form1.classname.value=="")
{
alert("Please Class");
document.form1.classname.focus();
return false;
}

if (document.form1.dob.value=="")
{
alert("Please Date Of Birth");
document.form1.dob.focus();
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

		
if (document.form1.exam_center.value=="")
{
alert("Please Enter Seeking Area");
document.form1.exam_center.focus();
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
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">		<img src="assets/images/sis_logo_test_w.png" alt="Sela Qui logo">                
				<p class="wow fadeInDown" data-wow-delay="0.2s">
				Thanks for filling your details
				</p>				
				<p class="wow fadeInDown" data-wow-delay="0.2s">To Register for the entrance exam please pay</p>
			   <h2 class="subscribe-title">7500/.</h2>	
				<p class="wow fadeInDown" data-wow-delay="0.2s">After payment admission office will get in touch with you with syllabus and venue. </p>				
				<form class="text-center" action="pay_fee.php" method="post"> 
<!--<?//php echo $exam_center ?><?//php echo $classname?>-->
				<input type="hidden" name="lastid" value="<?php echo $studentid?>">
 <input type="hidden" name="date" value="<?php echo $date?>">
<input type="hidden" name="ordercodeforreg" value="<?php echo $code?>">
<input type="hidden" name="amounts" value="<?php echo $amt?>"> <!--Pass Customer Full Name -->
<input type="hidden" name="billing_cust_name" value="<?php echo $uname?>"> <!--Pass Customer Full Name -->
<input type="hidden" name="billing_cust_address" value=""><!--Pass Customer Full Address-->
<input type="hidden" name="billing_cust_country" value=""> <!--Pass Customer Country -->
<input type="hidden" name="billing_cust_state" value=""><!--Pass Customer State -->
<input type="hidden" name="billing_cust_city" value=""> <!--Pass Customer City -->
<input type="hidden" name="billing_zip" value=""> <!--Pass Customer Zip Code-->
<input type="hidden" name="billing_cust_tel" value="<?php echo $pno?>"> <!--Pass Customer Phone No-->
<input type="hidden" name="billing_cust_email" value="<?php echo $email?>"> <!--Pass Customer Email address-->
<input type="hidden" name="delivery_cust_name" value=""> <!--Pass Same or other other detail fill by customer-->
<input type="hidden" name="delivery_cust_address" value="">
<input type="hidden" name="delivery_cust_country" value="">
<input type="hidden" name="delivery_cust_state" value="">
<input type="hidden" name="delivery_cust_tel" value="">
<input type="hidden" name="delivery_cust_notes" value="">
 <input type="hidden" name="Merchant_Param" value="">
<input type="hidden" name="billing_zip_code" value="">
<input type="hidden" name="delivery_cust_city" value="">
<input type="hidden" name="delivery_zip_code" value="">
				
				<input type="submit" class="btn btn-common" name="Pay Now" value="Pay Now">		
                <!--<a href="#" class="btn btn-common" target="_blank">Pay Now </a>-->
                
               
              </form>
			  
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
		<section id="allcontent" class="countdown-timer section-padding">
			<div class="container">
				<div class="row">
				
					<div class="col-xl-9 text-justify">
						<div class="section-title-header text-center">
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Admission Entrance Exam 2019-20</h1>
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
								<div class="form-wrapper">								
									<div class="row">
										<div class="col-lg-12">
											<h2>Please fill your details</h2>
										</div>
										<div class="col-lg-6 form-line">
											<div class="form-group">
												<label>Name of the student<strong class="text-red">*</strong></label>
												<input type="text" name="uname" id="uname" class="textFild form-control" />
											</div> 
										</div>
										<div class="col-lg-6 form-line">
											<div class="form-group">
												<label>Class applied for<strong class="text-red">*</strong></label>
												<select class="form-control"  name="classname" id="classname">
													<option value="">-- SELECT --</option>
													
													<option value="V" <?php if($classname=="V"){?>selected="selected"<?php } ?>>V</option>
													<option value="VI" <?php if($classname=="VI"){?>selected="selected"<?php } ?>>VI</option>
													<option value="VII" <?php if($classname=="VII"){?>selected="selected"<?php } ?>>VII</option>
													<option value="VIII" <?php if($classname=="VIII"){?>selected="selected"<?php } ?>>VIII</option>
													<option value="IX" <?php if($classname=="IX"){?>selected="selected"<?php } ?>>IX</option>
													<option value="X" <?php if($classname=="X"){?>selected="selected"<?php } ?>>X</option>
													<option value="XI Pure Science" <?php if($classname=="XI Pure Science"){?>selected="selected"<?php } ?>>XI Pure Science</option>
													<option value="XI Commerce" <?php if($classname=="XI Commerce"){?>selected="selected"<?php } ?>>XI &shy; Commerce</option>
													<option value="XI Humanities" <?php if($classname=="XI Humanities"){?>selected="selected"<?php } ?>>XI &shy; Humanities</option>
													<option value="XI Science / Engineering" <?php if($classname=="XI Science / Engineering"){?>selected="selected"<?php } ?>>XI Science / Engineering</option>
													<option value="XI Science / Medical" <?php if($classname=="XI Science / Medical"){?>selected="selected"<?php } ?>>XI &shy; Science / Medical</option>
												</select>
											</div> 
										</div>
										<div class="col-lg-6 form-line">
											<div class="form-group">
												<label>Date of Birth<strong class="text-red">*</strong></label>
												<input class="form-control" type="date" id="dob" name="dob" placeholder="Date of Birth" value=""/>
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
												<label>Exam center</label><strong class="text-red">*</strong>
												<select name="exam_center" id="exam_center" class="form-control">
					                               <option value="">--Select--</option>
					                               <option value="Dehradun">Dehradun</option>
					                               <option value="Delhi">Delhi</option>
					                               <option value="Lucknow">Lucknow</option>
					                               <option value="Patna">Patna</option>
					                               <option value="Guwahati">Guwahati</option>
												   <option value="Mumbai">Mumbai</option>
					                            </select>
											</div> 
										</div>										
										<div class="col-lg-6 form-line">
                                				<div class="form-group text-right">
                                					<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
                                					Refesh Captcha <a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>
                                				</div> 
                                			</div>
                                			<div class="col-lg-6 form-line">
                                				<div class="form-group">
                                					<input name="validator" id="validator" placeholder="Enter Captcha" type="text" value="" onClick="this.value='';" class="form-control" />
                                				</div>
                                			</div>  
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
<? if($message!=''){?>

<? echo '<script type="text/javascript">$("#ABC").click();</script>';} ?>
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