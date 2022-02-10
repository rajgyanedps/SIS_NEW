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
		<title>Akash house - Selaqui International School</title>
		<meta name="description" content="Know all about Akash house at Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">AKASH HOUSE - “ Leadership is based on a spiritual quality; The power to inspire, 
The power to inspire others to follow.”  

</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p><em>“Citius, Altius, Fortius”</em> is the motto of the Akash House; it symbolizes unity and exuberance of the human spirit. These three Latin words mean <em>“Swifter, Higher, Stronger.” </em></p>
                            <p>
The “Blue Eagles” Sqaud at SelaQui is all about perseverance, ability, performance. It is all about living with one another as well as competing with oneself! There are many important ingredients in one's ability to excel, yet one of the most important and fundamental attributes needed to perform and succeed in life is <em>“Belief”</em>.</p>
<p>
Once we believe in something, only then can we translate it into reality. However, it is important to understand that beliefs based on lack of ability and perseverance will not create any positive results;This is what each and every one of  Akashian in our boarding house has to understand and believe in , oneself and in one's ability to make a difference. 
</p>
<p>
The attitude of the house is lively. Members of the house enjoy participating in inter-house events, not only because it gives us an excuse to cheer and support one another, but also for the satisfaction of representing the house. Whether it wouldd be house challenge or junior debating, you can always guarantee a big crowd and a strong presence from the “Blue Eagle” squad. The bottom line is that if each one of us works on our areas of influence with belief, integrity, and perseverance, then collectively represent a culture of change!!
</p>
<p>
Akash House symbolizes the intellectual belief of SelaQui being a hub and platform for meaningful research emanating from different parts of our country as well as from different parts of the world. Our motto like the Olympic motto would be to strive to work towards being a globally recognized source for current research and information in our profession.

						  </p>
                          <p>With you. </p>
<p>We believe.. </p>
<p>We can achieve… </p>
<p>Citius, Altius, Fortius!!!
</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
								  <img src="assets/images/mukul.jpg" alt="Mr. Mukul Gautam" data-toggle="tooltip" title="Mr. Mukul Gautam" class="img-fluid">
									<p>Mr. Mukul Gautam</p>
								</div>
							</div>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
								  <img src="assets/images/akash-logo.jpg" alt="Akash House Logo" data-toggle="tooltip" title="Akash House Logo" class="img-fluid">
									<p>Akash House Logo</p>
								</div>
							</div>
							<p>
								<strong>Best Wishes,</strong>
							</p>
							<p>
								<strong>AKASH HOUSE MASTER</strong>
							</p>
							<p>
								<strong class="text-green">Mr. Mukul Gautam</strong>
							</p>
							<p>
								<strong>Mob. 9927016229</strong>
							</p>
							<p>
								<strong>Email: <a href="mailto:mukulg@selaqui.org">mukulg@selaqui.org</a></strong>
							</p>
						</div>
					</div>
                    
                    <div class="col-xl-9"><br><br>
                    <h5>Akash House Reports</h5>
                    
                    <div class="time-countdown justify-content-center wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
							<ol class="olGrid">
								<li>Report<a href="Download/house/akash/Akash-House-Newsletter-Feb-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/Akash-House-Newsletter-Jan-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/Akash-House-November-2019-Newsletter.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/Akash-House-October-2019-Newsletter.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/Akash-House-September-Newsletter.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/NewsLetter-Akash-House-August-Issue.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>Report<a href="Download/house/akash/Akash_House_Report_December_2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/akash/Akash_House_Report_November_2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								
							</ol>
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