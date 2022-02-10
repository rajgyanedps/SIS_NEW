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
        <title>Top CBSE Residential Schools in Dehradun, India | co ed boarding school</title>
        <meta name="description" content=" Residential Schools in Dehradun - SelaQui International School is a CBSE boarding/Residential school in India, nestled in a 52 acres campus - Ranked among the best CBSE residential schools in Dehradun.">
        <meta name="keywords" content="">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="INDEX,FOLLOW"/>
        <meta name="YahooSeeker" content="INDEX,FOLLOW"/>
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
                            <h1 class="section-title wow fadeInUp main-heading-h1" data-wow-delay="0.2s">Covid Update </h1>
                        </div>
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <img src="assets/images/about_school.jpg" alt="About SelaQui" class="img-fluid">
                            </div>
                        </div>
                        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="col-xl-6 text-justify pull-left">  
                           <p>
                            <h2>Vlog Year </h2>
                          <iframe width="390" height="215" src="https://www.youtube.com/embed/oI6ZjvnRzQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </p></div>
                            <div class="col-xl-6 text-justify pull-left">  
                           <p>
                            <h2>SeQuins Back to Classroom </h2>
                          <iframe width="390" height="215" src="https://www.youtube.com/embed/fso5tQ-B11U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </p></div>
                            <div class="col-xl-6 text-justify  pull-left">  
                          <p> <h2>Diwali Message </h2>
                           <iframe  width="390" height="215" src="https://www.youtube.com/embed/6JKNT_LkeXs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </p>
                          </div>
                           <div class="col-xl-6 text-justify pull-left">  
                           <p>
                            <h2>HM, NewsX India</h2>
                          <iframe width="390" height="215" src="https://www.youtube.com/embed/uakVNwwYLtU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </p></div>
                            <div class="col-xl-6 text-justify  pull-left">  
                          <p> <h2>HM missing kids on campus</h2>
                           <iframe  width="390" height="215" src="https://www.youtube.com/embed/hMGnjZs5jgM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </p>
                          </div>
                          <div class="col-xl-6 text-justify  pull-left">  
<p>
<h2 style="font-size:22px;">The unseen corona warriors</h2>
<iframe width="390" height="215" src="https://www.youtube.com/embed/LVutX_HWULs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</div>

<div class="col-xl-6 text-justify  pull-left">  
<p>
<h2 style="font-size:22px;">SeQuins in Campus</h2>
<iframe width="390" height="215" src="https://www.youtube.com/embed/_wmOERKTcWk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</div>

<div class="col-xl-6 text-justify  pull-left">  
<p>
<h2 style="font-size:22px;">Day-1 Sequins in Campus</h2>
<iframe width="390" height="215" src="https://www.youtube.com/embed/uqlEvDwXMIY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</div>

<div class="col-xl-6 text-justify  pull-left">  
<p>
<h2 style="font-size:22px;">Day-2 Sequins in Campus</h2>
<iframe width="390" height="215" src="https://www.youtube.com/embed/pt-3tz8AHlg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</div>

<div class="col-xl-6 text-justify  pull-left">  
<p>
<h2 style="font-size:22px;">Day-3 & 4 Sequins in Campus</h2>
<iframe width="390" height="215" src="https://www.youtube.com/embed/XO9WsDD14RA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</div>

                      </div>
                       <div class="col-xl-12 text-justify  pull-left">
                     
                        <div class="time-countdown justify-content-center wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
							<ol class="olGrid">
							    <li>Letter - 16.01.2022<a href="Download/covid-update/Letter-16.01.2022.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Download Form"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>Letter - 30.12.2021<a href="Download/covid-update/Letter-30.12.2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Download Form"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>Letter - 21.07.2020<a href="Download/covid-update/Letter-21.07.2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Download Form"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>Letter - 08.06.2020<a href="Download/covid-update/Letter-08.06.2020.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="" data-original-title="Download Form"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								
								
							</ol>
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