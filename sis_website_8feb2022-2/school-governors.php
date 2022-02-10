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
		<title>Board of Governors - Selaqui International School Dehradun</title>
		<meta name="description" content="A Board of Governors nominated by the Trust manages the school, the Governors being eminent people with outstanding track records.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Board of Governors</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/board-of-director.jpg" alt="Board of Director" data-toggle="tooltip" title="Board of Director" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								Governors The Gurukul Trust, the promoter of <strong class='goudy'>SelaQui</strong> is a 'Not for Profit' NGO/Trust committed to promote quality & value based schools & institutions that provide sound physical & intellectual infrastructure, an engaging curriculum, a vigorous outdoor life, a motivated and skilled faculty, and a non-threatening, learning for all environment.
							</p>
							<p>
								A Board of Governors nominated by the Trust manages the school, the Governors being eminent people with outstanding track records.
							</p>
							<ul class="governors">
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_om.jpg" alt="Mr. Om Pathak" data-toggle="tooltip" title="Mr. Om Pathak" class="img-fluid">
											<p>Om Pathak</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_anshul.jpg" alt="Anshul Pathak" data-toggle="tooltip" title="Anshul Pathak" class="img-fluid">
											<p>Anshul Pathak</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_rohit.jpg" alt="M M Pant" data-toggle="tooltip" title="Rohit Pathak" class="img-fluid">
											<p>Rohit Pathak</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_niharika.jpg" alt="Niharika Pathak" data-toggle="tooltip" title="Niharika Pathak" class="img-fluid">
											<p>Niharika Pathak</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_rssuri.jpg" alt="R S Suri" data-toggle="tooltip" title="R S Suri" class="img-fluid">
											<p>R S Suri</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/bod_dilipcherian.jpg" alt="Dilip Cherian" data-toggle="tooltip" title="Dilip Cherian" class="img-fluid">
											<p>Dilip Cherian</p>
										</div>
									</div>
								</li>
								<!--<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/boa_saurabh.jpg" alt="Saurabh Srivastava" data-toggle="tooltip" title="Saurabh Srivastava" class="img-fluid">
											<p>Saurabh Srivastava</p>
										</div>
									</div>
								</li>-->
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/boa_basant.jpg" alt="Major General Basant Singh (YSM, AVSM)" data-toggle="tooltip" title="Major General Basant Singh (YSM, AVSM)" class="img-fluid">
											<p>Basant Singh</p>
										</div>
									</div>
								</li>
							
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/boa_ashwini.png" alt="Ashwini Mehra" data-toggle="tooltip" title="Ashwini Mehra" class="img-fluid">
											<p>Ashwini Mehra</p>
										</div>
									</div>
								</li>
									<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
											<img src="assets/images/boa_rashid.jpg" alt="Rashid Sharfuddin (Secretary)" data-toggle="tooltip" title="Rashid Sharfuddin (Secretary)" class="img-fluid">
											<p>Rashid Sharfuddin</p>
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