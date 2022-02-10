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
		<title>Prithvi House - Selaqui International School</title>
		<meta name="description" content="Know all about Prithvi House at Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">PRITHVI HOUSE - “Sailing over the tossing waves, reaching the  shore successfully and safely”</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								At this hour when people are just paving paths for personal benefits and precautions, our students have been trained to sustain all the pains. Yes I can say all this confidently because our mentors are effective in channelizing the right sense of prosperity and peace in them.</p>
                                <p>
Prihvites are sensible to realize that difficulties might slow down the pace of life, but will not stop its possibilities to explore and grow. Our primary concern is to establish a dynamic personality in every child. They are equipped with abilities to overcome tests and terrors and emerge as leaders with distinguished opinions and strategies.
</p>
<p>
I am confident that in near future our achievements in academics and co - scholastic will reveal our guidance. Our motto is to aim beyond stars and stay ahead of others. Our house appointees and leaders are Raunak Singh and Yashwardhan Singh. 
 I on behalf of all our mentors wish your family all the blessing of happiness, good health, success and safety.

							</p>
                            <p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">

								  <img src="assets/images/ashish.jpg" alt="Dr. Ashish Vashistha" data-toggle="tooltip" title="Dr. Ashish Vashistha" class="img-fluid">
									<p>Dr. Ashish Vashistha</p>
								</div>
							</div>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
								  <img src="assets/images/prithvi.jpg" alt="Prithvi House Logo" data-toggle="tooltip" title="Prithvi House Logo" class="img-fluid">
									<p>Prithvi House Logo</p>
								</div>
							</div>
							<p>
								<strong>Best Wishes,</strong>
							</p>
							<p>
								<strong>PRITHVI HOUSE MASTER</strong>
							</p>
							<p>
								<strong class="text-green">Dr. Ashish Vashistha</strong>
							</p>
							<p>
								<strong>Mobile: 07727866030</strong>
							</p>
							<p>
								<strong>Email: <a href="mailto:ashish.vashistha@selaqui.org">ashish.vashistha@selaqui.org</a></strong>
							</p>
						</div>
					</div>
                    
                    <div class="col-xl-9"><br><br>
                    <h5>Prithvi House Reports</h5>
                    
                    <div class="time-countdown justify-content-center wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
							<ol class="olGrid">
								<li>Report<a href="Download/house/prithvi/House Report August 2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/prithvi/House-Repoert-November2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/prithvi/House-Report-Feburary-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/prithvi/House-Report-January-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/prithvi/House-Report-July-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/prithvi/House-Report-May-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>Report<a href="Download/house/prithvi/House-report-October-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>Report<a href="Download/house/prithvi/House-Report-September-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 
                                   <li>Report<a href="Download/house/prithvi/Prithvi_house_December_2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>Report<a href="Download/house/prithvi/Prithvi_November.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								
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