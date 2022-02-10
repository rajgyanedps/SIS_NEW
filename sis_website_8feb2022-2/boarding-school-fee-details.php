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
		<title>CBSE Boarding School Fees in Dehradun, India</title>
		<meta name="description" content="Know all about Regular Fee Structure, bank details to submit fee a SelaQui International School.">
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
							<h1 class="section-title wow fadeInUp main-heading-h1" data-wow-delay="0.2s">Fee Structure for SelaQui Boarding School</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
						    <table class="table table-striped table-bordered">
						        <thead>
  <tr>
    <th>Fee Head</th>
    <th>Students from India<br />
    INR ( &#8377; )</th>
    <th>Students from (SAARC <br />
      Countries) Nepal, Bangladesh,<br />
      Bhutan, Maldives,  Pakistan <br />
    and Sri lanka. INR ( &#8377; )</th>
    <th>
      Overseas<br />
    US Dollar ($)</th>
  </tr>
  </thead>
  <tr>
    <td>Processing Fee*</td>
    <td>-</td>
    <td>50,000*</td>
    <td>1,500*</td>
  </tr>
  <tr>
    <td>Registration fee***</td>
    <td>9,000</td>
    <td>9,000</td>
    <td>350</td>
  </tr>
  <tr>
    <td>Admission Fee (One Time)***</td>
    <td>1,20,000</td>
    <td>1,20,000</td>
    <td>3,000</td>
  </tr>
  <tr>
    <td>Refundable Security Deposit</td>
    <td>75,000</td>
    <td>75,000</td>
    <td>1,500</td>
  </tr>
  <tr>
    <td>Annual Fee (V to VIII)**</td>
    <td>5,50,000 </td>
    <td>5,50,000 </td>
    <td>9,500</td>
  </tr>
  <tr>
    <td>Annual Fee (IX to XII)**</td>
    <td>5,95,000</td>
    <td>5,95,000</td>
    <td>10,500</td>
  </tr>
  <tr>
    <td>Imprest Account</td>
    <td>60,000</td>
    <td>60,000</td>
    <td>1,500</td>
  </tr>
  <tr>
    <td colspan="4">*	Processing fee applicable to students from foreign passports. (Non refundable amount)<br />
      **	The fee includes boarding, lodging, laundry, routine on-site medical attention, free email and web access. <br />
    *** Non refundable amount.</td>
  </tr>
</table>
						    </div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<strong>A one-time, Non-refundable fee, becomes payable on acceptance of the admission.</strong>
							</p>
							<p>
								<strong>Tuition Fees:</strong> subject to revision every two years, is payable in two half yearly installments. It covers the annual tuition, extra coaching, boarding & lodging, but does not include special preparation for competitive entrance examinations, examination fee payable to the examining boards like Central board of secondary education or any other special purpose fee. Such fees/charges/expenses shall be debited to the Imprest money account as per the actual expenses. Special Sports and activities, like shooting, river rafting, photography, excursions, camps, travel or other expenses shall also be charged to the imprest money as per actual expenses.
							</p>
							<p>
								<strong>Imprest Money:</strong> shall be paid at the time of admission and shall be maintained at all times to cater for provision of school uniforms, stationery, special sports, camps, excursions, special services provided by the school, end of the term pick-ups or drops at major cities, or any such activity not covered under the annual tuition fee. The school will furnish a six monthly expenses statement and expenses incurred during the elapsed term shall be made up so as to maintain the imprest money.
							</p>
							<p>
								<strong>Caution Money:</strong> is refundable on the student’s withdrawal from the school. It is equal to roughly 50% of the annual fee and shall stand revised along with the annual tuition fee.
							</p>
							<ol class="olGrid">
								<li>FEE STRUCTURE FOR THE YEAR<a href="Download/Fee_Structure_2021-22.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download Fee Structure"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong>All fees and charges are to be paid by 'Pay Order' or 'Demand Draft' in favor of ' <strong class='goudy'>SelaQui</strong> International School' payable at Dehradun. </strong>
							</p>
							<ul>
								<li>Items Supplied by the School at cost are adjusted against Imprest Account.</li>
								<li>Fee for the coming academic year becomes payable on 01 Feb every year and may be paid by 28 Feb.</li>
								However, the School accepts payment of fee in two equal halves, i.e. as   on 01 Feb for the 1st term and as on 01 Aug, payable by 31 Aug, for the   2nd term.
								<li>Penalty, as given below, is levied if fees are not paid in time.</li>
								<li>If the fees or Imprest are not paid in accordance with the   stipulated date, a fine of 1000/- will be imposed. For those who fail to   clear the dues even after 30 days of delay, a penalty of 5000/- will be   levied every month.</li>
								<li>Any delay beyond 3 months may lead to the name of student being   struck off the school rolls. If a Parent wishes the ward to continue, it   shall be treated as a fresh admission.</li>
								<li>It is Mandatory for Parent/Ward to clear the Imprest bill every three months and maintain their balance at 60,000/- </li>
							</ul>
							<!--<table class="table table-bordered striped">
								<thead>
								  <tr>
								    <th width="50%">BENEFICIARY NAME</th>
								    <th width="50%"><strong><strong class='goudy'>SelaQui</strong> International School</strong></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
								    <td>BANK NAME</td>
								    <td><strong>ICICI Bank, E-30 Saket, New Delhi - 110030</strong></td>
								  </tr>
								  <tr>
								    <td>
								BANK ACCOUNT NUMBER
								    </td>
								    <td>
								    <strong>017105008325</strong>
								    </td>
								  </tr>
								  <tr>
								    <td>SWIFT CODE</td>
								    <td><strong>ICICINBBCTS</strong></td>
								  </tr>
								  <tr>
								    <td>
								IFS CODE
								    </td>
								    <td>
								    <strong>ICIC0000171</strong>
								    </td>
								  </tr>
								  <tr>
								    <td>BRANCH CODE</td>
								    <td><strong>0171</strong></td>
								  </tr>
								</tbody>
								</table>-->


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
<span style="color:#f3f4f3;">Situs judi slot online terpercaya indonesia dengan permainan terlengkap, <a style="color:#f3f4f3;" href="https://www.companynewshq.com/">agen slot online</a> deposit pulsa dijamin aman.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
<style>
.blog-section{
    padding: 65px 0;
}

.blog-slider .blog-item .descr h3 a{
	font-size: 15px;
    line-height: 20px;
    font-weight: 300;
    display: block;
}

.blog-box {
    display: block;
    height: 335px;
}

.blogCarousel .owl-prev{
	position: absolute;
	z-index: 10;
	display: inline-block;  
	left: -104px; 
	cursor: pointer; 
	font-size: 0.1px; 
	top: 37%; 
	width: 45px; 
	height: 45px;  	
    padding: 12px 5px !important;
	background: #00743d;
}
.blogCarousel .owl-next{
	position: absolute; 
	z-index: 10; 
	display: inline-block; 
	right: -51px;  
	cursor: pointer;
	font-size: 0.1px;  
	top: 37%; 
	width: 45px;  
	height: 45px;  
    padding: 12px 5px !important;
	background: #00743d;
}

/*blog carousel Library*/

.blogCarousel,
.blogCarousel .owl-item {
	-webkit-tap-highlight-color: transparent;
	position: relative
}

.blogCarousel .animated {
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both
}

.blogCarousel .owl-animated-in {
	z-index: 0
}

.blogCarousel .owl-animated-out {
	z-index: 1
}

.blogCarousel .fadeOut {
	-webkit-animation-name: fadeOut;
	animation-name: fadeOut
}

@-webkit-keyframes fadeOut {
	0% {
		opacity: 1
	}
	100% {
		opacity: 0
	}
}

@keyframes fadeOut {
	0% {
		opacity: 1
	}
	100% {
		opacity: 0
	}
}

.owl-height {
	-webkit-transition: height .5s ease-in-out;
	-moz-transition: height .5s ease-in-out;
	-ms-transition: height .5s ease-in-out;
	-o-transition: height .5s ease-in-out;
	transition: height .5s ease-in-out
}

.blogCarousel {
	display: none;
	width: 100%;
	z-index: 1
}

.blogCarousel .owl-stage {
	position: relative;
	-ms-touch-action: pan-Y
}

.blogCarousel .owl-stage:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0
}

.blogCarousel .owl-stage-outer {
	position: relative;
	overflow: hidden;
	-webkit-transform: translate3d(0, 0, 0)
}

.blogCarousel .owl-controls .owl-dot,
.blogCarousel .owl-controls .owl-nav .owl-next,
.blogCarousel .owl-controls .owl-nav .owl-prev {
	cursor: pointer;
	cursor: hand;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.blogCarousel.owl-loaded {
	display: block
}

.blogCarousel.owl-loading {
	opacity: 0;
	display: block
}

.blogCarousel.owl-hidden {
	opacity: 0
}

.blogCarousel .owl-refresh .owl-item {
	display: none
}

.blogCarousel .owl-item {
	min-height: 1px;
	float: left;
	-webkit-backface-visibility: hidden;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.blogCarousel .owl-item img {
	display: block;
	width: 100%;
	height: 200px;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
}

.blogCarousel.owl-text-select-on .owl-item {
	-webkit-user-select: auto;
	-moz-user-select: auto;
	-ms-user-select: auto;
	user-select: auto
}

.blogCarousel .owl-grab {
	cursor: move;
	cursor: -webkit-grab;
	cursor: -o-grab;
	cursor: -ms-grab;
	cursor: grab
}

.blogCarousel.owl-rtl {
	direction: rtl
}

.blogCarousel.owl-rtl .owl-item {
	float: right
}

.no-js .blogCarousel {
	display: block
}

.blogCarousel .owl-item .owl-lazy {
	opacity: 0;
	-webkit-transition: opacity .4s ease;
	-moz-transition: opacity .4s ease;
	-ms-transition: opacity .4s ease;
	-o-transition: opacity .4s ease;
	transition: opacity .4s ease
}
</style>

<?php 
// Include the wp-load'er
include('blog/wp-load.php');

// Get the last 10 posts
// Returns posts as arrays instead of get_posts' objects
$recent_posts = wp_get_recent_posts(array(
	'numberposts' => 10
));
?>
<section class="blog-section">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title-header text-center">
					<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Latest Blogs</h2>
				</div>
			</div>
		</div>	
        <div class="row blog-slider">		
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 wow fadeInUp animated " data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">			
                <div id="blogCarousel" class="blogCarousel owl-theme">
			<?php			
			// Do something with them
				foreach($recent_posts as $post) {
					/* grab the url for the full size featured image */
					//$featured_img_url = get_the_post_thumbnail_url('thumbnail'); 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post['ID'] ), 'single-post-thumbnail' ); 
					echo '<div class="item team-item wow fadeInUp blog-box" data-wow-delay="0.2s">';
					echo '<div class="team-img">';
					echo '<div class="blog-item">';
					echo '<div class="blog-image">';
					echo '<a href="'.get_permalink($post['ID']).'" target="_blank" title="'.$post['post_title'].'">';
					echo '<img class="img-fluid" style="background-image:url('.$image[0].');">';
					echo '</a>';
					echo '</div>';
					echo '<div class="descr">';
					//echo '<div class="tag"><a href="https://www.selaqui.org/Download/sis-brochure.pdf" target="_blank">Download</a></div>';
					echo '<h3 class="title">';
					echo '<a href="'.get_permalink($post['ID']).'" target="_blank">';
					echo $post['post_title'];
					echo '</a>';
					echo '</h3>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
			?>


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
        <script src="assets/js/owlcarousel/owl.carousel.js"></script>
        <script src="assets/js/owlcarousel/owl.autoplay.js"></script>
		<script>
			$(document).ready(function(){
				$(".slide-toggle").click(function(){
					$(".box").animate({
						width: "toggle"
					});
				});
              $('.blogCarousel').owlCarousel({
                loop: true,				
                margin: 10,
				autoplay: true,
                responsiveClass: true,				
                autoplayTimeout: 1000,
                autoplayHoverPause: true,            
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					768: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: true
					}
				}
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