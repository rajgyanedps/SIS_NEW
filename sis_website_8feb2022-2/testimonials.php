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
		<title>SelaQui International Boarding School | Student Reviews/Testimonials</title>
		<meta name="description" content="SelaQui International Boarding School, located in Dehradun, is one of the best Co-ed, CBSE-Affiliated boarding schools in India. Read students’ testimonials.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Testimonials</h1>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/testimonials_muskan.jpg" alt="MUSKAL RIJAL" data-toggle="tooltip" title="MUSKAL RIJAL" class="img-fluid">
								</div>
							</div>
							<p>
								I once thought that teaching was always professional. But at <strong class='goudy'>SelaQui</strong>, I learned that teaching can also be for the love of teaching. I met many wonderful people in <strong class='goudy'>SelaQui</strong>. Teachers are always there when you need them be it for any reason. It has given me friends I can always rely on. The best thing about <strong class='goudy'>SelaQui</strong> was that the school gave me a tremendous amount of freedom to pursue knowledge and experiences far beyond that of a typical school, and challenged me to explore my interest in great depth. It has given me platforms for personal improvement and the freedom to excel in one’s own talents. The infrastructure was far beyond imaginable by any ordinary school. It has been a wonderful experience here.
							</p>
							<p>
								<strong>MUSKAL RIJAL – Mahatma Gandhi Institute of medical sciences (MGIMS), Wardha, Maharashtra</strong>
							</p>
							<p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/testimonials_amir.jpg" alt="MOHAMMAD AMIR FAISAL" data-toggle="tooltip" title="MOHAMMAD AMIR FAISAL" class="img-fluid">
								</div>
							</div>
							<p>
								There are only few schools that offer this high a platform of invention and innovation. <strong class='goudy'>SelaQui</strong> is one of those. Joining <strong class='goudy'>SelaQui</strong> has been a turning point of my life. <strong class='goudy'>SelaQui</strong> not only teaches you subjects but also provides a slice of life. It teaches one to introspect and learn from one’s experiences. <strong class='goudy'>SelaQui</strong> teaches one to stand out among others and to think outside the box. One of the best things about <strong class='goudy'>SelaQui</strong> is that it gave me the freedom to explore the extent of my limits and to surpass it, which was only possible due to all the teachers’ efforts and perseverance. It provides one with leadership experience. <strong class='goudy'>SelaQui</strong> emphasis on creating the creamy layer of tomorrow. It has provided a platform for me, where I can build a strong base for my achievements. The zeal of learning and the joy of the environment is what one gets to experience in <strong class='goudy'>SelaQui</strong>. One shall say,”I have graduated from <strong class='goudy'>SelaQui</strong> not literate, but educated.”
							</p>
							<p>Thanks for the wonderful effort <strong class='goudy'>SelaQui</strong>. Bon Voyage!!</p>
							<p>
								<strong>MOHAMMAD AMIR FAISAL  – </strong><strong>Andaman  and Nicobar Island institute of Medical sciences(ANIIMS), Port Blair</strong>
							</p>
							<p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/testimonials_meghna.jpg" alt="MEGHNA BORDOLOI" data-toggle="tooltip" title="MEGHNA BORDOLOI" class="img-fluid">
								</div>
							</div>
							<p>
								Thinking of the time spent at SIS, I realize how it has changed me to become a better version of myself. It has prepared me to face the challenges that the bigger school called ‘the world’ offers once we are out of the smaller one. It was great opportunity studying here. I met many different people each of whom helped me in their own ways. My teachers have never failed once to encourage and support me. Adding to it, the lush green environment has always bestowed it’s positivity upon me. <strong class='goudy'>SelaQui</strong> has lots of knowledge and experience to offer if one get it correct. I took the best out of it and it helped me reach here today.
							</p>
							<p>Thanks for your effort <strong class='goudy'>SelaQui</strong>!!</p>
							<p>
								<strong>MEGHNA BORDOLOI – </strong><strong>Shri  Ramachandra medical college, Chennai</strong>
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