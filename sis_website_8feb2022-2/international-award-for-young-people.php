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
		<title>International Award for Young People - Selaqui International School</title>
		<meta name="description" content="Get information about International Award for Young People, self development program for young people.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">International Award For Young People</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/iayp.jpg" alt="International Award - SelaQui" data-toggle="tooltip" title="International Award - SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/iayp_log.png" alt="International award for young people" data-toggle="tooltip" title="International award for young people" class="img-fluid">
								</div>
							</div>
							<p>
								<a class="linkforseo" href="https://www.selaqui.org/"><strong class='goudy'>SelaQui</strong> International School</a> has introduced IAYP as a part of its co-curricular activity program. The International Award for Young People is an exciting self-development program for the youth, it equips the young with life skills , builds confidence and engages the youth with their communities.
							</p>
							<p>&nbsp;
							</p>
							<p>
								IAYP aims at motivating young people aged between 14 and 25 years to become involved in a balanced program of voluntary self-development activities to take them through the potentially difficult period between adolescence and adulthood.
							</p>
							<p>
								The Award’s concept is one of individual challenge, giving young people a balanced, non-competitive program of voluntary activities which encourage personal discovery and growth, self-reliance, perseverance, responsibility to themselves and service to their community. Those who participate in the Award are expected to follow its requirements in a non-competitive manner with a determination to succeed, either individually or as part of a team. The Award therefore is challenging, and can be undertaken at your own pace. 
							</p>
							<p>
								<strong class="text-green">The Participation Age is between 14 and 25 years. The basic structure of the Award consists of 4 mandatory sections</strong>
							</p>
							<ul>
								<li>Services</li>
								<li>Adventurous</li>
								<li>Journey</li>
								<li>Skills</li>
								<li>Physical Recreation</li>
							</ul>
							<p>
								There are 3 levels of the Award – Bronze, Silver & Gold. Participants must complete the four mandatory sections of Service, Adventurous Journey, Skill & Physical Recreation.
							</p>
							<p>
								Participants can undertake all three categories of the Award programme or enter directly at any of the three levels in the following age group; Bronze Award (for those over 14), Silver Award (for those over 15) and Gold Award (for those over 16 years).
							</p>
							<p>
								<strong class="text-green">The minimum period of participation is</strong>
							</p>
							<ul>
								<li>6 months for Bronze</li>
								<li>12 months for Silver</li>
								<li>18 months for Gold</li>
							</ul>
							<p>
								For each of these levels a participant is required to undertake activities under each of the four sections. At Gold level, participants undertake a Residential Project in addition.
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