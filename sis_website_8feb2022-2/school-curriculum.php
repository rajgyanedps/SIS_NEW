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
// Permanent 301 Redirect via PHP
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://www.selaqui.org/cbse-boarding-school-curriculum.php");
	exit();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="<?php echo getCurrentPageURL('url'); ?>" />
        <link rel="alternate" href="<?php echo getCurrentPageURL('url'); ?>" hreflang="en-in" />
        <title>Boarding School Curriculum - CBSE Affiliated Residential School India</title>
        <meta name="description" content="Explore SelaQui International School website to know about the affiliation, courses Curriculum etc.">
        <meta name="keywords" content="">
        <meta name="description" content="">
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
                            <h1 class="section-title wow fadeInUp main-heading-h1" data-wow-delay="0.2s">Curriculum - CBSE Affiliated Boarding School</h1>
                        </div>
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <img src="assets/images/ciruculam.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid">
                            </div>
                        </div>
                        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                            <p>
                                <strong class='goudy'>SelaQui</strong> is affiliated to Central Board of Secondary Education. The Central Board of Secondary Education (CBSE) established in the year 1929, enjoys today the distinction of being one of the oldest and largest Board of Secondary Education in India. It has about 15,000 affiliated schools in India and across 24 other countries of the world. The <a class="linkforseo" href="https://www.selaqui.org/">CBSE affiliated schools</a> follow a uniform curriculum with a flexible scheme of studies suitable to the needs of each and every student. Notwithstanding the geographical variations, the schools and students under CBSE enjoy and share common privileges as regards the curriculum, examinations and academic innovations.
                            </p>
                            <p>&nbsp;</p>
                            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="team-img">
                                    <img src="assets/images/cbse_biglog.png" alt="CBSE" data-toggle="tooltip" title="CBSE" class="img-fluid">
                                </div>
                            </div>
                            <p>
                                <strong class="text-green">Vision of CBSE</strong>
                            </p>
                            <p>
                                The CBSE envisions a robust, vibrant and holistic school  education that will engender excellence in every sphere of human endeavour. The  Board is committed to provide quality education to promote intellectual, social  and cultural vivacity among its learners. It works toward evolving a learning  process and environment, which empowers the future citizens to become global  leader in the emerging knowledge society. The Board advocates continuous and comprehensive  Evaluation with an emphasis on holistic development of learners. The Board commits  itself to provide a stress-free learning environment that will develop  competent, confident and enterprising citizens who will promote harmony and  peace.
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