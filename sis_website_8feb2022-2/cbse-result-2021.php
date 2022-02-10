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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Top CBSE Board Result 2021</h1>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
						    <p>SELAQUI INTERNATIONAL SCHOOL MAKES A NEW RECORD ONCE AGAIN</p>
							<p>With the consistently brilliant performance of our class 12th standard students in the Board examinations conducted by the Central Board of Secondary Education (CBSE) , the SelaQui International School has established itself among the top CBSE  schools of the country. SelaQui International School has yet again set a new benchmark in AISSCE 2021. Saumay Jaiswal and Raunak Singh from Sciences and Ganesh Shankar Tripathi from Humanities scored a staggering 99% in the CBSE Class 12 Board Exams and became the joint school toppers. </p>
<p>The main highlight of SelaQui International School results has always been the outstanding batch averages of both AISSE and AISSCE. The average performance of the entire batch actually shows the real performance of a school as a whole. While individual performance is also something to be extremely proud of, and is mostly highlighted by many schools, however we at SelaQui International firmly believe that judging the performance of a school should not just limited to looking at the individual performance of a few toppers, but the entire batch as a whole. We are extremely proud that our batch of AISSCE 2021 has broken previous year’s records in terms of the highest batch average.  The Class 12 batch improved upon their predecessors by 0.3% and achieved a batch average 92.10%</p>
<p>Ashmit Gupta and Aayush Godara of class 12 Commerce both scored 98.25% and became the joint school toppers from Commerce Stream. Ishan Dwivedi of Class 12 Humanities scored 99.50% and Amartya Jha class 12 Humanities scored 98.25%. The Class 12 batch improved upon their predecessors by 0.3% and achieved a batch average 92.10%</p>
<p>In 2021 SelaQui International School presented its <strong></strong>15th batch of AISSCE and they performed exceptionally well. The school achieved a 100% pass result with all the students scoring 1st Division marks (aggregate of above 70%) for the sixth consecutive year.</strong>   75% of the students, who appeared, scored in excess of 90% aggregate.  99% of the students who appeared passed with distinction (aggregate of above 75%).  The Average aggregate percentage of the entire batch was 92.1%. </p>
<p>Headmaster congratulated the entire batch for their effort during the pandemic time.</p>
                            <table class="table table-bordered striped">
							  <tr>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_01.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_02.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_03.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_04.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
						      </tr>
							  <tr>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Saumay Jaiswal</strong><br>
Science<br>
<strong>99.00% </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Ganesh Shankar Tripathi</strong><br>
Humanities<br>
<strong>99.00% </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Raunak Kumar</strong><br>
Science<br>
<strong>99.00% </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Ishan Dwivedi</strong><br>
Humanities<br>
<strong>98.50% </strong></p></td>
						      </tr>
							  <tr>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_05.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_06.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"><img src="assets/images/2021/08/12_07.jpg" alt="Top CBSE Board Result 2021" class="img-fluid"></td>
							    <td width="25%" align="center" valign="top"></td>
						      </tr>
							  <tr>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Ashmit Gupta</strong><br>
Commerce<br>
<strong>98.25 % </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Aayush Godara</strong><br>
Commerce<br>
<strong>98.25% </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"><p style="text-align:center;"><strong>Amaritya Jha</strong><br>
Humanities<br>
<strong>98.25% </strong></p></td>
							    <td width="25%" align="center" valign="top" bgcolor="#F9EED9"></td>
						      </tr>
						  </table>
							<ul class="cbse-results">
			  <li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/top_3_12th_2021.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
							  </li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/toppers_12th_2021.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/ganesh_tripathi.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/result_news_2021_1.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/result_news_2021_2.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/result_news_2021_3.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/result_news_2021_4.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
										</div>
									</div>
								</li>
								<li>
									<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
										<div class="team-img">
										  <img src="assets/images/2021/08/result_news_2021_5.jpg" alt="Top CBSE Board Result 2021" class="img-fluid">
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