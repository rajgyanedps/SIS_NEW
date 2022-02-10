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
		<title>Prefect's Council - Selaqui International School</title>
		<meta name="description" content="Know all about Prefect's Council of Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Prefect's Council</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/prefect_council.jpg" alt="Best Residential School India" data-toggle="tooltip" title="Best Residential School India" class="img-fluid">
							</div>
						</div>
					  <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							
					    <p>
								<strong class="text-green">PREFECTORIAL APPOINTMENTS</strong><br>
2021 – 2022
						  </p>
							<table class="table table-bordered striped">
								<thead>
									<tr>
										<th width="50%" bgcolor="#F3F3F3">School Captain</th>
										<th width="50%" bgcolor="#F3F3F3">Khushi Pandey</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="50%" bgcolor="#F9EED9">Head Boy: </td>
										<td width="50%" bgcolor="#F9EED9">Ayaan Ahmad Khan</td>
									</tr>
									<tr>
									  <td bgcolor="#F3F3F3">Sports Captain: </td>
									  <td bgcolor="#F3F3F3">Daksh Seth</td>
								  </tr>
									<tr>
									  <td bgcolor="#F9EED9">Activities Captain: </td>
									  <td bgcolor="#F9EED9">Smaksh Mahajan</td>
								  </tr>
									<tr>
									  <td bgcolor="#F3F3F3">Academic Captain: </td>
									  <td bgcolor="#F3F3F3">Harsh Agrawal</td>
								  </tr>
									<tr>
									  <td bgcolor="#F9EED9">Sports Captain:</td>
									  <td bgcolor="#F9EED9">Janmejay Singh Yadav</td>
								  </tr>
								</tbody>
							</table>
						  <table class="table table-bordered striped">
							  <tbody>
								  <tr>
									  <td colspan="2" bgcolor="#F9EED9"><strong>Agni:</strong></td>
								  </tr>
								  <tr>
									  <td width="50%">Captain :</td>
									  <td width="50%">Ritaksha Roy Burman</td>
								  </tr>
								  <tr>
									  <td>Prefect:</td>
									  <td>Avnish Mohta</td>
							    </tr>
								  <tr>
								    <td>House Monitor:</td>
								    <td>Labh Bothra</td>
							    </tr>
								  <tr>
									  <td colspan="2" bgcolor="#F9EED9"><strong>Akash:</strong></td>
								  </tr>
								  <tr>
								    <td width="50%">Captain :</td>
								    <td>Debi Prasad Dash</td>
							    </tr>
								  <tr>
								    <td>Prefect:</td>
								    <td>Anupam Aakarsh</td>
							    </tr>
								  <tr>
								    <td>House Monitor:</td>
									  <td>Aman Jaiswal</td>
								  </tr>
								  <tr>
									  <td colspan="2" bgcolor="#F9EED9"><strong>Jal:</strong></td>
								  </tr>
								  <tr>
								    <td width="50%">Captain :</td>
									  <td>Vansh Singhal</td>
								  </tr>
								  <tr>
								    <td>Prefect:</td>
								    <td>Vansh Agarwal</td>
							    </tr>
								  <tr>
								    <td>House Monitor and Common Room Secretary: </td>
									  <td>Abhijeet Sinha</td>
								  </tr>
								  <tr>
									  <td colspan="2" bgcolor="#F9EED9"><strong>Prithvi:</strong></td>
								  </tr>
								  <tr>
								    <td width="50%">Captain :</td>
									  <td>Lakshay Sharma</td>
								  </tr>
								  <tr>
								    <td>Prefect:</td>
								    <td>&nbsp;</td>
							    </tr>
								  <tr>
								    <td>House Monitor:</td>
									  <td>&nbsp;</td>
								  </tr>
								  <tr>
									  <td colspan="2" bgcolor="#F9EED9"><strong>Girls House:</strong></td>
								  </tr>
								  <tr>
								    <td>Head Girl:</td>
								    <td>Neelanjana Gupta Choudhury</td>
							    </tr>
								  <tr>
								    <td>Prefect:</td>
								    <td>Jeffrin Ahmed</td>
							    </tr>
								  <tr>
								    <td>House Monitor:</td>
									  <td>Smriti Jaiswal</td>
								  </tr>
						    </tbody>
					    </table>
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