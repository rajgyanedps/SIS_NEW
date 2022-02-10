<?php
session_start();
ob_start();
date_default_timezone_set("Asia/Kolkata");
$apDate = date("Y/m/d H:i:s");
include('include/db.php');
@extract($_GET);
@extract($_POST);
//print_r($_SESSION);
//die();
if (isset($_POST['fname'])) {
    
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
    {
           $secret = '6LcP2qwZAAAAAKXWo5EVzbCT7us525FEO8H4brrE';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        
                if ($responseData->success)
                //if($_POST['apply']=='Submit')
                                {
                                if ($discipline == 'Other') {
                                                $discipline = $interstreamother;
                                }
                                if ($discipline2 == 'Other') {
                                                $discipline2 = $gradustreamother;
                                }
                                if ($university == 'Other') {
                                                $university = $interbordother;
                                }
                                if ($discipline3 == 'Other') {
                                                $discipline3 = $postgradustreamother;
                                }
                                //$dob=$_POST['yr']."-".$_POST['mon']."-".$_POST['dd'];
                                //$availiable=$_POST['yr2']."-".$_POST['mon2'];
                                $dob        = $_POST['dob'];
                                //echo $dob;
                                $availiable = $_POST['joinfrom'];
                                $brkdate    = explode('-', $availiable);
                                $year       = $brkdate[0];
                                $month      = $brkdate[01];
                                //echo $year;
                                //echo $month;
                                $uploaded   = "False";
                                $photoName  = $_FILES['photoUpload']['name'];
                                if ($photoName) {
                                                $uniq      = uniqid("");
                                                $photoName = $uniq . $photoName;
                                                $type      = $_FILES['photoUpload']['type'];
                                                $PATH      = "faculty/photo/";
                                                $photoFile = $PATH . $photoName;
                                                if (!@file_exists($photoFile)) {
                                                                copy($_FILES['photoUpload']['tmp_name'], $photoFile);
                                                                $uploaded = "True";
                                                } else {
                                                                $uploaded = "FALSE";
                                                }
                                }
                                $resumeName = $_FILES['resumeUpload']['name'];
                                if ($resumeName) {
                                                $uniq       = uniqid("");
                                                $resumeName = $uniq . $resumeName;
                                                $type       = $_FILES['resumeUpload']['type'];
                                                $PATH       = "faculty/resume/";
                                                //$PATH=$PATH."/";
                                                $resumeFile = $PATH . $resumeName;
                                                if (!@file_exists($resumeFile)) {
                                                                copy($_FILES['resumeUpload']['tmp_name'], $resumeFile);
                                                } else {
                                                                $uploaded = "FALSE";
                                                }
                                }
                                $insert_qry = "INSERT INTO jobapplication(emp_title,emp_fname,emp_mname,emp_lname,emp_dob,emp_email,emp_photo,emp_resume,emp_cadd,emp_city,emp_state,emp_pin,emp_padd,emp_pcity ,emp_pstate,emp_ppin,    emp_contact,emp_join_from_mon,emp_join_from_yr,emp_post_applied,emp_dept,emp_spec1,emp_spec2,emp_spec3,emp_spec4,emp_spec5,emp_esubject,emp_inter_disp,other_stream_inter,emp_inter_board,other_board_inter,emp_inter_yop,emp_inter_grade,emp_grad_progtype,emp_grad_prog,emp_grad_disp,emp_grad_disp_other,emp_grad_board,    emp_grad_yop,emp_grad_grade,emp_grad_remark,emp_pgrad_progtype,emp_pgrad_prog,emp_pgrad_disp,pg_stream_other,emp_pgrad_board ,emp_pgrad_yop,emp_pgrad_grade,emp_pgrad_remark,mphil_stream ,mphil_univ,     mphil_yop,mphil_grade,mphil_remarks,emp_doct_disp,emp_doct_board,emp_doct_yop,emp_doct_grade,emp_doct_remark,employ_curwork ,employ_cemp,employ_post,employ_sal,    employ_from,employ_to,employ_prew1,employ_pemp1,employ_post1,employ_sal1,employ_from1,employ_to1,employ_prew2,employ_pemp2,employ_post2,employ_sal2,employ_from2,employ_to2,emp_apply_date)
    VALUES ('" . $mr . "','" . addslashes($fname) . "','" . addslashes($mname) . "','" . addslashes($lname) . "','" . addslashes($dob) . "','" . addslashes($email) . "','$photoFile','$resumeFile','" . addslashes($addforcom) . "','" . addslashes($city2) . "','$state','" . addslashes($pin) . "','" . addslashes($permanaentaddress) . "','" . addslashes($pcity2) . "','" . addslashes($pstate2) . "','" . addslashes($ppin2) . "','" . addslashes($contact) . "','$month','$year',
    '" . $_POST['postappliedfor'] . "','" . addslashes($deptcentre) . "','" . addslashes($spec) . "','" . addslashes($spec1) . "','" . addslashes($spec2) . "','" . addslashes($spec3) . "','" . addslashes($spec4) . "','" . addslashes($spec5) . "','" . addslashes($discipline) . "','" . addslashes($other_stream) . "','" . addslashes($university) . "','" . addslashes($other_board1) . "','$yearofpassing','" . addslashes($percentage) . "','" . addslashes($program_type) . "','" . addslashes($program) . "','" . addslashes($discipline2) . "','" . addslashes($grad_stream) . "','" . addslashes($university2) . "','$yearofpassing2','" . addslashes($percentage2) . "','" . addslashes($remark2) . "','" . addslashes($program_type1) . "','" . addslashes($program1) . "','" . addslashes($discipline3) . "','" . addslashes($pg_stream) . "','" . addslashes($university3) . "','$yearofpassing3','" . addslashes($percentage3) . "','" . addslashes($remark3) . "','" . addslashes($mphil) . "','" . addslashes($university4) . "','$yearofpassing4','" . addslashes($percentage4) . "','" . addslashes($remark4) . "','" . addslashes($discipline4) . "','" . addslashes($university5) . "','$yearofpassing5','" . addslashes($percentage5) . "','" . addslashes($remark5) . "','" . addslashes($curw) . "','" . addslashes($currentemployer) . "','" . addslashes($jobdesc1) . "','" . addslashes($salary1) . "','" . addslashes($from) . "','" . addslashes($to) . "','" . addslashes($prvw) . "','" . addslashes($previousemployer1) . "','" . addslashes($jobdesc2) . "','" . addslashes($salary2) . "','" . addslashes($from2) . "','" . addslashes($to2) . "','" . addslashes($prvw2) . "','" . addslashes($previousemployer2) . "','" . addslashes($jobdesc3) . "','" . addslashes($salary3) . "','" . addslashes($from3) . "','" . addslashes($to3) . "','$apDate')";
                                $res_insert = mysql_query($insert_qry) or die(mysql_error());
                                /*  mail sent to hr person regrading application*/
                                $dd        = date("l jS F, Y h:i:s A", strtotime($apDate));
                                $recipient = "ritika.arora@tsei.co.in";
                                //$recipient= "yogesh.gururani@tsei.co.in";
                                $mesg      = 'Dear <strong>HR</strong>,<br/><br/>New Job Application Submitted for the post of "<b>' . $_POST['postappliedfor'] . '</b>" on SelaQui International School.<br/><br/>
            <a href="www.selaqui.org/webadmin/">Click Here To View</a> <br/><br/>Regards,<br/> Team SelaQui International School <br/><br/>';
                                $headers   = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                $headers .= "From: info@selaqui.org" . "\r\n";
                                $subject = "A New Job Application Received on " . $dd;
                                //echo $mesg;
                                mail($recipient, $subject, $mesg, $headers);
                                //mail sent to Employee
                                $recipient1 = $email;
                                $mesg1      = 'Dear <strong> ' . $mr . '&nbsp;' . ucfirst($fname) . ' </strong>,<br/><br/> Thank you for applying for a position at SelaQui International School. We appreciate your interest in becoming a part of SelaQui Family.<br/><br/>
    Your CV/application has been forwarded to the concerned department, if meets their requirement, you may hear from them.<br/><br/>
    Once again we thank you for your interest in SelaQui International School. 
            <br/><br/>Regards,<br> <strong>Human Resource</strong><br>
                    <strong>SelaQui International School</strong>';
                                $headers1   = 'MIME-Version: 1.0' . "\r\n";
                                $headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                $headers1 .= "From: no-reply@selaqui.org" . "\r\n" . "Bcc: headmaster@selaqui.org" . "\r\n";
                                //$headers1 .= "From: no-reply@selaqui.org" . "\r\n"."Bcc: yogesh.gururani@tsei.co.in" . "\r\n";
                                $subject1 = "Acknowledgement for Job Application Submitted on SelaQui International School at " . $dd;
                                //echo $mesg;
                                mail($recipient1, $subject1, $mesg1, $headers1);
                                header("location: thank-you.php");
                                // End Mail Function        
                                unset($_SESSION['6_letters_code']);
                } else {
?>
<script type="text/javascript">
    alert("Robot verification failed, please try again");
    history.go(-1);
</script>
<?
                }
    }
    else
    {
        ?>
<script type="text/javascript">
    alert("Please Select Capcha Check Box");
    history.go(-1);
</script>
<?
        
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
		<title>Job Application - <?php echo $_REQUEST['JobDesignation']; ?></title>
		<meta name="description" content="Job Application - <?php echo $_REQUEST['JobDesignation']; ?>">
		<meta name="keywords" content="boarding schools in india, best boarding schools in india, residential schools in india, best residential schools in india, boarding schools in uttarakhand, residential schools in uttarakhand, international school in india, international schools in uttarakhand">
		<meta name="robots"content="index,follow">
		<meta name="googlebot"content="INDEX,FOLLOW"/>
		<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
		<meta name="msnbot" content="INDEX,FOLLOW"/>
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
		<?php include('include/class.php'); ?>
		<script src='https://www.google.com/recaptcha/api.js' async defer >
		<script language="JavaScript" type="text/javascript">
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
		</script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'AW-1040837567');
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Job Application</h1>
						</div>
						<!--<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/careers.jpg" alt="Headmaster" class="img-fluid">
							</div>
							</div>-->
						<?php 
							$Query =  mysql_query("select subject,JobDescription,CandidateProfile,Qualification from sela_tblcareer where id ='".$_GET['id']."'");
							$result = mysql_fetch_array($Query,MYSQL_ASSOC);
							 // print_r($result);
							 ?>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								Dear Candidate,
							</p>
							<p>
								Thanks for your interest in being part of SelaQui International School. We request you to fill in the details mentioned below to proceed further.
							</p>
							<p>
								Please read the <strong>Job Description </strong> carefully and do verify that your personal profile matches the <strong>Candidate Profile.</strong>
							</p>
							<?php if(trim($result['subject'])!='') {?>
							<p>
								<strong>Job Title: <?=$result['subject']?></strong>
							</p>
							<?} ?>
							<?php if(trim($result['Qualification'])!='') {?>
							<p>
								<strong>Qualification: <?=$result['Qualification']?></strong>
							</p>
							<? }?>	
							<?php if(trim($result['JobDescription'])!='') {?>						
							<p><strong>Job Description: <?=$result['JobDescription']?></strong></p>
							<? }?>
							<?php if(trim($result['CandidateProfile'])!='') {?>
							<p><strong>Candidate Profile: <?=$result['CandidateProfile']?></strong></p>
							<? }?>
							<form role="form" id="contactForm"   action="job-application.php" method="post" enctype="multipart/form-data" name="employment" target="_self" onSubmit="return validate_enquiry();" data-toggle="validator">
								<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
									<div class="form-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<h2>Personal Information</h2>
											</div>
											<div class="col-lg-2 form-line">
												<div class="form-group">
													<label>Title</label>
													<select class="form-control" name="mr"  id="mr" required>
														<option value="">Title</option>
														<option value="Mr">Mr</option>
														<option value="Mrs">Mrs</option>
														<option value="Mrs">Ms</option>
														<option value="Dr">Dr</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>First Name</label>
													<input class="form-control" type="text" name="fname" id="fname" placeholder="Name" value="" required/>
												</div>
											</div>
											<div class="col-lg-3 form-line">
												<div class="form-group">
													<label>Middle Name</label>
													<input class="form-control" type="text" name="mname" id="mname" placeholder="Middle Name" value=""/>
												</div>
											</div>
											<div class="col-lg-3 form-line">
												<div class="form-group">
													<label>Last Name</label>
													<input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name" value="" required/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Date of Birth</label>
													<input class="form-control" type="date" id="dob" name="dob" placeholder="Date of Birth" value="" required/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Email</label>
													<input class="form-control" type="text" name="email" id="email" placeholder="Email" value="" required/>                        
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Current Address</label>
													<textarea rows="2" class="form-control" id="addforcom" name="addforcom" placeholder="Current Address" required></textarea>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>City</label>
													<input class="form-control" type="text" name="city2" id="city2" placeholder="City" value="" required/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>State</label>
													<? 
														$state_qry1="select * from state";
														$state_res1=mysql_query($state_qry1) or die(mysql_error());
														         ?>
													<select class="form-control" name="state" id="state" required="required">
														<option value="">--Select--</option>
														<?
															while($state_row1=mysql_fetch_array($state_res1))
															{
															?>
														<option value="<?=$state_row1['state_name']?>">
															<?=$state_row1['state_name']?>
														</option>
														<?
															}
															?>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Pin</label>
													<input class="form-control" type="text" id="pin" name="pin" placeholder="Pin" value="" required/>
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<div class="form-check">
														<label class="form-check-label">
														<input type="checkbox" class="form-check-input" name="chksame" id="chksame" onClick="usesameadd();" value=""> Tick if permanent address is same as above
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Permanent Address</label>
													<textarea rows="2" class="form-control" id="permanaentaddress" name="permanaentaddress" placeholder="Permanent Address" required></textarea>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>City</label>
													<input class="form-control" type="text" id="pcity2" name="pcity2" placeholder="City" value="" required/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>State</label>
													<input class="form-control" type="text" id="pstate2" name="pstate2" placeholder="State" value="" required/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Pin</label>
													<input class="form-control" type="text" id="ppin2" name="ppin2" placeholder="Pin" value="" required/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Contact no (with STD/ISD code)</label>
													<input class="form-control" type="text" id="contact" maxlength="10" name="contact" onkeypress="return isNumberKey(event)" placeholder="Mobile No." value="" required/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Available to join from</label>
													<input class="form-control" type="month" id="joinfrom" name="joinfrom" placeholder="Month and Year" value="" required/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Department / Centre</label>
													<input class="form-control" type="text" id="deptcentre" name="deptcentre" placeholder="Department / Centre" value=""/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Specialization & Area of Research / Teaching</label>
													<input class="form-control" type="text" id="spec" name="spec" placeholder="Specialization" value=""/>
												</div>
											</div>
											<div class="col-lg-12 form-line">											
												<label>Subject(s) you can teach</label>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">												
													<input class="form-control" type="text" id="spec1" name="spec1" placeholder="Subject1" value=""/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">												
													<input class="form-control" type="text" id="spec2" name="spec2" placeholder="Subject2" value=""/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">												
													<input class="form-control" type="text" id="spec3" name="spec3" placeholder="Subject3" value=""/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">												
													<input class="form-control" type="text" id="spec4" name="spec4" placeholder="Subject4" value=""/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">												
													<input class="form-control" type="text" id="spec5" name="spec5" placeholder="Subject5" value=""/>
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
													<h2>Academic Information</h2>
												</div>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>1. Intermediate Details:</li>
												</ol>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Stream</label>
													<select class="form-control" name="discipline" id="discipline" required onChange="return other_discipline();" required>
														<option value="">--Select--</option>
														<option value="Maths">Maths</option>
														<option value="Biology">Biology</option>
														<option value="Commerce">Commerce</option>
														<option value="Humanities">Humanities</option>
														<option value="Other">Other</option>
													</select>
												</div>
												<div class="form-group" style="display:none;" id="interst">
													<input type="text" name="interstreamother" id="interstreamother" class="form-control" value="" />
												</div>
											</div>
											<div class="col-lg-8 form-line">
												<div class="form-group">
													<label>Board</label>
													<select class="form-control" id="university" name="university" required onChange="return other_board();" required>
														<option value="">Select</option>
														<option value="Andhra Pradesh Board Of Intermediate Education">Andhra Pradesh Board Of Intermediate Education</option>
														<option value="Andhra Pradesh Board Of Secondary Education">Andhra Pradesh Board Of Secondary Education</option>
														<option value="Assam Higher Secondary Education Council">Assam Higher Secondary Education Council</option>
														<option value="Assam Board Of Secondary Education">Assam Board Of Secondary Education</option>
														<option value="Bihar Intermediate Education Council">Bihar Intermediate Education Council</option>
														<option value="Bihar School Examination Board">Bihar School Examination Board</option>
														<option value="Central Board Of Secondary Education">Central Board Of Secondary Education</option>
														<option value="Goa Board Of Secondary and Higher Secondary Education">Goa Board Of Secondary and Higher Secondary Education</option>
														<option value="Gujrat Secondary and Higher Secondary Education Board">Gujrat Secondary and Higher Secondary Education Board</option>
														<option value="Haryana Board Of School Education">Haryana Board Of School Education</option>
														<option value="H.P. Board Of School Education">Bihar School Examination Board</option>
														<option value="J & K Board Of School Education">J & K Board Of School Education</option>
														<option value="Karnataka Dept. Of Pre-University Education">Karnataka Dept. Of Pre-University Education</option>
														<option value="Karnataka Sec. Education Examination Board">Karnataka Sec. Education Examination Board</option>
														<option value="Kerala Board Of Public Examination">Kerala Board Of Public Examination</option>
														<option value="Kerala Board Of Higher Sec.Education">Kerala Board Of Higher Sec.Education</option>
														<option value="Maharastra State Board Of Sec. and Higher Sec. Education">Maharastra State Board Of Sec. and Higher Sec. Education</option>
														<option value="M.P. Board Of Sec. Education">M.P. Board Of Sec. Education</option>
														<option value="Manipur Board Of Education">Manipur Board Of Education</option>
														<option value="Manipur Council Of Higher Sec Education">Manipur Council Of Higher Sec Education</option>
														<option value="Meghalaya Board Of School Education">Meghalaya Board Of School Education</option>
														<option value="Mizoram Board Of School Education">Mizoram Board Of School Education</option>
														<option value="Nagaland Board Of School Education">Nagaland Board Of School Education</option>
														<option value="National Institue Of Open Schooling">National Institue Of Open Schooling</option>
														<option value="Orissa Council Of Higher Sec Education">Orissa Council Of Higher Sec Education</option>
														<option value="Orissa Board Of Sec Education">Orissa Board Of Sec Education</option>
														<option value="Punjab School Education Board">Punjab School Education Board</option>
														<option value="Rajsthan Board Of Sec Education">Rajsthan Board Of Sec Education</option>
														<option value="Tamilnadu Board Of Higher Sec Education">Tamilnadu Board Of Higher Sec Education</option>
														<option value="Tripura Board Of Sec Education">Tripura Board Of Sec Education</option>
														<option value="U.P. Board Of High School And Intermediate Education">U.P. Board Of High School And Intermediate Education</option>
														<option value="West Bengal Board Of Sec Education">West Bengal Board Of Sec Education</option>
														<option value="West Bengal Council Of Higher Sec Education">West Bengal Council Of Higher Sec Education</option>
														<option value="Chattishgarh Board Of Sec Education">Chattishgarh Board Of Sec Education</option>
														<option value="Uttaranchal Shiksha Evm pariksha parishad">Uttaranchal Shiksha Evm pariksha parishad</option>
														<option value="Jharkhand Acadamic Council Ranchi">Jharkhand Acadamic Council Ranchi</option>
														<option value="Other">Other</option>
													</select>
												</div>
												<div class="form-group" style="display:none;" id="interotherb">
													<input type="text" id="interbordother" name="interbordother" class="form-control" value="" />
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Year of passing</label>
													<select class="form-control" name="yearofpassing" required>
														<option value="">--Year--</option>
														<?
															$curyr=date("Y");
															for($i=$curyr;$i>=1950;$i--)
															{
																?>
														<option value="<?=$i?>">
															<?=$i?>																	
														</option>
														<? }?>
													</select>
												</div>
											</div>
											<div class="col-lg-8 form-line">
												<div class="form-group">
													<label>Division/Grade/Percentage</label>
													<input class="form-control" type="text" id="percentage" name="percentage" value="" required/>
												</div>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>2. Graduation Details:</li>
												</ol>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program Type</label>
													<select class="form-control" name="program_type" id="program_type" required>
														<option value="">--Select--</option>
														<option value="General">General</option>
														<option value="Honours">Honours</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program</label>
													<select class="form-control" name="program" id="program" onChange="return select_pt();" required>
														<option value="">--Select--</option>
														<?
															//echo "SELECT prog_name,prog_id FROM programs WHERE prog_cat=1 and prog_name!='' ORDER BY prog_name";
															  $prog_query=mysql_query("SELECT prog_name,prog_id FROM programs WHERE prog_cat=1 and prog_name!='' ORDER BY prog_name" ) or die(mysql_error());
															     while($prog_row=mysql_fetch_array($prog_query))
															  {
															  ?>
														<option value="<?=$prog_row['prog_id']?>">
															<?=$prog_row['prog_name']?>
														</option>
														<?
															}
															?>											            
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Stream</label>
													<div id="pname1">
														<select class="form-control" name="discipline2" id="discipline2" onChange="other_stream2()" required>
															<option value="">--Select--</option>
														</select>
													</div>
												</div>
												<div class="form-group" id="graduotherstream" style="display:none;">
													<input class="form-control" type="text" name="gradustreamother" value="" />
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>University</label>
													<input class="form-control" type="text" id="university2" name="university2" value="" required/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Year of passing</label>
													<select class="form-control" name="yearofpassing2" required>
														<option value="">--Year--</option>
														<?
															$curyr=date("Y");
															for($i=$curyr;$i>=1950;$i--)
															{
																?>
														<option value="<?=$i?>">
															<?=$i?>
														</option>
														<?
															}
															?>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Division/Grade/Percentage</label>
													<input class="form-control" type="text" id="percentage2" name="percentage2" value="" required/>
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Remarks if any (Rank, Hons, Title of thesis, etc.)</label>
													<input class="form-control" type="text" id="remark2" name="remark2" value=""/>
												</div>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>3. Post Graduation Details:</li>
												</ol>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program Type</label>
													<select class="form-control" name="program_type1" id="program_type1" required >
														<option value="">--Select--</option>
														<option value="General">General</option>
														<option value="Honours">Honours</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program</label>
													<select class="form-control" name="program1" id="program1" onChange="return select_pt1();" required>
														<option value="">--Select--</option>
														<?
															$pg_query=mysql_query("SELECT prog_name,prog_id FROM programs WHERE prog_cat=2 and prog_name!='' ORDER BY prog_name" ) or die(mysql_error());
															   while($pg_row=mysql_fetch_array($pg_query))
															{
															?>
														<option value="<?=$pg_row['prog_id']?>">
															<?=$pg_row['prog_name']?>
														</option>
														<?
															}
															?>											            
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Stream</label>
													<div id="pname2">
														<select class="form-control" name="discipline3" id="discipline3" onChange="other_stream3()" required>
															<option value="">--Select--</option>
														</select>
													</div>
												</div>
												<div class="form-group" id="postgraduotherstream" style="display:none;">
													<input class="form-control" type="text" name="postgradustreamother" value="" />
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>University</label>
													<input class="form-control" type="text" id="university3" name="university3" value="" required/>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Year of passing</label>
													<select class="form-control" name="yearofpassing3" required>
														<option value="">--Year--</option>
														<?
															$curyr=date("Y");
															for($i=$curyr;$i>=1950;$i--)
															{
																?>
														<option value="<?=$i?>">
															<?=$i?>													  				
														</option>
														<?
															}
															?>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Division/Grade/Percentage</label>
													<input class="form-control" type="text" id="percentage3" name="percentage3" value="" required/>
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Remarks if any (Rank, Hons, Title of thesis, etc.)</label>
													<input class="form-control" type="text" id="remark3" name="remark3" value=""/>
												</div>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<div class="form-check">
														<label class="form-check-label">
														<input type="checkbox" class="show_hide form-check-input" value=""> Other Academic Information
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row slidingDiv" style="display:none;">
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>4. M.Phil Details:</li>
												</ol>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program Type</label>
													<input class="form-control" type="text" id="mphil" name="mphil" value=""/>
												</div>
											</div>
											<div class="col-lg-8 form-line">
												<div class="form-group">
													<label>University</label>
													<input class="form-control" type="text" id="university4" name="university4" value=""/>
												</div>
											</div>
											<div class="col-lg-2 form-line">
												<div class="form-group">
													<label>Year of passing</label>
													<select class="form-control" name="yearofpassing4">
														<option value="">--Year--</option>
														<?
															$curyr=date("Y");
															for($i=$curyr;$i>=1950;$i--)
															{
																?>
														<option value="<?=$i?>">
															<?=$i?>
														</option>
														<?
															}
															?>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Division/Grade/Percentage</label>
													<input class="form-control" type="text" id="percentage4" name="percentage4" value=""/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Remarks if any (Rank, Hons, Title of thesis, etc.)</label>
													<input class="form-control" type="text" id="remark4" name="remark4" value=""/>
												</div>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>5. Doctorate Details:</li>
												</ol>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Program Type</label>
													<input class="form-control" type="text" id="discipline4" name="discipline4" value=""/>
												</div>
											</div>
											<div class="col-lg-8 form-line">
												<div class="form-group">
													<label>University</label>
													<input class="form-control" type="text" id="university5" name="university5" value=""/>
												</div>
											</div>
											<div class="col-lg-2 form-line">
												<div class="form-group">
													<label>Year of passing</label>
													<select class="form-control" name="yearofpassing5">
														<option value="">--Year--</option>
														<?
															$curyr=date("Y");
															for($i=$curyr;$i>=1950;$i--)
															{
																?>
														<option value="<?=$i?>">
															<?=$i?>
														</option>
														<?
															}
															?>
													</select>
												</div>
											</div>
											<div class="col-lg-4 form-line">
												<div class="form-group">
													<label>Division/Grade/Percentage</label>
													<input class="form-control" type="text" id="percentage5" name="percentage5" value=""/>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<label>Remarks if any (Rank, Hons, Title of thesis, etc.)</label>
													<input class="form-control" type="text" id="remark5" name="remark5" value=""/>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
									<div class="form-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<h2>Employment Information</h2>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>(a) Current Employment Details:</li>
												</ol>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Are you currently working ?</label>
													<select class="form-control" name="curw"  id="curw" onChange="show_hide_curw()">
														<option value="">--Select--</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
												<div class="row" id="curwd" style="display:none;">
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Current Employer</label>
															<input class="form-control" type="text" name="currentemployer" id="currentemployer" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Post and job description</label>
															<input class="form-control" type="text" name="jobdesc1" id="jobdesc1" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Gross Salary Detail (Monthly)</label>
															<input class="form-control" type="text" name="salary1" id="salary1" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label for="exampleInputEmail1">Employment Period</label>
															<div class="input-group">
																<select class="form-control" name="from">
																	<option value="">--From--</option>
																	<?
																		$curyr=date("Y");
																		for($i=$curyr;$i>=1950;$i--)
																		{
																			?>
																	<option value="<?=$i?>">
																		<?=$i?>
																	</option>
																	<?
																		}
																		?>
																</select>
																<select class="form-control" name="to">
																	<option value="">--To--</option>
																	<option value="Till Date">Till Date</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-12">
														<ol class="olGrid">
															<li>If current employment period is 8 month or below, please mention your previous employment details.</li>
														</ol>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<ol class="olGrid">
													<li>(b) Previous Employment Details:</li>
												</ol>
											</div>
											<div class="col-lg-12 form-line">
												<div class="form-group">
													<label>Previous Employment Details ?</label>
													<select class="form-control" name="prvw"  id="prvw" onChange="show_hide_curw()">
														<option value="">--Select--</option>
														<option value="Yes">Yes</option>
														<option value="No">No</option>
													</select>
												</div>
												<div class="row" id="prvwd" style="display:none;">
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Previous Employer 1</label>
															<input class="form-control" type="text" name="previousemployer1" id="previousemployer1" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Post and job description</label>
															<input class="form-control" type="text" name="jobdesc2" id="jobdesc2" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Gross Salary Detail (Monthly)</label>
															<input class="form-control" type="text" name="salary2" id="salary2" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label for="exampleInputEmail1">Employment Period</label>
															<div class="input-group">
																<select class="form-control" name="from2">
																	<option value="">--From--</option>
																	<?
																		$curyr=date("Y");
																		for($i=$curyr;$i>=1950;$i--)
																		{
																			?>
																	<option value="<?=$i?>">
																		<?=$i?>
																	</option>
																	<?
																		}
																		?>
																</select>
																<select class="form-control" name="to2">
																	<option value="">--To--</option>
																	<? $curyr=date("Y");
																		for($i=$curyr;$i>=1950;$i--)
																		   {
																		?>
																	<option value="<?=$i?>">
																		<?=$i?>
																	</option>
																	<?
																		}
																		?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Previous Employer 2</label>
															<input class="form-control" type="text" name="previousemployer2" id="previousemployer2" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Post and job description</label>
															<input class="form-control" type="text" name="jobdesc3" id="jobdesc3" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label>Gross Salary Detail (Monthly)</label>
															<input class="form-control" type="text" name="salary3" id="salary3" value=""/>
														</div>
													</div>
													<div class="col-lg-6 form-line">
														<div class="form-group">
															<label for="exampleInputEmail1">Employment Period</label>
															<div class="input-group">
																<select class="form-control" name="from3">
																	<option value="">--From--</option>
																	<?
																		$curyr=date("Y");
																		for($i=$curyr;$i>=1950;$i--)
																		{
																			?>
																	<option value="<?=$i?>">
																		<?=$i?>
																	</option>
																	<?
																		}
																		?>
																</select>
																<select class="form-control" name="to3">
																	<option value="">--To--</option>
																	<?
																		$curyr=date("Y");
																		for($i=$curyr;$i>=1950;$i--)
																		{?>
																	<option value="<?=$i?>">
																		<?=$i?>
																	</option>
																	<?
																		} ?>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
									<div class="form-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<h2>Required Documents</h2>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label>Photo Upload</label>
													<div class="input-group">
														<input type="text" placeholder="Upload Photo" class="form-control" >
														<span class="input-group-prepend"><span class="btn btn-primary btn-file"><i class="fa fa-folder-open-o" aria-hidden="true"></i>
														<input type="file" name="photoUpload" id="photoUpload" required/>
														</span></span> 
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label>Resume Upload</label>
													<div class="input-group">
														<input type="text" placeholder="Upload File" class="form-control">
														<span class="input-group-prepend"><span class="btn btn-primary btn-file"><i class="fa fa-folder-open-o" aria-hidden="true"></i>
														<input type="file" name="resumeUpload" id="resumeUpload" required />
														</span></span> 
													</div>
												</div>
											</div>
											<!--<div class="col-lg-6 form-line">
												<div class="form-group">
													<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
													Refesh Captcha <a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>
												</div>
											</div>
											<div class="col-lg-6 form-line">
												<div class="form-group">
													<input name="validator" id="validator" placeholder="Enter Captcha" type="text" value=""  class="form-control" />
												</div>
											</div>-->
											<div class="col-lg-12 form-line">
                                           <div class="form-group">
                                          <div class="g-recaptcha  mx-auto" data-sitekey="6LcP2qwZAAAAALNqgGXU6MrJ0KNA4cY_SGRRQO__" >     
                                            </div>
                                            </div>
                                         </div> 
											<div class="col-lg-12">
												<div class="form-submit">
													<input type="hidden" name="postappliedfor"  value="<?=$_GET['JobDesignation']?>"/>											
													<button type="submit" class="btn btn-common" name="apply" value="Submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
													<div id="msgSubmit" class="h3 text-center hidden"></div>
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
		<script src="assets/js/form-validation.js"></script>
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
		<script type="text/javascript">
			$(document).ready(function(){
			
			
				$(".slidingDiv").hide();
				$(".show_hide").show();
			
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle();
				});
			
			});
			
		</script>
		<script type="text/javascript">
			function echeck(str) 
			{
			
				var at="@"
				var dot="."
				var lat=str.indexOf(at)
				var lstr=str.length
				var ldot=str.indexOf(dot)
				if (str.indexOf(at)==-1)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.indexOf(at,(lat+1))!=-1)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.indexOf(dot,(lat+2))==-1)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				if (str.indexOf(" ")!=-1)
				{
					alert("Invalid E-mail ID");
					return false;
				}
			
				return true					
			}
			
			function validate_enquiry()
			{
				if(document.employment.fname.value=="")
				{
					alert("Enter your first name");
					document.employment.fname.focus();
					return false;
				}
			
				if(document.employment.lname.value=="")
				{
					alert("Enter your  last name");
					document.employment.lname.focus();
					return false;
				}
			
				if(document.employment.dd.value=="")
				{
					alert("Select date in date of birth");
					document.employment.dd.focus();
					return false;
				}
			
				if(document.employment.mon.value=="")
				{
					alert("Select month in date of birth");
					document.employment.mon.focus();
					return false;
				}
				if(document.employment.yr.value=="")
				{
					alert("Select year in date of birth");
					document.employment.yr.focus();
					return false;
				}
			
			
			
				var emailID=document.employment.email;
				if ((emailID.value==null)||(emailID.value==""))
				{
					alert("Please enter your email id");
					document.employment.email.focus();
					return false;
				}
				if (echeck(emailID.value)==false)
				{
					document.employment.email.value="";
					document.employment.email.focus();
					return false;
				}
			
				if(document.employment.yr.value=="")
				{
					alert("Select year in date of birth");
					document.employment.yr.focus();
					return false;
				}
			
				if(document.employment.addforcom.value=="")
				{
					alert("Enter your current address.");
					document.employment.addforcom.focus();
					return false;
				}
				if(document.employment.city2.value=="")
				{
					alert("Enter city.");
					document.employment.city2.focus();
					return false;
				}
				if(document.employment.state.value=="")
				{
					alert("Select state.");
					document.employment.state.focus();
					return false;
				}
			
				if((document.employment.pin.value=="") || (document.employment.pin.value==null))
				{
					alert("Kindly enter pin no");
					document.employment.pin.focus();
					return false;
				}
			
				if(document.employment.pin.value!="")
				{
					if(document.employment.pin.value.length!=6)
					{
						alert("Kindly enter correct pin length number");
						document.employment.pin.focus();
						return false;
					}
					else if (isNaN(parseInt(document.employment.pin.value))) {
						alert("Kindly enter correct pin number");
						document.employment.pin.focus();
						return false;
					}
				}
			
				if(document.employment.contact.value=="")
				{
					alert("Enter your contact no.");
					document.employment.contact.focus();
					return false;
				}
				if(document.employment.deptcentre.value=="")
				{
					alert("Enter department/centre.");
					document.employment.deptcentre.focus();
					return false;
				}
			/*if(document.employment.spec.value=="")
			{
			alert("Enter Specialization & Present Area of Research/Teaching.");
			document.employment.spec.focus();
			return false;
			}*/
			if(document.employment.spec1.value=="")
			{
			alert("Please fill subject you can teach.");
			document.employment.spec1.focus();
			return false;
			}
			
			if(document.employment.discipline.value=="")
			{
			alert("Select stream in intermediate details.");
			document.employment.discipline.focus();
			return false;
			}
			if(document.employment.discipline.value=="Other" && document.employment.interstreamother.value=="")
			{
			alert("Enter stream in intermediate  details.");
			document.employment.interstreamother.focus();
			return false;
			}
			
			
			if(document.employment.university.value=="")
			{
			alert("Select board in intermediate  details.");
			document.employment.university.focus();
			return false;
			}
			
			if(document.employment.university.value=="Other" && document.employment.interbordother.value=="")
			{
			alert("Enter board in intermediate  details.");
			document.employment.interbordother.focus();
			return false;
			}
			
			if(document.employment.yearofpassing.value=="")
			{
			alert("Enter year of passing in intermediate  details.");
			document.employment.yearofpassing.focus();
			return false;
			} 
			if(document.employment.percentage.value=="")
			{
			alert("Enter Division/Grade/Percentage in intermediate  details.");
			document.employment.percentage.focus();
			return false;
			} 
			
			
			if(document.employment.program_type.value=="")
			{
			alert("Select your graduation programs type.");
			document.employment.program_type.focus();
			return false;
			} 
			
			if(document.employment.program.value=="")
			{
			alert("Select your graduation programs.");
			document.employment.program.focus();
			return false;
			} 
			if(document.employment.discipline2.value=="")
			{
			alert("Select your graduation stream.");
			document.employment.discipline2.focus();
			return false;
			} 
			
			if(document.employment.discipline2.value=="Other" && document.employment.gradustreamother.value=="")
			{
			alert("Enter your graduation stream.");
			document.employment.gradustreamother.focus();
			return false;
			}
			
			
			if(document.employment.university2.value=="")
			{
			alert("Enter your graduation university.");
			document.employment.university2.focus();
			return false;
			}  
			if(document.employment.yearofpassing2.value=="")
			{
			alert("Select your graduation year of passing.");
			document.employment.yearofpassing2.focus();
			return false;
			}  
			
			if(document.employment.percentage2.value=="")
			{
			alert("nter your graduation Division/Grade/Percentage.");
			document.employment.percentage2.focus();
			return false;
			}  
			
			
			if(document.employment.curw.value=="")
			{
			alert("Select currently working status.");
			document.employment.curw.focus();
			return false;
			}
			else {
			if(document.employment.currentemployer.value=="" && document.employment.curw.value=="Yes")
			{
			alert("Fill  your current employer.");
			document.employment.currentemployer.focus();
			return false;
			}
			
			if(document.employment.jobdesc1.value=="" && document.employment.curw.value=="Yes")
			{
			alert("Fill  your post and job description.");
			document.employment.jobdesc1.focus();
			return false;
			}
			
			if(document.employment.salary1.value=="" && document.employment.curw.value=="Yes")
			{
			alert("Fill  your  salary details.");
			document.employment.salary1.focus();
			return false;
			}
			
			if(document.employment.from.value=="" && document.employment.curw.value=="Yes")
			{
			alert("Fill  your from year.");
			document.employment.from.focus();
			return false;
			}
			if(document.employment.to.value=="" && document.employment.curw.value=="Yes")
			{
			alert("Fill your to year.");
			document.employment.to.focus();
			return false;
			}
			}
			
			
			if(document.employment.resumeUpload.value=="")
			{
			alert("Kindly upload your resume.");
			document.employment.resumeUpload.focus();
			return false;
			} 
			
			if(document.employment.validator.value=="")
			{
			alert("Please Enter The Text Displayed in Image Below.");
			document.employment.validator.focus();
			return false;
			}
			return true					
			}
			
			
			
			function show_hide_curw()
			
			{
			var obj=document.getElementById("curw");
			if(obj.value=="Yes" )
			{
			document.getElementById("curwd").style.display = '';		
			}
			else
			{
			document.getElementById("curwd").style.display = 'none';
			}
			
			var obj=document.getElementById("prvw");
			if(obj.value=="Yes" )
			{
			document.getElementById("prvwd").style.display = '';
			}
			else 
			{
			document.getElementById("prvwd").style.display = 'none';
			}
			
			var obj=document.getElementById("prvw2");
			if(obj.value=="Yes" )
			{
			document.getElementById("prvwd2").style.display = '';
			}
			else
			{
			document.getElementById("prvwd2").style.display = 'none';
			}
			}
			function usesameadd()
			{ //v9.0
			
			if(chksame.checked == false) { return; }
			else	{//alert();
			document.employment.permanaentaddress.value  = document.employment.addforcom.value;
			document.employment.pcity2.value  = document.employment.city2.value;
			document.employment.pstate2.value  = document.employment.state.value;
			document.employment.ppin2.value  = document.employment.pin.value;
			}
			
			}
			
			function other_discipline()
			{
			var city=document.getElementById('discipline').value;	
			if(city == 'Other')
			{
			document.getElementById('interst').style.display='block';
			document.getElementById('interstreamother').focus();
			
			}
			else
			{
			document.getElementById('interst').style.display='none';
			}
			}
			
			function other_board()
			{  
			var board=document.getElementById('university').value;	
			if(board == 'Other')
			{
			document.getElementById('interotherb').style.display='block';
			document.getElementById('interbordother').focus();
			}
			else
			{
			document.getElementById('interotherb').style.display='none';
			}
			}
			
			function other_stream2(){
			
			var straem=document.getElementById('discipline2').value;	
			
			//var elm = document.getElementById('discipline2');
			//var straem=elm.options[elm.selectedIndex].value;
			if(straem == 'Other')
			{
			document.getElementById("graduotherstream").style.display='block';
			document.getElementById("gradustreamother").focus();
			}
			else
			{
			document.getElementById("graduotherstream").style.display='none';
			}
			}
			
			
			
			function other_stream3()
			{
			var straempg=document.getElementById('discipline3').value;	
			if(straempg == 'Other')
			{
			document.getElementById('postgraduotherstream').style.display='block';
			document.getElementById('postgradustreamother').focus();
			}
			else
			{
			document.getElementById('postgraduotherstream').style.display='none';
			}
			}
			var xmlHttp1
			function select_pt()
			{
			var program = document.getElementById('program').value;
			
			xmlHttp1=GetXmlHttpObject()
			if (xmlHttp1==null)
			{
			alert ("Browser does not support HTTP Request")
			return
			}
			var url="prog.php"
			url=url+"?program="+program
			url=url+"&sid="+Math.random()
			xmlHttp1.onreadystatechange=statechanged1
			xmlHttp1.open("GET",url,true)
			
			xmlHttp1.send(null)
			}
			
			function statechanged1(){
			
			if (xmlHttp1.readyState==4 || xmlHttp1.readyState=="complete")
			{
			document.getElementById("pname1").innerHTML=xmlHttp1.responseText;
			//alert(xmlHttp1.responseText);
			}
			}
			
			
			function GetXmlHttpObject(){
			var xmlHttp1=null;
			try
			{
			// Firefox, Opera 8.0+, Safari
			xmlHttp1=new XMLHttpRequest();
			}
			catch (e)
			{
			//Internet Explorer
			try
			{
			xmlHttp1=new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e)
			{
			xmlHttp1=new ActiveXObject("Microsoft.XMLHTTP");
			}
			}
			return xmlHttp1;
			}
			
			
			
			
			var xmlHttp
			function select_pt1()
			{
			var program1 = document.getElementById('program1').value;
			
			xmlHttp=GetXmlHttpObject()
			if (xmlHttp==null)
			{
			alert ("Browser does not support HTTP Request")
			return
			}
			var url="prog1.php"
			url=url+"?program1="+program1
			url=url+"&sid="+Math.random()
			xmlHttp.onreadystatechange=statechanged
			xmlHttp.open("GET",url,true)
			
			xmlHttp.send(null)
			}
			
			function statechanged(){
			
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
			{
			document.getElementById("pname2").innerHTML=xmlHttp.responseText
			//alert(xmlHttp1.responseText);
			}
			}
			
			function GetXmlHttpObject(){
			var xmlHttp=null;
			try
			{
			// Firefox, Opera 8.0+, Safari
			xmlHttp=new XMLHttpRequest();
			}
			catch (e)
			{
			//Internet Explorer
			try
			{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e)
			{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			}
			return xmlHttp;
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