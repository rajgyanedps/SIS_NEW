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
		<title>Approach to Learning - SelaQui International School</title>
		<meta name="description" content="Learning for the mastery of subject-specific knowledge and competencies and skills is essential. Yet, that is only part of the learning experience that a student should aspire for. ">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Approach to Learning</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/approch_learn.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/approch_sml2.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">REFLECTION AND SELF-REGULATION </strong>
							</p>
							<p>
								

The role of education doesn’t end with the achievement of marks at the end of a test. We believe in design a form of education that fosters metacognition. Students should be able to reflect back and take it forward as they identify and act on their individual learning goals. The best way to start this development of self-regulated learners begins with a reflective dialog between teacher and students. SelaQui stands for enabling all such opportunities for personal growth and drawing out a plan to fulfil individualised learning goals. We offer learners an unprecedented amount of responsibility and control and choice as to how to go about accomplishing their learning goals.
							</p>
							<p>
								<strong class="text-green">DRIVE YOUR OWN LEARNING</strong>
							</p>
							<p>
								

Not just in the transaction, but also through inquiry and assessment followed by reflection, and reporting, students drive their own learning. This is a rewarding and enriching experience for all learners. It is also an opportunity when they take their parents and other stakeholders through their learning journey. A highlight reel that celebrates every learner’s uniqueness.

							</p>
							<p>
								<strong class="text-green">DEEPENING FOUNDATIONS </strong>
							</p>
							<p>
								

Learning for the mastery of subject-specific knowledge and competencies and skills is essential. Yet, that is only part of the learning experience that a student should aspire for. The educational design at SelaQui is distinct and without equal in that respect. We believe for a complete education, it is imperative to deepen and create enduring foundations of attitudes, dispositions, beliefs and values. The focus on the  domains of ICT, Citizenship Studies, Art & Music and Clubs & Societies will facilitate the developments of traits and values and skills which will make students a success in the 21st century. The students will progress along the continuum of the learning journey and the expected outcomes are measured in terms of knowledge, skills, competencies and values which he or she should exhibit once they complete formal schooling and are ready to take on the world.  All  along this journey, SelaQui will stand by and guide every student who pass though our doors.

							</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/approch_sml1.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">Laying a strong foundation</strong>
							</p>
							<p>
								Coupled with a strong foundation of social and moral values, the students at <strong class='goudy'>SelaQui</strong> also develop a respect for the rich heritage of the past while mastering the complexities of modernity.
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