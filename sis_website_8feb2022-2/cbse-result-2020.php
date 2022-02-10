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
	<head><meta charset="windows-1252">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="<?php echo getCurrentPageURL('url'); ?>" />
        <link rel="alternate" href="<?php echo getCurrentPageURL('url'); ?>" hreflang="en-in" />
		<title>12th CBSE Board Result 2020 - Selaqui International School</title>
		<meta name="description" content="We are delighted to announce another record breaking results in class 12 CBSE exams. The school average of 67 students is almost 85% and it is s new School record.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Top CBSE Board Result 2020</h1>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>The Headmaster is delighted to announce the Best result in AISSCE in School history. The batch of 63 boys and girls broke all the existing records and danced their way to pages of history with a stupendous 91.9% batch average. 33% of batch scored above 95%. 73% of batch scored above 90%. I extend my sincerest gratitude and congratulations to the batch of 2020, my extremely dedicated and energetic colleagues, and all the parents. Heartiest Congratulations to the Famous 5 Of 2019-20 batch. This result is a testimony of our belief and faith in the students and colleagues. We must celebrate this moment!
Well done and Thank you! 🎊

							</p>
							<ul class="cbse-results">
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Luxury-Real-Estate-Flyer-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Babysitting-Service-Flyer-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Uttar-Bhara-Live-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Rastriya-Sahar-Page-No-04-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Hindustan-Page-No-06-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Dainik-Bhaskar-Page-No-03-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Dainik-Bhaskar-Page-No-03-1-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Amar-Ujala-Page-No-02-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Amar-Ujala-Page-No-02-2-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
                                <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/2020/12/Amar-Ujala-Page-No-02-1-12.jpg" alt="Top CBSE Board Result 2019" class="img-fluid">
										</div>
									</div>
								</li>
							</ul>
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