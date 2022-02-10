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
		<title>Pay Fees Online - Selaqui Boarding School Dehradun</title>
		<meta name="description" content="Existing Students and New Students can Pay fees online. SelaQui Boarding school dehradun.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Pay Fees Online</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<strong class="text-green">Understand the online payment process</strong>
							</p>
							<br>
							<h2> FOR EXISITING STUDENTS </h2>
							<ol>
								<li>Click this link : <a href="https://smarthubeducation.hdfcbank.com/SmartFees/Landing.action?instId=5129" target="_blank">SMART HUB EDUCATION 
									</a>
								</li>
								<li>Please put the student admission No</li>
								<li>Enter your OTP received on your Mobile and after that you can view the fee for payment</li>
								<li> Select Fees and Proceed For Payment</li>
								<li>Accept Terms & Conditions for Payment.</li>
								<li>Select Mode of Payment :DEBIT CARD/ CREDIT CARD/ NET BANKING
								</li>
								<li>
									<strong>In case opted for-</strong>
									<ul>
										<li><strong>Debit/Credit Card</strong> – You will be directed to pay through Bank Debit/ Credit Card</li>
										<li> <strong>Net Bankin</strong>g – Your will directed to choose from multiple Banks for payment.</li>
									</ul>
								</li>
								<li>After That generate the E recipt</li>
							</ol>
							<p class="text-left">
								<a href="
									https://smarthubeducation.hdfcbank.com/SmartFees/Landing.action?instId=5129" target="_blank" class="btn btn-common">Pay Now</a>
							</p>
							<br>
							<br>
							<br>
							<h2> FOR NEW STUDENTS </h2>
							<ol>
								<li>Click this link : <a href="https://smarthubeducation.hdfcbank.com/SmartFees/Landing.action?instId=4980" target="_blank">SMART HUB EDUCATION 
									</a>
								</li>
								<li>First Select the Nature of Fee
								</li>
								<li>Fill up the all mandatory fields 
								</li>
								<li> Select Fees and Proceed For Payment
								</li>
								<li>Accept Term & Condition
								</li>
								<li>Select Mode of Payment :DEBIT CARD/ CREDIT CARD/ NET BANKING
								</li>
								<li>
									<strong>In case opted for-</strong>
									<ul>
										<li><strong>Debit/Credit Card</strong> – You will be directed to pay through Bank Debit/ Credit Card</li>
										<li> <strong>Net Bankin</strong>g – Your will directed to choose from multiple Banks for payment.</li>
									</ul>
								</li>
								<li>After That generate the E recipt</li>
							</ol>
							<p class="text-left">
								<a href="https://smarthubeducation.hdfcbank.com/SmartFees/Landing.action?instId=4980" target="_blank" class="btn btn-common">Pay Now</a>
							</p>
							<p><strong>Note:-</strong>	<br>
								After payment of fees, transaction reference number will be generated and Kindly mail the receipt/reference with admissin name at <a href="mailto:accountsmanager@selaqui.org" target="_blank">accountsmanager@selaqui.org</a> 
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