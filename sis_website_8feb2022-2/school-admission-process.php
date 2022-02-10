<?php
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
		<title>Boarding School Admission Process - SelaQui International School</title>
		<meta name="description" content="Know all about the admission process at SelaQui International School.">
		<meta name="keywords" content="">
		<meta name="robots"content="index,follow">
		<meta name="googlebot"content="INDEX,FOLLOW"/>
		<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
		<meta name="msnbot" content="INDEX,FOLLOW"/>
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
		<?php include('include/class.php'); ?>
		<script language="JavaScript" type="text/javascript">
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Admission Process</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<strong class="text-orange">Class V to XI : Admissions</strong>
							</p>
							<p>Admissions  are open.</p>
							<p>
								<strong class="text-orange">STEP 1 : Registration.</strong>
							</p>
							<p>
								You may register for  the test by making a payment of Registration fee of <strong>Rs 9000</strong> in one of the  following ways.
							</p>
							<ol>
								<li>Demand Draft - Pay to SelaQui International School, payable at Dehradun.</li>
								<li>Cash Payment on campus</li>
								<li>Online transfer or bank deposit - This should be followed by an e-mail with the transaction details.</li>
                                <li>Amount is Non - Refundable</li>
								<li>Online Registration : <a href="registration-form.php" target="_blank"><strong>Click Here</strong></a></li>
							</ol>
							<p>
								In case of online payments or deposit the prospectus and forms will be sent to you by courier along with the syllabus for the entrance test.
							</p>
							<ul>
								<li>The Registration form will need to be sent back after it is filled.</li>
								<li><strong>Documents Required</strong> : Attested copy of Birth Certificate</li>
								<li>Last two year&rsquo;s marksheets/report cards</li>
								<li>Passport Size Photographs – 6 Nos.</li>
							</ul>
							<p>
								<strong class="text-orange">STEP 2 : Entrance Test.</strong>
							</p>
							<ul>
								<li>Please contact the Admission Office to confirm the date for entrance exams.</li>
								<li>An online test can be arranged for students residing outside India upon written request of the parent.</li>
								<li>Admission is granted on the basis of performance in our Entrance Test, the Previous Year's Result and interview with Headmaster on  campus.</li>
							</ul>
							<p>
								<strong class="text-orange">STEP 3 : Confirmation of Admission.</strong>
							</p>
							<p>
								Once the admission is offered to a candidate, it may be confirmed by depositing the admission fee (Non Refundable)of 120,000 with the school office by  informed time and date.
						  </p>
							<!--<p>
								<strong class="text-orange">Admission To Class XI Gurukul programme: Admissions Open</strong>
								</p>
								<ul>
								 <li>Class XI – Integrated IIT programme</li>
								 <li>Intake : 1st October, 2018.</li>
								 <li>Please follow the link below for further information : <a href="registration-form.php" target="_blank"><strong>Gurukul IIT ( Class XI )</strong></a></li>
								</ul>
								<p>
								<strong class="text-orange">Class XI – Integrated  Medical Programme</strong>
								</p>
								<ul>
								<li>Intake : 1st October, 2018.</li>
									<li>Please follow the link below for further information : <a href="registration-form.php" target="_blank"><strong>Gurukul NEET ( Class XI  )</strong></a></li>
								</ul>-->
							<p>
								Admission is based on the pre-board result, entrance test and interview with the Headmaster.
							</p>
							<p>
								All admissions to Class XI will be provisional till such time the Class X results are declared. 
							</p>
							<p>
								<strong class="text-orange">Confirmation of Admission</strong>
							</p>
							<p>
						  Once the admission is offered to a candidate, it may be confirmed by depositing the requisite fee with the school office.</p>
							<p>
								<strong>For any further query please Contact:</strong>
							</p>
							<p>
								<strong class="text-green">Mona Sharma</strong>
							</p>
							<p class="text-green">Admissions</p>
							<p>
								<strong>Phone: <a href="tel:+919927000585" onclick="_gaq.push(['_trackEvent', 'Admission', 'Admission Enquiry']);">+91 - 9927000585</a>, <a href="tel:+919873743433" onclick="_gaq.push(['_trackEvent', 'Admission', 'Admission Enquiry']);">+91 - 9873743433</a></strong>
							</p>
							<p>
								<strong>Email: <a href="mailto:sisadmission@selaqui.org">sisadmission@selaqui.org</a>, <a href="mailto:admissions@selaqui.org">admissions@selaqui.org</a></strong>
							</p>
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