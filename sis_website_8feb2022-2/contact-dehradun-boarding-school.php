<?php
//echo phpinfo();
session_set_cookie_params(0);
session_start();
//include("connection.php");
include('include/db.php');
@extract($_GET);
@extract($_POST);
date_default_timezone_set('Asia/Kolkata');
function validate_mobile($mobile)
{
	return preg_match('/^[0-9]{10}+$/', $mobile);
}

if (isset($uname))
{
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
    {
           $secret = '6LcP2qwZAAAAAKXWo5EVzbCT7us525FEO8H4brrE';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
    
    
  	if ($responseData->success) {
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
				$ip = $_SERVER['REMOTE_ADDR'];
		} else {
				$ip = "Not Set";
		}
		$check_mobile_no = validate_mobile($pno);
		if ($check_mobile_no) {
			$contact_qry = "INSERT INTO contact_us(name,email,contact,seeking,contact_date,ip_address)VALUES('" . addslashes($uname) . "','" . addslashes($email) . "','" . addslashes($pno) . "','$loginas',NOW(),'$ip')";
			$contact_res = mysql_query($contact_qry) or die(mysql_error());
			//added data in student..
			$DATE       = date('Y-m-d H:i:s');
			$project_id = '0';
			$emp_id     = '100100';
			$stud_qry   = "INSERT INTO student(project_id,stud_name,mobno,email,page_group,contact_date,emp_id,joined,course,ip_address) VALUES
('" . $project_id . "','" . addslashes($uname) . "','" . addslashes($pno) . "','" . addslashes($email) . "','SELAQUI CONTACTUS','" . $DATE . "','100100','" . $DATE . "','" . $logina . "','" . $ip . "')";
			$res_insert = mysql_query($stud_qry) or die(mysql_error());
?>
		<script language="javascript">
			//window.location="selaqui-school-contactus.php?msg=sc";
			window.location="thankyou.php";
		</script>
<?php
			//unset($_SESSION['6_letters_code']);
		} else {
?>
		<script type="text/javascript">
			alert("Please Enter valid Mobile No ");
		</script>    
<?php
		}
	} else {
?>
	<script type="text/javascript">
		alert("Robot verification failed, please try again");
	</script>
<?php
	}}
	else
	{
	 ?>
	<script type="text/javascript">
		alert("Please Select Capcha Check Box ");
	</script>
<?php   
	}
}

function getCurrentPageURL($type){
	$uri      = $_SERVER['REQUEST_URI'];
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$base_url      = $protocol . $_SERVER['HTTP_HOST'].'/';
	$url      = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$query    = $_SERVER['QUERY_STRING'];
	if ($type == 'query') {
					return $query; // Outputs: Query String
	} else if ($type == 'uri') {
					return $uri; // Outputs: URI    
	} else if ($type == 'url') {
					return $url; // Outputs: Full URL    
	} else if ($type == 'base_url') {
					return $base_url; // Outputs: Full URL    
	} else if ($type == 'title') {
		$ext = pathinfo($uri);
		$filename =  ucwords(str_replace("-"," ",$ext['filename']));
		return $filename; // Outputs: Full URL    
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="<?php echo getCurrentPageURL('url'); ?>" />
        <link rel="alternate" href="<?php echo getCurrentPageURL('url'); ?>" hreflang="en-in" />
        <title>Contact Us - Best Boarding School in North India, Uttarakhand</title>
        <meta name="description" content="Contact us by phone or visit at campus to get details all about career counseling, admission etc.">
        <meta name="keywords" content="">
        <meta name="robots"content="index,follow">
        <meta name="googlebot"content="INDEX,FOLLOW"/>
        <meta name="YahooSeeker"content="INDEX,FOLLOW"/>
        <meta name="msnbot" content="INDEX,FOLLOW"/>
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
        <?php include('include/class.php'); ?>
         <script src='https://www.google.com/recaptcha/api.js' async defer >
        <!-- Global site tag (gtag.js) - AdWords: 1040837567 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1040837567"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'AW-1040837567');
        </script>
        <script language="javascript">
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
            function check()
            {
            var user_name=document.getElementById('uname').value;
            var email_id=document.getElementById('email').value;
            var phone_no=document.getElementById('pno').value;
            var seeking=document.getElementById('loginas').value;
            var captcha_code=document.getElementById('validator').value;
            var intAtPos = email_id.indexOf("@");
            var intDotPos = email_id.indexOf(".");
            var intMailLen =email_id.length;
            
                    if(user_name=='')
                       {
                             alert('Enter Your Name');
                             document.getElementById("uname").focus();
                             return false;
                       }
                     else if(email_id=='')
                       {
                            alert('Enter Your Mail Id');
                            document.getElementById("email").focus();
                            return false;
                       }
                       else if((intDotPos >= intMailLen-2) || (intAtPos <= 0) || (intDotPos <= 0))
                       {
                           alert('Enter Your Valid  Mail Id');
                            document.getElementById("email").focus();
                            return false;
                       }
                       else if(phone_no=='')
                       {
                           alert('Enter Your Valid  Phone No');
                            document.getElementById("pno").focus();
                            return false;
                       }
                       else if(phone_no.length<10 || phone_no.length>10)
                       {
                            alert('Enter Your Valid  Phone No');
                            document.getElementById("pno").focus();
                            return false;
                       
                       }
                       else if(phone_no.substring(0, 1)=='0')
                       {
                           alert('Enter Your Valid  Phone No');
                            document.getElementById("pno").focus();
                            return false;
                       }
                       else if(seeking=='')
                       {
                         alert('Choose Seeking');
                         document.getElementById("loginas").focus();
                            return false;
                       }
                     else
                       {
                       return true;
                       }
            
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
        <?php 
            if($_REQUEST['msg']=='sc')
            {
                echo "<script>alert('Thanks For Contract us,we will get back to you soon !')</script>";
            }
            ?>
        <!-- Header Area wrapper End -->
        <section id="allcontent" class="countdown-timer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 text-justify">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h1>
                        </div>
                        <!--<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                            	<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
                            </div>
                            </div>-->
                        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                            <form name="form1" id="form1" method="post" action="" onSubmit="return check();">
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2>Please fill the Form given below</h2>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Name<strong class="text-red">*</strong></label>
                                                    <input type="text" name="uname" id="uname" class="textFild form-control" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>E-mail ID</label>
                                                    <input type="text" name="email" id="email" class="textFild form-control" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Mobile<strong class="text-red">*</strong></label>
                                                    <input type="text" name="pno" id="pno" class="textFild form-control" maxlength="10"  onkeypress="return isNumber(event)" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Are you seeking<strong class="text-red">*</strong></label>
                                                    <select name="loginas" id="loginas" class="form-control" required>
                                                        <option value="">Please Select</option>
                                                        <!--<option value="FP">Faculty Position</option>
                                                        <option value="AP">Administration Position</option>-->
                                                        <option value="Admission">Admission</option>
                                                        <option value="Registration">Registration</option>
                                                        <option value="GI">General information</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--<div class="col-lg-12 form-line">
                                                <div class="form-group">
                                                	<label>Information Required<strong class="text-red">*</strong></label>
                                                	<textarea name="enqry" id="enqry" rows="2" class="form-control"></textarea>
                                                </div> 
                                                </div>-->
                                            <!--<div class="col-lg-6 form-line">-->
                                            <!--    <div class="form-group">-->
                                            <!--        <img src="https://www.selaqui.org/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />-->
                                            <!--        Refresh Captcha <a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                           
                                            <!--<div class="col-lg-6 form-line">-->
                                            <!--    <div class="form-group">-->
                                            <!--        <input name="validator" id="validator" placeholder="Enter Captcha" type="text" value="" onClick="this.value='';" class="form-control" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                         <div class="col-lg-12 form-line">
                                           <div class="form-group">
                                          <div class="g-recaptcha  mx-auto" data-sitekey="6LcP2qwZAAAAALNqgGXU6MrJ0KNA4cY_SGRRQO__" >     
                                            </div>
                                            </div>
                                         </div>   
                                            <div class="col-lg-6">
                                                <div class="form-submit">						
                                                    <button type="submit" class="btn btn-common" name="button" id="button"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
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
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p><strong class="text-green">School Campus</strong></p>
                                                <p>Chakrata Road, Dehradun-248011, INDIA</p>
                                                <p><span class="address"><i class="fa fa-phone-square" aria-hidden="true"></i></span> General Queries: +91 135 6171111/7253051000</p>
                                                <p><span class="address"><i class="fa fa-mobile" aria-hidden="true"></i></span> Toll Free: <a href="tel:7669040404" onClick="_gaq.push(['_trackEvent', 'Admission', 'Admission Enquiry']);">7669 040404</a></p>
                                                <p><span class="address"><i class="fa fa-fax" aria-hidden="true"></i></span> Fax: +91 135 6171199</p>
                                                <p><span class="address"><i class="fa fa-envelope" aria-hidden="true"></i></span> Email: <a href="mailto:selaqui@selaqui.org">selaqui@selaqui.org</a>, <a href="mailto:admissions@selaqui.org">admissions@selaqui.org</a></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><strong class="text-green">Delhi Office</strong></p>
                                                <p>A-Block, 3rd Floor, MGF Metropolitan Mall, District Centre Saket, New Delhi - 110017, INDIA</p>
                                                <p><span class="address"><i class="fa fa-phone-square" aria-hidden="true"></i></span> Tel: +91 11 47342000/23</p>
                                                <p><span class="address"><i class="fa fa-fax" aria-hidden="true"></i></span> Fax: +91 11 47342099</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13769.722169072036!2d77.857668!3d30.36713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x207ff4e4400ecb40!2sSelaQui+International+Boarding+School!5e0!3m2!1sen!2sin!4v1490336113434" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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