<?php
error_reporting(0);
session_start();
include('include/db.php');
date_default_timezone_set('Asia/Calcutta');
$DATE = date('Y-m-d H:i:s');
@extract($_GET);
@extract($_POST);
$name = $fname . "&nbsp;" . $lname;
// print_r($_SESSION);
// die();
if ($_REQUEST['bid'] == 'euttaranchal-banner') {
	$information_sourse = "Registration-Euttaranchal";
} else {
	$information_sourse = "Registration";
}
if (isset($_POST['fname'])) {
     //if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
     if(isset($_POST['capcha']) && !empty($_POST['capcha']))
    {
          /* $secret = '6LcP2qwZAAAAAKXWo5EVzbCT7us525FEO8H4brrE';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);*/
    //echo $_POST['capcha'];
    //echo $_POST['capcha_check'];
	if (strtolower($_POST['capcha'])==strtolower($_POST['capcha_check'])) {
		//if($_POST['apply']=='Submit'){
		$dob = $_POST['dob'];
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
						$ip = $_SERVER['REMOTE_ADDR'];
		} else {
						$ip = "Not Set";
		}
		$appuser = "SELECT * FROM application WHERE father_email='" . $email . "' or father_mobile='" . $mobile . "'";
		$app_user = mysql_query($appuser) or die(mysql_error());
		$num_appuser = mysql_num_rows($app_user);
		$ssmit       = true;
		if ($_POST['fname'] == $_POST['midname'] || $_POST['fname'] == $_POST['lname'] || $_POST['midname'] == $_POST['lname'] || count($_POST['mobile']) > '10') {
						$ssmit = false;
		}
		if ($num_appuser <= 0 && $ssmit == 'true') {
			$select_user = "SELECT * FROM users WHERE username='" . $_POST['uname'] . "'";
			$result_user = mysql_query($select_user) or die(mysql_error());
			$num_user = mysql_num_rows($result_user);
			if ($num_user <= 0) {
				//$dob=$_POST['yr']."-".$_POST['mon']."-".$_POST['dd'];
				$stud_name = $_POST['fname'] . " " . $_POST['midname'] . " " . $_POST['lname'];
				$dob       = $_POST['dob'];
				$user_qry  = "INSERT INTO users(username,password,usertype,enabled,last_active)VALUES('$uname','" . md5($password) . "','student','1','" . $DATE . "')";
				$user_res = mysql_query($user_qry) or die(mysql_error());
				$id = mysql_insert_id();
				if ($onlinetest_date == '') {
					$otest = '';
				} else {
					$otest = $onlinetest_date;
				}
				$reg_qry = "INSERT INTO application(student_fname, student_midname, student_lname, student_dob, father_title, father_fname,  father_midname, father_lname, father_occupation, father_tel, father_mobile, father_email, father_add1, father_add2,father_city, father_state, father_country, father_pin, classname, schoolname, referred_by, admission_sought, reg_date,user_id,online_testdate) VALUES
('" . addslashes($_POST['fname']) . "', '" . addslashes($_POST['midname']) . "', '" . addslashes($_POST['lname']) . "', '$dob', '$ftitle', '" . addslashes($_POST['father_fname']) . "', '" . addslashes($_POST['father_midname']) . "', '" . addslashes($_POST['father_lname']) . "', '" . addslashes($_POST['foccupation']) . "', '$comm_tel', '$mobile','$email', '" . addslashes($_POST['comm_add1']) . "', '" . addslashes($_POST['comm_add2']) . "', '" . addslashes($_POST['comm_city']) . "', '" . addslashes($_POST['comm_state']) . "', '$comm_country', '$comm_pin', '$classname', '" . addslashes($_POST['schoolname']) . "', '$about_inst', '$admission_sought', '" . $DATE . "','$id','$otest')";
				$res_insert = mysql_query($reg_qry) or die(mysql_error());
				$appid = mysql_insert_id();
				$amt   = '9000';
				$t     = time();
				$empid = '100100';
				/* remove leads from counsellor 2 in database as requested by bewlenne from SIS.
				if($t%2==1)
				$empid='100100';
				else
				$empid='200100'; // you can change this to second counsellors id in future
				*/
				if (($admission_sought == 'XI - Gurukul Science - Medical') or ($admission_sought == 'XI - Gurukul Science - Engineering'))
				//if($admission_sought=='XI Science')
								{
								$empid = '400100'; // This Id For send XII Science lead to gurukul 
								$amt   = '9000';
				}
				if ($admission_sought == 'XI - Pure Science')
				//if($admission_sought=='XI Science')
								{
								$empid = '400100'; // This Id For send XII Science lead to gurukul 
								$amt   = '9000';
				}
				$project_id = 0;
				//$pos = strpos($admission_sought,'Arjuna');
				/*if($pos === false)
				{
				$project_id=0; 
				}
				else
				{
				$project_id=5;
				$empid='100';
				}*/
				$filed      = $_SESSION['campaign_key'];
				$stud_qry   = "INSERT INTO student(project_id,stud_name, add1, add2, city, phone_no, mobno, email, state, pin, course, information_source,page_group,contact_date,emp_id,joined,count_visit,user_id,app_id,ip_address,PSE,PAC,PCA,PAG,PKW,PMT,PDS,PPC,PAD) VALUES
('" . $project_id . "','" . $stud_name . "', '" . addslashes($_POST['comm_add1']) . "', '" . addslashes($_POST['comm_add2']) . "', '" . addslashes($_POST['comm_city']) . "', '$comm_tel', '$mobile','$email', '" . addslashes($_POST['comm_state']) . "', '$comm_pin', '$admission_sought', '$information_sourse','SELAQUI MAIN REGISTRATION','" . $DATE . "','$empid', '" . $DATE . "' , 1,'$id','$appid','$ip','" . $filed['PSE'] . "','" . $filed['PAC'] . "','" . $filed['PCA'] . "','" . $filed['PAG'] . "','" . $filed['PKW'] . "','" . $filed['PMT'] . "','" . $filed['PDS'] . "','" . $filed['PPC'] . "','" . $filed['PAD'] . "')";
				$res_insert = mysql_query($stud_qry) or die(mysql_error());
				$studentid              = mysql_insert_id();
				$code                   = "SELAQUI" . date('Ymd') . $studentid . rand(10, 899);
				$QueryStatementForOrder = "   insert into ordermanagement set
ordercode           =     '" . $code . "',
memberid            =     '" . $studentid . "',
paymentstatus       =     'pending',
Payamount           =     '" . $amt . "',
regidate            =     '" . $DATE . "'";
				//echo  $QueryStatementForOrder;die;
				$RegistrationQuery      = mysql_query($QueryStatementForOrder);
				$headers                = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: SelaQui International School<admissions@selaqui.org>' . "\r\n";
				if ($RegistrationQuery) {
								include('mailcontent/registration_mail_contents.php');
								mail($to, $subject1, $txt1, $headers);
				}
				$_SESSION['leaddone'] = 1;
				unset($_SESSION['submitinfo']);
				unset($_SESSION['campaign_key']);
?>
				<script language="javascript">
					window.location="onlinepayment.php?app=<?= $studentid ?>&course=<?= base64_encode($admission_sought) ?>";
				</script>
<?php
				//unset($_SESSION['captcha']);
			} else {
				$msg1 = "This Username Already Exist.Please Try Another One.";
			}
		} else {
						$msg1 = "This Email Id Or Mobile Number Already Exist.Please Try Another One.";
		}
	} else {
?>
	<script type="text/javascript">
		alert("Capcha Code Does Not Match");
	</script>
<?php
	}}
	else
	{
	    ?>
	<script type="text/javascript">
		alert("Please Insert Capcha Code");
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
        <title>Boarding School Online Registration Form - SelaQui, Dehradun, India</title>
        <meta name="description" content="Register online for further processing of your application to get admission at SelaQui International School.">
        <meta name="robots"content="index,follow">
        <meta name="googlebot"content="INDEX,FOLLOW"/>
        <meta name="YahooSeeker"content="INDEX,FOLLOW"/>
        <meta name="msnbot" content="INDEX,FOLLOW"/>
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
        <?php include('include/class.php'); ?>
         <!--<script src='https://www.google.com/recaptcha/api.js' async defer >-->
        <script language="JavaScript" type="text/javascript">
           /* function refreshCaptcha()
            {
            	var img = document.images['captchaimg'];
            	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
            }*/
        </script>
        <script>
            // Wait until the DOM has loaded before querying the document
            $(document).ready(function(){
            	$('ul.tabs').each(function(){
            		// For each set of tabs, we want to keep track of
            		// which tab is active and it's associated content
            		var $active, $content, $links = $(this).find('a');
            
            		// If the location.hash matches one of the links, use that as the active tab.
            		// If no match is found, use the first link as the initial active tab.
            		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
            		$active.addClass('active');
            
            		$content = $($active[0].hash);
            
            		// Hide the remaining content
            		$links.not($active).each(function () {
            			$(this.hash).hide();
            		});
            
            		// Bind the click event handler
            		$(this).on('click', 'a', function(e){
            			// Make the old tab inactive.
            			$active.removeClass('active');
            			$content.hide();
            
            			// Update the variables with the new link and content
            			$active = $(this);
            			$content = $(this.hash);
            
            			// Make the tab active.
            			$active.addClass('active');
            			$content.show();
            
            			// Prevent the anchor's default click action
            			e.preventDefault();
            		});
            	});
            });
        </script>
    </head>
    <body id="other_page">
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
                            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Online Registration</h1>
                        </div>
                        <!--<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                            	<img src="assets/images/careers.jpg" alt="Headmaster" class="img-fluid">
                            </div>
                            </div>-->
                        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                            <p>
                                You can register online <!--free of cost--> here and once your registration is received by <strong class='goudy'>SelaQui</strong> International School, a &quot;<strong class='goudy'>SelaQui</strong> Counselor&quot; will get in touch with you for further processing of your application.
                            </p>
                            <p>
                                <strong class="text-red"><?php echo $msg1;?></strong>
                            </p>
                            <form action="" method="post" name="appform" id="appform" onSubmit="return validate_regdetail();">
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2>Student’s Information</h2>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>First Name<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="fname" id="fname" value="<?php if($fname!=''){ echo $fname;} else{echo '';} ?>"   />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input class="form-control" type="text" name="midname" id="midname" value="<?php if($midname!=''){ echo $midname;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Last Name<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="lname" id="lname" value="<?php if($lname!=''){ echo $lname;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Date of Birth<strong class="text-red">*</strong></label>
                                                    <input class="form-control" type="date" id="dob" name="dob" placeholder="Date of Birth" value=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Father's Details</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 form-line">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <select class="form-control" name="myself" id="myself" required>
                                                        <option value="">Title</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Mrs">Ms</option>
                                                        <option value="Dr">Dr</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 form-line">
                                                <div class="form-group">
                                                    <label>First Name<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="father_fname" id="father_fname" value="<?php if($father_fname!=''){ echo $father_fname;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-5 form-line">
                                                <div class="form-group">
                                                    <label>Middle Name</label>												
                                                    <input class="form-control" type="text" name="father_midname" id="father_midname" value="<?php if($father_midname!=''){ echo $father_midname;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Last Name<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="father_lname" id="father_lname" value="<?php if($father_lname!=''){ echo $father_lname;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Occupation</label>
                                                    <input class="form-control" type="text" name="foccupation" id="foccupation" value="<?php if($foccupation!=''){ echo $foccupation;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Contact Details</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 form-line">
                                                <div class="form-group">
                                                    <label>Telephone No</label>
                                                    <input class="form-control" type="text" name="comm_tel" value="<?php if($comm_tel!=''){ echo $comm_tel;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 form-line">
                                                <div class="form-group">
                                                    <label>Mobile No<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="mobile" id="mobile" value="<?php if($mobile!=''){ echo $mobile;} else{echo '';} ?>" maxlength="12"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 form-line">
                                                <div class="form-group">
                                                    <label>Email<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="email" id="email" value="<?php if($email!=''){ echo $email;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Communication Address</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Address Line 1<strong class="text-red">*</strong></label>
                                                    <input class="form-control" type="text" name="comm_add1" id="comm_add1" value="<?php if($comm_add1!=''){ echo $comm_add1;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Address Line 2<strong class="text-red">*</strong></label>
                                                    <input class="form-control" type="text" name="comm_add2" id="comm_add2" value="<?php if($comm_add2!=''){ echo $comm_add2;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 form-line">
                                                <div class="form-group">
                                                    <label>Country<strong class="text-red">*</strong></label>
                                                    <select class="form-control" required name="comm_country" id="comm_country" onChange="state_show(this.value);">
                                                        <option value="">--Select--</option>
                                                        <option value="Afghanistan"<? if($comm_country =='Afghanistan'){ echo "selected"; } ?>>Afghanistan</option>
                                                        <option value="Albania"<? if($comm_country =='Albania'){ echo "selected"; } ?>>Albania</option>
                                                        <option value="Algeria" <? if($comm_country =='Algeria'){ echo "selected"; } ?>>Algeria</option>
                                                        <option value="Andorra" <? if($comm_country =='Andorra'){ echo "selected"; } ?>>Andorra</option>
                                                        <option value="Angola" <? if($comm_country =='Angola'){ echo "selected"; } ?>>Angola</option>
                                                        <option value="Anguilla" <? if($comm_country =='Anguilla'){ echo "selected"; } ?>>Anguilla</option>
                                                        <option value="Antigua &amp; Barbuda" <? if($comm_country =='Antigua &amp; Barbuda'){ echo "selected"; } ?>>Antigua &amp; Barbuda</option>
                                                        <option value="Argentina" <? if($comm_country =='Argentina'){ echo "selected"; } ?>>Argentina</option>
                                                        <option value="Armenia" <? if($comm_country =='Armenia'){ echo "selected"; } ?>>Armenia</option>
                                                        <option value="Australia" <? if($comm_country =='Australia'){ echo "selected"; } ?>>Australia</option>
                                                        <option value="Austria" <? if($comm_country =='Austria'){ echo "selected"; } ?>>Austria</option>
                                                        <option value="Azerbaijan" <? if($comm_country =='Azerbaijan'){ echo "selected"; } ?>>Azerbaijan</option>
                                                        <option value="Bahamas" <? if($comm_country =='Bahamas'){ echo "selected"; } ?>>Bahamas</option>
                                                        <option value="Bahrain" <? if($comm_country =='Bahrain'){ echo "selected"; } ?>>Bahrain</option>
                                                        <option value="Bangladesh" <? if($comm_country =='Bangladesh'){ echo "selected"; } ?>>Bangladesh</option>
                                                        <option value="Barbados" <? if($comm_country =='Barbados'){ echo "selected"; } ?>>Barbados</option>
                                                        <option value="Belarus" <? if($comm_country =='Belarus'){ echo "selected"; } ?>>Belarus</option>
                                                        <option value="Belgium" <? if($comm_country =='Belgium'){ echo "selected"; } ?>>Belgium</option>
                                                        <option value="Belize" <? if($comm_country =='Belize'){ echo "selected"; } ?>>Belize</option>
                                                        <option value="Bermuda" <? if($comm_country =='Bermuda'){ echo "selected"; } ?>>Bermuda</option>
                                                        <option value="Bhutan" <? if($comm_country =='Bhutan'){ echo "selected"; } ?>>Bhutan</option>
                                                        <option value="Bolivia" <? if($comm_country =='Bolivia'){ echo "selected"; } ?>>Bolivia</option>
                                                        <option value="Bosnia and Herzegovina" <? if($comm_country =='Bosnia and Herzegovina'){ echo "selected"; } ?>>Bosnia and Herzegovina</option>
                                                        <option value="Botswana" <? if($comm_country =='Botswana'){ echo "selected"; } ?>>Botswana</option>
                                                        <option value="Brazil" <? if($comm_country =='Brazil'){ echo "selected"; } ?>>Brazil</option>
                                                        <option value="Brunei" <? if($comm_country =='Brunei'){ echo "selected"; } ?>>Brunei</option>
                                                        <option value="Bulgaria" <? if($comm_country =='Bulgaria'){ echo "selected"; } ?>>Bulgaria</option>
                                                        <option value="Burkina Faso" <? if($comm_country =='Burkina Faso'){ echo "selected"; } ?>>Burkina Faso</option>
                                                        <option value="Burundi" <? if($comm_country =='Burundi'){ echo "selected"; } ?>>Burundi</option>
                                                        <option value="Cambodia" <? if($comm_country =='Cambodia'){ echo "selected"; } ?>>Cambodia</option>
                                                        <option value="Cameroon" <? if($comm_country =='Cameroon'){ echo "selected"; } ?>>Cameroon</option>
                                                        <option value="Canada" <? if($comm_country =='Canada'){ echo "selected"; } ?>>Canada</option>
                                                        <option value="Cape Verde" <? if($comm_country =='Cape Verde'){ echo "selected"; } ?>>Cape Verde</option>
                                                        <option value="Cayman Islands" <? if($comm_country =='Cayman Islands'){ echo "selected"; } ?>>Cayman Islands</option>
                                                        <option value="Central African Republic" <? if($comm_country =='Central African Republic'){ echo "selected"; } ?>>Central African Republic</option>
                                                        <option value="Chad" <? if($comm_country =='Chad'){ echo "selected"; } ?>>Chad</option>
                                                        <option value="Chile" <? if($comm_country =='Chile'){ echo "selected"; } ?>>Chile</option>
                                                        <option value="China" <? if($comm_country =='China'){ echo "selected"; } ?>>China</option>
                                                        <option value="Colombia" <? if($comm_country =='Colombia'){ echo "selected"; } ?>>Colombia</option>
                                                        <option value="Comoros" <? if($comm_country =='Comoros'){ echo "selected"; } ?>>Comoros</option>
                                                        <option value="Congo" <? if($comm_country =='Congo'){ echo "selected"; } ?>>Congo</option>
                                                        <option value="Congo (DRC)" <? if($comm_country =='Congo (DRC)'){ echo "selected"; } ?>>Congo (DRC)</option>
                                                        <option value="Cook Islands" <? if($comm_country =='Cook Islands'){ echo "selected"; } ?>>Cook Islands</option>
                                                        <option value="Costa Rica" <? if($comm_country =='Costa Rica'){ echo "selected"; } ?>>Costa Rica</option>
                                                        <option value="Cote dIvoire" <? if($comm_country =='Cote dIvoire'){ echo "selected"; } ?>>Cote d'Ivoire</option>
                                                        <option value="Croatia (Hrvatska)" <? if($comm_country =='Croatia (Hrvatska)'){ echo "selected"; } ?>>Croatia (Hrvatska)</option>
                                                        <option value="Cuba" <? if($comm_country =='Cuba'){ echo "selected"; } ?>>Cuba</option>
                                                        <option value="Cyprus" <? if($comm_country =='Cyprus'){ echo "selected"; } ?> >Cyprus</option>
                                                        <option value="Czech Republic" <? if($comm_country =='Czech Republic'){ echo "selected"; } ?>>Czech Republic</option>
                                                        <option value="Denmark" <? if($comm_country =='Denmark'){ echo "selected"; } ?>>Denmark</option>
                                                        <option value="Djibouti" <? if($comm_country =='Djibouti'){ echo "selected"; } ?>>Djibouti</option>
                                                        <option value="Dominica" <? if($comm_country =='Dominica'){ echo "selected"; } ?>>Dominica</option>
                                                        <option value="Dominican Republic" <? if($comm_country =='Dominican Republic'){ echo "selected"; } ?>>Dominican Republic</option>
                                                        <option value="East Timor" <? if($comm_country =='East Timor'){ echo "selected"; } ?>>East Timor</option>
                                                        <option value="Ecuador" <? if($comm_country =='Ecuador'){ echo "selected"; } ?>>Ecuador</option>
                                                        <option value="Egypt" <? if($comm_country =='Egypt'){ echo "selected"; } ?>>Egypt</option>
                                                        <option value="El Salvador" <? if($comm_country =='El Salvador'){ echo "selected"; } ?>>El Salvador</option>
                                                        <option value="Equatorial Guinea" <? if($comm_country =='Equatorial Guinea'){ echo "selected"; } ?>>Equatorial Guinea</option>
                                                        <option value="Eritrea" <? if($comm_country =='Eritrea'){ echo "selected"; } ?>>Eritrea</option>
                                                        <option value="Estonia" <? if($comm_country =='Estonia'){ echo "selected"; } ?>>Estonia</option>
                                                        <option value="Ethiopia" <? if($comm_country =='Ethiopia'){ echo "selected"; } ?>>Ethiopia</option>
                                                        <option value="Falkland Islands" <? if($comm_country =='Falkland Islands'){ echo "selected"; } ?>>Falkland Islands</option>
                                                        <option value="Faroe Islands" <? if($comm_country =='Faroe Islands'){ echo "selected"; } ?>>Faroe Islands</option>
                                                        <option value="Fiji Islands" <? if($comm_country =='Fiji Islands'){ echo "selected"; } ?>>Fiji Islands</option>
                                                        <option value="Finland" <? if($comm_country =='Finland'){ echo "selected"; } ?>>Finland</option>
                                                        <option value="France" <? if($comm_country =='France'){ echo "selected"; } ?>>France</option>
                                                        <option value="French Guiana" <? if($comm_country =='French Guiana'){ echo "selected"; } ?>>French Guiana</option>
                                                        <option value="French Polynesia" <? if($comm_country =='French Polynesia'){ echo "selected"; } ?>>French Polynesia</option>
                                                        <option value="Gabon" <? if($comm_country =='Gabon'){ echo "selected"; } ?>>Gabon</option>
                                                        <option value="Gambia" <? if($comm_country =='Gambia'){ echo "selected"; } ?>>Gambia</option>
                                                        <option value="Georgia" <? if($comm_country =='Georgia'){ echo "selected"; } ?>>Georgia</option>
                                                        <option value="Germany" <? if($comm_country =='Germany'){ echo "selected"; } ?>>Germany</option>
                                                        <option value="Ghana" <? if($comm_country =='Ghana'){ echo "selected"; } ?>>Ghana</option>
                                                        <option value="Gibraltar" <? if($comm_country =='Gibraltar'){ echo "selected"; } ?>>Gibraltar</option>
                                                        <option value="Greece" <? if($comm_country =='Greece'){ echo "selected"; } ?>>Greece</option>
                                                        <option value="Greenland" <? if($comm_country =='Greenland'){ echo "selected"; } ?>>Greenland</option>
                                                        <option value="Grenada" <? if($comm_country =='Grenada'){ echo "selected"; } ?>>Grenada</option>
                                                        <option value="Guadeloupe" <? if($comm_country =='Guadeloupe'){ echo "selected"; } ?>>Guadeloupe</option>
                                                        <option value="Guam" <? if($comm_country =='Guam'){ echo "selected"; } ?>>Guam</option>
                                                        <option value="Guatemala" <? if($comm_country =='Guatemala'){ echo "selected"; } ?>>Guatemala</option>
                                                        <option value="Guinea" <? if($comm_country =='Guinea'){ echo "selected"; } ?>>Guinea</option>
                                                        <option value="Guinea-Bissau" <? if($comm_country =='Guinea-Bissau'){ echo "selected"; } ?>>Guinea-Bissau</option>
                                                        <option value="Guyana" <? if($comm_country =='Guyana'){ echo "selected"; } ?>>Guyana</option>
                                                        <option value="Haiti" <? if($comm_country =='Haiti'){ echo "selected"; } ?>>Haiti</option>
                                                        <option value="Honduras" <? if($comm_country =='Honduras'){ echo "selected"; } ?>>Honduras</option>
                                                        <option value="Hong Kong SAR" <? if($comm_country =='Hong Kong SAR'){ echo "selected"; } ?>>Hong Kong SAR</option>
                                                        <option value="Hungary" <? if($comm_country =='Hungary'){ echo "selected"; } ?>>Hungary</option>
                                                        <option value="Iceland" <? if($comm_country =='Iceland'){ echo "selected"; } ?>>Iceland</option>
                                                        <option value="India"  <? if($comm_country =='India'){ echo "selected"; } ?>>India</option>
                                                        <option value="Indonesia" <? if($comm_country =='Indonesia'){ echo "selected"; } ?>>Indonesia</option>
                                                        <option value="Iran" <? if($comm_country =='Iran'){ echo "selected"; } ?>>Iran</option>
                                                        <option value="Iraq" <? if($comm_country =='Iraq'){ echo "selected"; } ?>>Iraq</option>
                                                        <option value="Ireland" <? if($comm_country =='Ireland'){ echo "selected"; } ?>>Ireland</option>
                                                        <option value="Israel" <? if($comm_country =='Israel'){ echo "selected"; } ?>>Israel</option>
                                                        <option value="Italy" <? if($comm_country =='Italy'){ echo "selected"; } ?>>Italy</option>
                                                        <option value="Jamaica" <? if($comm_country =='Jamaica'){ echo "selected"; } ?>>Jamaica</option>
                                                        <option value="Japan" <? if($comm_country =='Japan'){ echo "selected"; } ?>>Japan</option>
                                                        <option value="Jordan" <? if($comm_country =='Jordan'){ echo "selected"; } ?>>Jordan</option>
                                                        <option value="Kazakhstan" <? if($comm_country =='Kazakhstan'){ echo "selected"; } ?>>Kazakhstan</option>
                                                        <option value="Kenya" <? if($comm_country =='Kenya'){ echo "selected"; } ?>>Kenya</option>
                                                        <option value="Kiribati" <? if($comm_country =='Kiribati'){ echo "selected"; } ?>>Kiribati</option>
                                                        <option value="Korea" <? if($comm_country =='Korea'){ echo "selected"; } ?>>Korea</option>
                                                        <option value="Kuwait" <? if($comm_country =='Kuwait'){ echo "selected"; } ?>>Kuwait</option>
                                                        <option value="Kyrgyzstan" <? if($comm_country =='Kyrgyzstan'){ echo "selected"; } ?>>Kyrgyzstan</option>
                                                        <option value="Laos" <? if($comm_country =='Laos'){ echo "selected"; } ?>>Laos</option>
                                                        <option value="Latvia" <? if($comm_country =='Latvia'){ echo "selected"; } ?>>Latvia</option>
                                                        <option value="Lebanon" <? if($comm_country =='Lebanon'){ echo "selected"; } ?>>Lebanon</option>
                                                        <option value="Lesotho" <? if($comm_country =='Lesotho'){ echo "selected"; } ?>>Lesotho</option>
                                                        <option value="Liberia" <? if($comm_country =='Liberia'){ echo "selected"; } ?>>Liberia</option>
                                                        <option value="Libya" <? if($comm_country =='Libya'){ echo "selected"; } ?>>Libya</option>
                                                        <option value="Liechtenstein" <? if($comm_country =='Liechtenstein'){ echo "selected"; } ?>>Liechtenstein</option>
                                                        <option value="Lithuania" <? if($comm_country =='Lithuania'){ echo "selected"; } ?>>Lithuania</option>
                                                        <option value="Luxembourg" <? if($comm_country =='Luxembourg'){ echo "selected"; } ?>>Luxembourg</option>
                                                        <option value="Macao SAR" <? if($comm_country =='Macao SAR'){ echo "selected"; } ?>>Macao SAR</option>
                                                        <option value="Macedonia" <? if($comm_country =='Macedonia'){ echo "selected"; } ?>>Macedonia</option>
                                                        <option value="Madagascar" <? if($comm_country =='Madagascar'){ echo "selected"; } ?>>Madagascar</option>
                                                        <option value="Malawi" <? if($comm_country =='Malawi'){ echo "selected"; } ?>>Malawi</option>
                                                        <option value="Malaysia" <? if($comm_country =='Malaysia'){ echo "selected"; } ?>>Malaysia</option>
                                                        <option value="Maldives" <? if($comm_country =='Maldives'){ echo "selected"; } ?>>Maldives</option>
                                                        <option value="Mali" <? if($comm_country =='Mali'){ echo "selected"; } ?>>Mali</option>
                                                        <option value="Malta" <? if($comm_country =='Malta'){ echo "selected"; } ?>>Malta</option>
                                                        <option value="Martinique" <? if($comm_country =='Martinique'){ echo "selected"; } ?>>Martinique</option>
                                                        <option value="Mauritania" <? if($comm_country =='Mauritania'){ echo "selected"; } ?>>Mauritania</option>
                                                        <option value="Mauritius" <? if($comm_country =='Mauritius'){ echo "selected"; } ?>>Mauritius</option>
                                                        <option value="Mayotte" <? if($comm_country =='Mayotte'){ echo "selected"; } ?>>Mayotte</option>
                                                        <option value="Mexico" <? if($comm_country =='Mexico'){ echo "selected"; } ?>>Mexico</option>
                                                        <option value="Micronesia" <? if($comm_country =='Micronesia'){ echo "selected"; } ?>>Micronesia</option>
                                                        <option value="Moldova" <? if($comm_country =='Moldova'){ echo "selected"; } ?>>Moldova</option>
                                                        <option value="Monaco" <? if($comm_country =='Monaco'){ echo "selected"; } ?>>Monaco</option>
                                                        <option value="Mongolia" <? if($comm_country =='Mongolia'){ echo "selected"; } ?>>Mongolia</option>
                                                        <option value="Montserrat" <? if($comm_country =='Montserrat'){ echo "selected"; } ?>>Montserrat</option>
                                                        <option value="Morocco" <? if($comm_country =='Morocco'){ echo "selected"; } ?>>Morocco</option>
                                                        <option value="Mozambique" <? if($comm_country =='Mozambique'){ echo "selected"; } ?>>Mozambique</option>
                                                        <option value="Myanmar" <? if($comm_country =='Myanmar'){ echo "selected"; } ?>>Myanmar</option>
                                                        <option value="Namibia" <? if($comm_country =='Namibia'){ echo "selected"; } ?>>Namibia</option>
                                                        <option value="Nauru" <? if($comm_country =='Nauru'){ echo "selected"; } ?>>Nauru</option>
                                                        <option value="Nepal" <? if($comm_country =='Nepal'){ echo "selected"; } ?>>Nepal</option>
                                                        <option value="Netherlands" <? if($comm_country =='Netherlands'){ echo "selected"; } ?>>Netherlands</option>
                                                        <option value="Netherlands Antilles" <? if($comm_country =='Netherlands Antilles'){ echo "selected"; } ?>>Netherlands Antilles</option>
                                                        <option value="New Caledonia" <? if($comm_country =='New Caledonia'){ echo "selected"; } ?>>New Caledonia</option>
                                                        <option value="New Zealand" <? if($comm_country =='New Zealand'){ echo "selected"; } ?>>New Zealand</option>
                                                        <option value="Nicaragua" <? if($comm_country =='Nicaragua'){ echo "selected"; } ?>>Nicaragua</option>
                                                        <option value="Niger" <? if($comm_country =='Niger'){ echo "selected"; } ?>>Niger</option>
                                                        <option value="Nigeria" <? if($comm_country =='Nigeria'){ echo "selected"; } ?>>Nigeria</option>
                                                        <option value="Niue" <? if($comm_country =='Niue'){ echo "selected"; } ?>>Niue</option>
                                                        <option value="Norfolk Island" <? if($comm_country =='Norfolk Island'){ echo "selected"; } ?>>Norfolk Island</option>
                                                        <option value="North Korea" <? if($comm_country =='North Korea'){ echo "selected"; } ?>>North Korea</option>
                                                        <option value="Norway" <? if($comm_country =='Norway'){ echo "selected"; } ?>>Norway</option>
                                                        <option value="Oman" <? if($comm_country =='Oman'){ echo "selected"; } ?>>Oman</option>
                                                        <option value="Pakistan" <? if($comm_country =='Pakistan'){ echo "selected"; } ?>>Pakistan</option>
                                                        <option value="Panama" <? if($comm_country =='Panama'){ echo "selected"; } ?>>Panama</option>
                                                        <option value="Papua New Guinea" <? if($comm_country =='Papua New Guinea'){ echo "selected"; } ?>>Papua New Guinea</option>
                                                        <option value="Paraguay" <? if($comm_country =='Paraguay'){ echo "selected"; } ?>>Paraguay</option>
                                                        <option value="Peru" <? if($comm_country =='Peru'){ echo "selected"; } ?>>Peru</option>
                                                        <option value="Philippines" <? if($comm_country =='Philippines'){ echo "selected"; } ?>>Philippines</option>
                                                        <option value="Pitcairn Islands" <? if($comm_country =='Pitcairn Islands'){ echo "selected"; } ?>>Pitcairn Islands</option>
                                                        <option value="Poland" <? if($comm_country =='Poland'){ echo "selected"; } ?>>Poland</option>
                                                        <option value="Portugal" <? if($comm_country =='Portugal'){ echo "selected"; } ?>>Portugal</option>
                                                        <option value="Puerto Rico" <? if($comm_country =='Puerto Rico'){ echo "selected"; } ?>>Puerto Rico</option>
                                                        <option value="Qatar" <? if($comm_country =='Qatar'){ echo "selected"; } ?>>Qatar</option>
                                                        <option value="Reunion" <? if($comm_country =='Reunion'){ echo "selected"; } ?>>Reunion</option>
                                                        <option value="Romania" <? if($comm_country =='Romania'){ echo "selected"; } ?>>Romania</option>
                                                        <option value="Russia" <? if($comm_country =='Russia'){ echo "selected"; } ?>>Russia</option>
                                                        <option value="Rwanda" <? if($comm_country =='Rwanda'){ echo "selected"; } ?>>Rwanda</option>
                                                        <option value="Samoa" <? if($comm_country =='Samoa'){ echo "selected"; } ?>>Samoa</option>
                                                        <option value="San Marino" <? if($comm_country =='San Marino'){ echo "selected"; } ?>>San Marino</option>
                                                        <option value="Sao Tome and Principe" <? if($comm_country =='Sao Tome and Principe'){ echo "selected"; } ?>>Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia" <? if($comm_country =='Saudi Arabia'){ echo "selected"; } ?>>Saudi Arabia</option>
                                                        <option value="Senegal" <? if($comm_country =='Senegal'){ echo "selected"; } ?>>Senegal</option>
                                                        <option value="Serbia and Montenegro" <? if($comm_country =='Serbia and Montenegro'){ echo "selected"; } ?>>Serbia and Montenegro</option>
                                                        <option value="Seychelles" <? if($comm_country =='Seychelles'){ echo "selected"; } ?>>Seychelles</option>
                                                        <option value="Sierra Leone" <? if($comm_country =='Sierra Leone'){ echo "selected"; } ?>>Sierra Leone</option>
                                                        <option value="Singapore" <? if($comm_country =='Singapore'){ echo "selected"; } ?>>Singapore</option>
                                                        <option value="Slovakia" <? if($comm_country =='Slovakia'){ echo "selected"; } ?>>Slovakia</option>
                                                        <option value="Slovenia" <? if($comm_country =='Slovenia'){ echo "selected"; } ?>>Slovenia</option>
                                                        <option value="Solomon Islands" <? if($comm_country =='Solomon Islands'){ echo "selected"; } ?>>Solomon Islands</option>
                                                        <option value="Somalia" <? if($comm_country =='Somalia'){ echo "selected"; } ?>>Somalia</option>
                                                        <option value="South Africa" <? if($comm_country =='South Africa'){ echo "selected"; } ?>>South Africa</option>
                                                        <option value="Spain" <? if($comm_country =='Spain'){ echo "selected"; } ?>>Spain</option>
                                                        <option value="Sri Lanka" <? if($comm_country =='Sri Lanka'){ echo "selected"; } ?>>Sri Lanka</option>
                                                        <option value="St. Helena" <? if($comm_country =='St. Helena'){ echo "selected"; } ?>>St. Helena</option>
                                                        <option value="St. Kitts and Nevis" <? if($comm_country =='St. Kitts and Nevis'){ echo "selected"; } ?>>St. Kitts and Nevis</option>
                                                        <option value="St. Lucia" <? if($comm_country =='St. Lucia'){ echo "selected"; } ?>>St. Lucia</option>
                                                        <option value="St. Pierre and Miquelon" <? if($comm_country =='St. Pierre and Miquelon'){ echo "selected"; } ?>>St. Pierre and Miquelon</option>
                                                        <option value="St. Vincent &amp; Grenadines" <? if($comm_country =='St. Vincent &amp; Grenadines'){ echo "selected"; } ?>>St. Vincent &amp; Grenadines</option>
                                                        <option value="Sudan" <? if($comm_country =='Sudan'){ echo "selected"; } ?>>Sudan</option>
                                                        <option value="Suriname" <? if($comm_country =='Suriname'){ echo "selected"; } ?>>Suriname</option>
                                                        <option value="Swaziland" <? if($comm_country =='Swaziland'){ echo "selected"; } ?>>Swaziland</option>
                                                        <option value="Sweden" <? if($comm_country =='Sweden'){ echo "selected"; } ?>>Sweden</option>
                                                        <option value="Switzerland" <? if($comm_country =='Switzerland'){ echo "selected"; } ?>>Switzerland</option>
                                                        <option value="Syria" <? if($comm_country =='Syria'){ echo "selected"; } ?>>Syria</option>
                                                        <option value="Taiwan" <? if($comm_country =='Taiwan'){ echo "selected"; } ?>>Taiwan</option>
                                                        <option value="Tajikistan" <? if($comm_country =='Tajikistan'){ echo "selected"; } ?>>Tajikistan</option>
                                                        <option value="Tanzania" <? if($comm_country =='Tanzania'){ echo "selected"; } ?>>Tanzania</option>
                                                        <option value="Thailand" <? if($comm_country =='Thailand'){ echo "selected"; } ?>>Thailand</option>
                                                        <option value="Togo" <? if($comm_country =='Togo'){ echo "selected"; } ?>>Togo</option>
                                                        <option value="Tokelau" <? if($comm_country =='Tokelau'){ echo "selected"; } ?>>Tokelau</option>
                                                        <option value="Tonga" <? if($comm_country =='Tonga'){ echo "selected"; } ?>>Tonga</option>
                                                        <option value="Trinidad and Tobago" <? if($comm_country =='Trinidad and Tobago'){ echo "selected"; } ?>>Trinidad and Tobago</option>
                                                        <option value="Tunisia" <? if($comm_country =='Tunisia'){ echo "selected"; } ?>>Tunisia</option>
                                                        <option value="Turkey" <? if($comm_country =='Turkey'){ echo "selected"; } ?>>Turkey</option>
                                                        <option value="Turkmenistan" <? if($comm_country =='Turkmenistan'){ echo "selected"; } ?>>Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands" <? if($comm_country =='Turks and Caicos Islands'){ echo "selected"; } ?>>Turks and Caicos Islands</option>
                                                        <option value="Tuvalu" <? if($comm_country =='Tuvalu'){ echo "selected"; } ?>>Tuvalu</option>
                                                        <option value="Uganda" <? if($comm_country =='Uganda'){ echo "selected"; } ?>>Uganda</option>
                                                        <option value="Ukraine" <? if($comm_country =='Ukraine'){ echo "selected"; } ?>>Ukraine</option>
                                                        <option value="United Arab Emirates" <? if($comm_country =='United Arab Emirates'){ echo "selected"; } ?>>United Arab Emirates</option>
                                                        <option value="United Kingdom" <? if($comm_country =='United Kingdom'){ echo "selected"; } ?>>United Kingdom</option>
                                                        <option value="Uruguay" <? if($comm_country =='Uruguay'){ echo "selected"; } ?>>Uruguay</option>
                                                        <option value="USA" <? if($comm_country =='USA'){ echo "selected"; } ?>>USA</option>
                                                        <option value="Uzbekistan" <? if($comm_country =='Uzbekistan'){ echo "selected"; } ?>>Uzbekistan</option>
                                                        <option value="Vanuatu" <? if($comm_country =='Vanuatu'){ echo "selected"; } ?>>Vanuatu</option>
                                                        <option value="Venezuela" <? if($comm_country =='Venezuela'){ echo "selected"; } ?>>Venezuela</option>
                                                        <option value="Vietnam" <? if($comm_country =='Vietnam'){ echo "selected"; } ?>>Vietnam</option>
                                                        <option value="Virgin Islands" <? if($comm_country =='Virgin Islands'){ echo "selected"; } ?>>Virgin Islands</option>
                                                        <option value="Virgin Islands (British)" <? if($comm_country =='Virgin Islands (British)'){ echo "selected"; } ?>>Virgin Islands (British)</option>
                                                        <option value="Wallis and Futuna" <? if($comm_country =='Wallis and Futuna'){ echo "selected"; } ?>>Wallis and Futuna</option>
                                                        <option value="Yemen" <? if($comm_country =='Yemen'){ echo "selected"; } ?>>Yemen</option>
                                                        <option value="Yugoslavia" <? if($comm_country =='Yugoslavia'){ echo "selected"; } ?>>Yugoslavia</option>
                                                        <option value="Zambia" <? if($comm_country =='Zambia'){ echo "selected"; } ?>>Zambia</option>
                                                        <option value="Zimbabwe" <? if($comm_country =='Zimbabwe'){ echo "selected"; } ?>>Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 form-line">
                                                <div class="form-group" id="statebox">
                                                    <label>State<strong class="text-red">*</strong></label>
                                                    <?php 
                                                        $state_query = mysql_query("SELECT * FROM `state`");
                                                        ?>
                                                    <select name="comm_state" id="state" class="textFF form-control" required style="display:none;">
                                                        <option value="">--SELECT--</option>
                                                        <?php
                                                            while($res = mysql_fetch_assoc($state_query)){
                                                            	?>
                                                        <option value="<?=$res['state_name'];?>"><?=$res['state_name'];?></option>
                                                        <?php }
                                                            ?>
                                                    </select>
                                                    <input class="form-control" required type="text" name="comm_state" id="comm_state" value="<?php if($comm_state!=''){ echo $comm_state;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 form-line">
                                                <div class="form-group">
                                                    <label>City<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="comm_city" id="comm_city" value="<?php if($comm_city!=''){ echo $comm_city;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 form-line">
                                                <div class="form-group">
                                                    <label>Pin<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="comm_pin" id="comm_pin" value="<?php if($comm_pin!=''){ echo $comm_pin;} else{echo '';} ?>" maxlength="6"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Presently studying in</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>Class<strong class="text-red">*</strong></label>
                                                    <select class="form-control" required name="classname" id="classname">
                                                        <option value="">-- SELECT --</option>
                                                        <option value="IV" <?php if($classname=="IV"){?>selected="selected"<?php } ?>>IV</option>
                                                        <option value="V" <?php if($classname=="V"){?>selected="selected"<?php } ?>>V</option>
                                                        <option value="VI" <?php if($classname=="VI"){?>selected="selected"<?php } ?>>VI</option>
                                                        <option value="VII" <?php if($classname=="VII"){?>selected="selected"<?php } ?>>VII</option>
                                                        <option value="VIII" <?php if($classname=="VIII"){?>selected="selected"<?php } ?>>VIII</option>
                                                        <option value="IX" <?php if($classname=="IX"){?>selected="selected"<?php } ?>>IX</option>
                                                        <option value="X" <?php if($classname=="X"){?>selected="selected"<?php } ?>>X</option>
                                                        <option value="XI Science / Medical" <?php if($classname=="XI Science / Medical"){?>selected="selected"<?php } ?>>XI &shy; Science / Medical</option>
                                                        <option value="XI Science / Non-Medical" <?php if($classname=="XI Science / Non-Medical"){?>selected="selected"<?php } ?>>XI &shy; Science / Non-Medical</option>
                                                        <option value="XI Commerce" <?php if($classname=="XI Commerce"){?>selected="selected"<?php } ?>>XI &shy; Commerce</option>
                                                        <option value="XI Humanities" <?php if($classname=="XI Humanities"){?>selected="selected"<?php } ?>>XI &shy; Humanities</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <label>School<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="schoolname" id="schoolname" value="<?php if($schoolname!=''){ echo $schoolname;} else{echo '';} ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Admission sought in</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-line">
                                                <div class="form-group">
                                                    <label>Class<strong class="text-red">*</strong></label>
                                                    <select class="form-control" required name="admission_sought" id="admission_sought">
                                                        <option value="">--SELECT--</option>
                                                        <!-- <option value="V">V</option>-->
                                                        <option value="V" <?php if($admission_sought=="V"){?>selected="selected"<?php } ?>>V</option>
                                                        <option value="VI" <?php if($admission_sought=="VI"){?>selected="selected"<?php } ?>>VI</option>
                                                        <option value="VII" <?php if($admission_sought=="VII"){?>selected="selected"<?php } ?>>VII</option>
                                                        <option value="VIII" <?php if($admission_sought=="VIII"){?>selected="selected"<?php } ?>>VIII</option>
                                                        <option value="IX" <?php if($admission_sought=="IX"){?>selected="selected"<?php } ?>>IX</option>
                                                        <option value="X" <?php if($admission_sought=="X"){?>selected="selected"<?php } ?>>X</option>
                                                        <option value="XI - Pure Science" <?php if($admission_sought=="XI - Pure Science"){?>selected="selected"<?php } ?>>XI - Pure Science</option>
                                                        <!--<option value="XI Science / Medical" <?php if($admission_sought=="XI Science / Medical"){?>selected="selected"<?php } ?>>XI &shy; Science / Medical</option>-->
                                                        <option value="XI - Gurukul Science - Medical" <?php if($admission_sought=="XI - Gurukul Science - Medical"){?>selected="selected"<?php } ?>>XI - Gurukul Science - Medical</option>
                                                        <!--<option value="XI Science / Non-Medical" <?php if($admission_sought=="XI Science / Non-Medical"){?>selected="selected"<?php } ?>>XI &shy; Science / Non-Medical</option>-->
                                                        <option value="XI - Gurukul Science - Engineering" <?php if($admission_sought=="XI - Gurukul Science - Engineering"){?>selected="selected"<?php } ?>>XI - Gurukul Science - Engineering</option>
                                                        <option value="XI Commerce" <?php if($admission_sought=="XI Commerce"){?>selected="selected"<?php } ?>>XI &shy; Commerce</option>
                                                        <option value="XI Humanities" <?php if($admission_sought=="XI Humanities"){?>selected="selected"<?php } ?>>XI &shy; Humanities</option>
                                                        <!----  <option value="VI-Arjuna Cricket">VI-Arjuna Cricket</option>
                                                            <option value="VI-Arjuna Football">VI-Arjuna Football</option>
                                                            <option value="VI-Arjuna Tennis">VI-Arjuna Tennis</option>
                                                            <option value="VII-Arjuna Cricket">VII-Arjuna Cricket</option>
                                                            <option value="VII-Arjuna Football">VII-Arjuna Football</option>
                                                            <option value="VII-Arjuna Tennis">VII-Arjuna Tennis</option>
                                                            <option value="VIII-Arjuna Cricket">VIII-Arjuna Cricket</option>
                                                            <option value="VIII-Arjuna Football">VIII-Arjuna Football</option>
                                                            <option value="VIII-Arjuna Tennis">VIII-Arjuna Tennis</option> ---->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <h2>Referred By</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-line">
                                                <div class="form-group">
                                                    <label>How did you hear about SIS</label>
                                                    <select class="form-control" name="about_inst" id="about_inst">
                                                        <option value="">--Select--</option>
                                                        <option value="Newspaper" <?php if($about_inst=="Newspaper"){?>selected="selected"<?php } ?>>Newspaper</option>
                                                        <option value="India Today" <?php if($about_inst=="India Today"){?>selected="selected"<?php } ?>>India Today</option>
                                                        <option value="Friend" <?php if($about_inst=="Friend"){?>selected="selected"<?php } ?>>Friend</option>
                                                        <option value="Counsellors" <?php if($about_inst=="Counsellors"){?>selected="selected"<?php } ?>>Counselors</option>
                                                        <option value="Web" <?php if($about_inst=="Web"){?>selected="selected"<?php } ?>>Web</option>
                                                        <option value="SMS" <?php if($about_inst=="SMS"){?>selected="selected"<?php } ?>>SMS</option>
                                                        <option value="Education Fair" <?php if($about_inst=="Education Fair"){?>selected="selected"<?php } ?>>Education Fair</option>
                                                        <option value="Boardings" <?php if($about_inst=="Boardings"){?>selected="selected"<?php } ?>>Hoardings</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2>Login Details</h2>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Username<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="text" name="uname" id="uname" value="<?php if($uname!=''){ echo $uname;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Password<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="password" name="password" id="password" value="<?php if($password!=''){ echo $password;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Confirm Password<strong class="text-red">*</strong></label>
                                                    <input class="form-control" required type="password" name="cpassword" id="cpassword" value="<?php if($cpassword!=''){ echo $cpassword;} else{echo '';} ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <!--<div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <img src="captcha_code_file.php?rand=<?php //echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
                                                    <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
                                                    Refesh Captcha <a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-line">
                                                <div class="form-group">
                                                    <input name="captcha" id="captcha-form" placeholder="Enter Captcha" type="text" value=""  class="form-control" />
                                                </div>
                                            </div>-->
                                             <div class="col-lg-12 form-line">
                                                <div class="form-group ">
                   <input type="text" class="form-control" placeholder="Capcha Code" name="capcha" id="capcha" autocomplete="off">
                </div>
                <div class="form-group " align="center"><br>
                   <div style="width:350px; height:40px;"><div id="display_capcha_code" style="width:125px;height:30px;float:left;background-color:#EFEFEF;padding-top:5px;font-size:25px;"></div><div style="width:5px; height:40px;float:left;"></div><img src="refresh_icon.png" onclick="refresh_fun()" height="28" style="cursor:pointer;float:left;" title="Refresh"></div>
                   <input type="hidden" id="capcha_check" name="capcha_check">
                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <button type="submit" class="btn btn-common" name="apply" value="Submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
            var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + '' + b + '' + '' + c + '' + d + '' + e + ''+ f + '' + g;
                    $('#display_capcha_code').html(code);
                    $('#capcha_check').val(code);

function refresh_fun()
  {
  var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + '' + b + '' + '' + c + '' + d + '' + e + ''+ f + '' + g;
                    $('#display_capcha_code').html(code);
                     $('#capcha_check').val(code);
  }
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
        <script>
            $(document).ready(function() {
                  // validate the comment form when it is submitted
                  //$("#commentForm").validate();
                  
                  // validate signup form on keyup and submit
                  $("#appform").validate({
                  	rules: {
                  		fname: "required",
                  		lname: "required",
                  		dd:"required",
                  		mon:"required",
                  		yr:"required",
                  		onlinetest_date:"required",
                  		father_fname:"required",
                  		father_lname:"required",
                  		mobile:{
                  			required: true,
                  			number: true,
            
                  			minlength: 10
            
                  		},
                  		email: {
                  			required: true,
                  			email: true
                  		},
                  		comm_add1:"required",
                  		comm_add2:"required",
                  		comm_country:"required",
            
                  		comm_state:"required",
                  		comm_city:"required",
                  		comm_pin:{
                  			required: true,
            
                  			minlength: 6
            
            
                  		},
                  		classname:"required",
                  		schoolname:"required",
                  		admission_sought:"required",
            
            
                  		uname: {
                  			required: true,
                  			minlength: 2
                  		},
                  		password: {
                  			required: true,
                  			minlength: 5
                  		},
                  		cpassword: {
                  			required: true,
                  			minlength: 5,
                  			equalTo: "#password"
                  		}
            
            
            
                  	},
                  	messages: {
                  		fname: "Enter first Name",
                  		lname: "Enter lastname",
                  		dd:"Select Day",
                  		mon:"Select Month.",
                  		yr:"Select Year",
                  		onlinetest_date:"Select Online Test Date",
                  		father_fname:"Enter first Name",
                  		father_lname:"Enter Last Name.",
            
                  		comm_add1:"Enter Address1",
                  		comm_add2:"Enter Address2.",
                  		comm_country:"Select Country.",
                  		comm_state:"Enter State.",
                  		comm_city:"Enter City.",
                  		comm_pin:"Enter 6 Digit Pin code.",
                  		classname:"Select class.",
                  		schoolname:"Enter School Name.",
                  		admission_sought:"Select Admission Class.",
                  		uname: {
                  			required: "Enter a username",
                  			minlength: "Your username must consist of at least 2 characters"
                  		},
                  		password: {
                  			required: "Enter your password",
                  			minlength: "Your password must be at least 5 characters long"
                  		},
                  		confirm_password: {
                  			required: "Enter your password"
            
            
                  		},
                  		email: "Enter a valid email address"
            
                  	}
                  });
                  
                  // propose username by combining first- and lastname
                  
                  
                  //code to hide topic selection, disable for demo
                  
              });
        </script>
        <script>
            function state_show(state_val){		
            	if(state_val == 'India'){
            		$('#state').css('display', 'block');
            		$('#comm_state').css('display', 'none');
            	}else{
            		$('#state').css('display', 'none');
            		$('#comm_state').css('display', 'block');
            	}
            }
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