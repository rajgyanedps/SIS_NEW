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
		<title>Career Counseling/Information and Guidance - SelaQui International School</title>
		<meta name="description" content="SelaQui International School provides career guidance for students and their parents to take decisions about their future.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Career Information and Guidance Department</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/careers.jpg" alt="Career" data-toggle="tooltip" title="Career" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								The  Career information and guidance department at <a class="linkforseo" href="https://www.selaqui.org/"><strong class='goudy'>SelaQui</strong> International School</a> is committed towards providing an  effective Careers guidance for students to enable them to make informed  decisions about their future. It provides guidance in the development and implementation of a comprehensive career education program that promotes knowledge of careers and employment opportunities. Further, it emphasizes the advantages of completing school with marketable skills. The School’s careers program is based on the principles of self-development, career exploration and career management. The department provides professional guidance which is  informative and most importantly tailored to each and every student's talents  and aptitudes.
							</p>
							<p>
								This  preparation starts from class IX culminating beyond class XII when the students  seek, apply and attain admissions in various universities in India and abroad.  The sessions help create awareness regarding various career paths beyond the  conventional ones after identifying suitable courses with the help of aptitude  tests and interaction. Emphasis is laid on providing each and every student the  advice and guidance which is appropriate and relevant to his or her individual  interests and abilities.  The department  works towards fostering a positive partnership between the school and each student,  of course supported by the parents.  The  child is encouraged to use the school&rsquo;s resources and maximize the  opportunities available in the realm of higher studies (both in India and  abroad).
							</p>
							<p>
								<strong>The Career Information and Guidance  Department provides assistance in the following areas:</strong>
							</p>
							<ul>
								<li>SAT and TOEFL as well as IELTS coaching classes</li>
								<li>Supervision in CV writing, SOP, personal essay writing, provides  interview training.</li>
								<li>Supports and administers University applications-making  transcripts, recommendation letters, predicted grades and the School profile.</li>
								<li>Corresponds and follows-up with universities regarding student  applications.&nbsp;<br />
									Arranges talks by university representatives and other eminent experts.
								</li>
								<li>Internship in the corporate sector to sensitize students to the atmosphere,  demands, skills and expectations of a work place</li>
								<li>Organizing universities and college visits  for students in India <br />
								</li>
							</ul>
							<!--<p>
								<span class="text-green"><strong>Responsible citizenship</strong><br>Hina Sharif Khan</span>
							</p>-->
						</div>
                        <div class="col-xl-9 text-justify">
                        
                                          
                                          
                                          
                                          <div class="col-xl-12 text-justify pull-left">
                    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">                    
                     <div class="team-img"><img src="assets/images/career-counselling/12.jpg" alt="CBSE" data-toggle="tooltip" title="" class="img-fluid" data-original-title="CBSE" aria-describedby="tooltip901347"></div>            
                                          </div>
                                          </div>
                                          <div class="col-xl-12 text-justify pull-left">
                    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">                    
                     <div class="team-img"><img src="assets/images/career-counselling/11.jpg" alt="CBSE" data-toggle="tooltip" title="" class="img-fluid" data-original-title="CBSE" aria-describedby="tooltip901347"></div>            
                                          </div>
                                          </div>
                                          <div class="col-xl-12 text-justify pull-left">
                    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">                    
                     <div class="team-img"><img src="assets/images/career-counselling/9.jpg" alt="CBSE" data-toggle="tooltip" title="" class="img-fluid" data-original-title="CBSE" aria-describedby="tooltip901347"></div>            
                                          </div>
                                          </div>
                                          <div class="col-xl-12 text-justify pull-left">
                    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">                    
                     <div class="team-img"><img src="assets/images/career-counselling/10.jpg" alt="CBSE" data-toggle="tooltip" title="" class="img-fluid" data-original-title="CBSE" aria-describedby="tooltip901347"></div>            
                                          </div>
                                          </div>
                                           
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