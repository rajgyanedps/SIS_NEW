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
		<title>Agni House - Selaqui International School</title>
		<meta name="description" content="Know all about Agni House at Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">AGNI HOUSE - तमसो मा ज्योतिर्गमय – “Lead us from Darkness to Light”</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								The flame on our flag signifies this very light that leads the way for Agnians, from hard work to success, from perseverance to excellence, ‘from darkness to light.’ Red, the color of fire,  associated with energy, strength, power, determination as well as passion, warmth and love. Together, this encapsulates the pioneering spirit of Agni. 
                                </p>
<p>
At Agni, our endeavour is not only to ensure that our boys and girls excel in academics, sports and cultural activities, but also lead and motivate others to do the same. 
 </p>
 <p>
We have a strong culture of imparting values and life skills in our students. Ours is a home where we treat each other with respect, have love and compassion for the community we live in. 
 </p>
 <p>
The dedicated team of students and tutors in the house have made Agni house grow from strength to strength. Each student is under the care of a tutor, ‘the in loco parentis’, under whose nurturing Agnians are mentored to become valuable contributors to society. 
</p>
<p>
“Hard work beats natural talent, when natural talent doesn’t work hard enough”
</p>

<p>
We are a diverse family with varied  talents and skill, but our strength lies in our ability to work hard and work as a team. Our biggest competition is no one but ourselves. With each challenge we endeavour to do better than we have done before, better than what we did the last time, better than what we can imagine we are capable of. 

</p>
<p>

तमसो मा ज्योतिर्गमय – “Lead us from Darkness to Light”…our motto, that inspires each Agnian, to strive and not give up, to strive for excellence, to strive to lead. AGNI, a house, a community, an emotion. 

							</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/satishsr.jpg" alt="Mr. Satish Kumar Sah" data-toggle="tooltip" title="Mr. Satish Kumar Sah" class="img-fluid">
									<p>Mr. Satish Kumar Sah</p>
								</div>
							</div>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/agni-flag.jpg" alt="Agni House Logo" data-toggle="tooltip" title="Agni House Logo" class="img-fluid">
									<p>Agni House Logo</p>
								</div>
							</div>
							<p>
								<strong>Best Wishes,</strong>
							</p>
							<p>
								<strong>AGNI HOUSE MASTER</strong>
							</p>
							<p>
								<strong class="text-green">Mr. Satish Kumar Sah</strong>
							</p>
							<p>
								<strong>Mobile: 9927005705</strong>
							</p>
							<p>
								<strong>Email: <a href="mailto:satishs@selaqui.org">satishs@selaqui.org</a></strong>
							</p>
						</div>
					</div>
                    
                    <div class="col-xl-9"><br><br>
                    <h5>Agni House Reports</h5>
                    
                    <div class="time-countdown justify-content-center wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
							<ol class="olGrid">
							   
								<li>Report<a href="Download/house/agni/AGNI-HOUSE-REPORT-AUGUST.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-HOUSE-DECEMBER-REPORT.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-HOUSE-February-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-HOUSE-January-2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-HOUSE-November-Report.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-HOUSE-report-October-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/Agni-House-Report-September-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>Report<a href="Download/house/agni/AGNI-Monthly-Report-JULY-2019.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>Report<a href="Download/house/agni/Agni_House_Nov_ 2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>Report<a href="Download/house/agni/News_letter_Agni_House_October_2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Report"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								
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