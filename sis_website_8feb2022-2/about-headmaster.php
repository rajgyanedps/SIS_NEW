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
		<title>About Headmaster - SelaQui International School</title>
		<meta name="description" content="Know all about the Headmaster of SelaQui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About Headmaster</h1>
						</div>
						<!--<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about-headmaster.jpg" alt="Headmaster Mr. Rashid Sharfuddin" data-toggle="tooltip" title="Headmaster Mr. Rashid Sharfuddin" class="img-fluid">
							</div>
							</div>-->
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/headmaster1.jpg" alt="Headmaster Mr. Rashid Sharfuddin" data-toggle="tooltip" title="Headmaster Mr. Rashid Sharfuddin" class="img-fluid">
								</div>
							</div>
							<p>
								Rashid Sharfuddin has done his schooling from St. Xavier’s School, graduation from St. Stephen’s College, Delhi, and Master's in History from the University of Delhi.  He also has a degree in School Management and International Education from the University of Bath, the United Kingdom.
							</p>
							<p>
								As a student, Mr. Sharfuddin was Secretary of the Students’ Union Society and President of the Gandhi Study Circle at St. Stephen’s College. He represented his college in soccer, hockey, cricket and handball and was awarded the college's highest color in all of the above-mentioned sport. He captained his college handball team and played for Shimla Young in the Delhi Football League. He represented the Aligarh District and the Agra Zone in soccer and cricket. He was also a member of the Bath University post-graduate soccer and cricket teams.
							</p>
							<p>
								He started his teaching career at 21 and taught at The Lawrence School, Lovedale, and Assam Valley School, Guwahati, before joining The Doon School, Dehradun, as a History Master in 2003. Mr. Sharfuddin served as the Assistant Housemaster of Jaipur House (2008-2011), Housemaster of Oberoi House (2012) and was the Housemaster of Jaipur House before he was appointed Headmaster at <a class="linkforseo" href="https://www.selaqui.org/"><strong class='goudy'>SelaQui</strong> International School</a>. At 35, he was one of the youngest headmasters in the country. 
							</p>
							<p>
								Mr. Sharfuddin made History a popular subject choice for students at Doon due to his energy, commitment and innovations. He also introduced the Model United Nation Programme in the school in 2004. DSMUN, as it is called now, is ranked as the largest High School MUN Conference in India. Pursuing his passion for sport at Doon, he also looked after the school junior soccer, cricket as well as hockey teams. He organized Doon’s first ever cricket team tour to England in June 2008.
							</p>
							<p>
								Mr. Sharfuddin has been interested in and studied the education of marginalized communities. He has presented papers at various seminars on this subject. His paper titled "Marginalized Communities and Educational Exclusion in North India" is part of the Bath University's reading list for Education and Globalization Programme. He has also researched the history of early 20th Century Delhi. His paper on the renaming of New Delhi Roads was awarded the most original research paper at a History seminar in Delhi University. Mr. Sharfuddin is an avid biker, traveller and reader. 
							</p>
							<p>
								He is married to Hina Sharif Khan who is a corporate lawyer by profession and has also worked in the education and development sectors.
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