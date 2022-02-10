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
		<title>Indian Residential School | Selaqui International – Residential Activities</title>
		<meta name="description" content="Know all about vide range of Co-curricular Activities organized such as music, photography etc. at Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Activities : Introduction</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/activity.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<a href="https://www.selaqui.org/"><strong class='goudy'>SelaQui</strong> International School</a> prides itself not only on being a centre for Academic Excellence, but also for having a vibrant and diverse range of Co-curricular Activities, which engage students and give them the opportunity to discover new passions or pursue their own intellectual interests. Education must work towards creating a caring and responsible society- which is why community service is an integral part of the curriculum. Adult literacy, fire-fighting, tree-planting, selling crafts for charity and a concern for the environment are some of the social initiatives that every student is involved in.
							</p>
							<p>
								The list gives an indication of the many activities which take place at school. Although a Faculty member is responsible for each activity, the emphasis is very much on allowing pupils to generate the ideas and drive to make each Activity a success.
							</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/art_club.jpg" alt="CREATIVE ART CLUB" data-toggle="tooltip" title="CREATIVE ART CLUB" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">CREATIVE ART CLUB</strong>
							</p>
							<p>
								Students learn the making of greeting cards, pottery decoration and colourful candles. Techniques like marble texture, leaf and flower printing, block printing and blowing colors for making greeting cards are taught.
							</p>
							<p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/photogrphy_club.jpg" alt="PHOTOGRAPHY AND IT CLUB" data-toggle="tooltip" title="PHOTOGRAPHY AND IT CLUB" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">PHOTOGRAPHY AND IT CLUB</strong>
							</p>
							<p>
								The School has a photography club equipped with a processing room. Interested students are taught photography and the developing, fixing and printing process. The evolving field of digital designing is also incorporated in the curriculum.
							</p>
							<p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/music_club.jpg" alt="MUSIC CLUB" data-toggle="tooltip" title="MUSIC CLUB" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">MUSIC CLUB</strong>
							</p>
							<p>
								The Music club which, in addition to training the students in Western and Indian classical Music, trains selected students to take the examinations of the Trinity Guildhall College of Music, London. The Music Department gives highly specialized training in piano, violin, classical guitar, and other wind and wood instruments. The Music Department is updated and modernized every academic year.
							</p>
							<p>&nbsp;</p>
							<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
								<div class="team-img">
									<img src="assets/images/editorial_club.jpg" alt="Editorial Club" data-toggle="tooltip" title="Editorial Club" class="img-fluid">
								</div>
							</div>
							<p>
								<strong class="text-green">Editorial Club</strong>
							</p>
							<p>
								One of the primary concerns of the academic life at school is to train the students of the senior classes to bring out annual publications, which reflect the quality of academic life in the campus. The <strong>SeQuin</strong> which is an annual feature, provides the total picture of the academic year. The annual magazine highlights the most important functions in the school’s calendar - the Founder’s Day Celebrations; the co-curricular competitions and sports and games. It gives the details of the academic achievements of outgoing batches of students who have taken the various external Examinations. The Annual is sent to all the parents and guardians of the school, and is always available at the school office and reception.
							</p>
							<p>
								<strong class="text-green">MODEL UNITED NATIONS [MUN]</strong>
							</p>
							<p>
								MUN, students gain insight into the workings of the United Nations and the dynamics of international relations by assuming the roles of UN representatives and members of other international bodies and national cabinets. MUN is an exciting opportunity for students to debate issues that confront world leaders and to draft resolutions in response to these global issues. Participants develop their abilities to work with others who are equally motivated and passionate about the topics of debate and to respond to global concerns.
							</p>
							<p>
								<strong class="text-green">Drama Club</strong>
							</p>
							<p>
								Drama Club provides an opportunity for students to work as a co-operative team in the mounting of at least one theatrical productions per year. Students act, design, build, run lights, engineer sound and manage the entire process under the supervision of staff members who advise on the artistic, and technical aspects of acting and production . Students also direct their own mini-productions, take theatre trips, and attend workshops. The Drama Club is a great place to indulge in fantasy, study human nature, and make lasting friendships. 
							</p>
							<p>
								<strong class="text-green">Debating and Public Speaking</strong>
							</p>
							<p>
								The debate club is great place for students to explore the art of "organized arguing." Students in debate club tend to enjoy discussing current issues and if they don't already have a strong voice and good presentation skills, they will learn these abilities in a fun, safe club environment.
							</p>
							<p>
								Students learn to create factual/logical, ethical and emotional arguments to persuade others in the club that their "side" is correct. The club uses the formal debate format. The goal is to compete in tournaments with middle and high school students.
							</p>
							<p>
								<strong class="text-green">Adventure Club</strong>
							</p>
							<p>
								Adventure Sports Society is one of the most exciting societies at <strong class='goudy'>SelaQui</strong>. The Society aims at conducting various Adventure activities like: Para Gliding, Bungee Jumping, Cycling, Biking, Diving, Windsurfing, Scuba Diving, Snorkeling, Camel Safaris, Rock climbing, Rappelling, Skiing, Trekking and Mountaineering. This society organizes outdoor adventure activities in holidays and facilitates diverse adventure sports to provide true adventure. These type of activities helps to inculcate leadership quality, courage and discipline in life.
							</p>
							<p>
								<strong class="text-green">Chess Club</strong>
							</p>
							<p>
								All kids can benefit from chess. Kids may see it as just a game. But research has shown that chess enhances scholastic abilities including test scores. Think of it as "exercise for the mind", a fun way to practice concentration, patience, logic, and mental calculations.
							</p>
							<p>
								<strong class="text-green">Physics Club</strong>
							</p>
							<p>
								It is the human character to explore, interpret and change the physical world according to their need and requirement. The process of observing, describing, exploring and using the physical world is nothing but science. Physics, being one of the major portions of science is inculcated and practiced in physics society. Physics society aims to describe the various phenomena that occur in nature in terms of simpler phenomena. Thus, it aims to connect things observable to humans to root causes, and then to try to connect these causes together.
							</p>
							<p>
								At <strong class='goudy'>SelaQui</strong>, Physics society has a well-equipped physics lab suitable for performing different experiments and discussing various phenomena with the help of working models and Power Point presentations. Along with development of skills like observation, classification, measurement and communication, Physics society fosters creativity in pupils for understanding of inter-relationship of science and society. The students’ interests are consistently sustained by interaction with robotics, groups working in space exploration etc
							</p>
							<p>
								<strong class="text-green">Quiz Club</strong>
							</p>
							<p>
								In the ever growing world of knowledge today, it is necessary to keep in touch with the latest. Be it in the sphere of Science, Arts, Entertainment, Sports, Technology, Geography or new discovery about historical facts, one needs to keep pace with the all new areas of knowledge. The formation of the Quiz Club has been a great desire of our school as it becomes a definite instrument to bring about huge developments of its members. On becoming a member of this club a student will be bound to nurture the habit of collecting knowledge from every possible source like newspapers, magazines, quiz books, knowledge based T.V. channels and so on.
							</p>
							<p>
								<strong class="text-green">SOCIAL SERVICE CLUB</strong>
							</p>
							<p>
								Social service is part and parcel of <strong class='goudy'>SeQuins</strong>. The members of the club enhance and motivate moral values regarding their responsibility towards society. The children are taken to old age homes, orphanages to fulfill responsibility towards them by contributing with donations, food and study material. The club also donated generously to the local slum children. Old newspapers were collected from the staff and students and the proceedings from it were used to buy stationary the poor and needy students. Collection of clothes were made and given to the labour working in and around the school premises.
							</p>
							<p>
								<strong class="text-green">Horticulture Club</strong>
							</p>
							<p>
								The Horticulture Club provides instruction and hands down experience in basic gardening practices for those members who are interested in horticulture. Whether the student is a novice or an "old hand" at gardening, he or she will enjoy the down-to-earth information and activities presented.
							</p>
							<p>
								<strong class="text-green">Language Club</strong>
							</p>
							<p>
								The Club aims to give children the exciting opportunity to learn foreign languages by encouraging them to speak it in a relaxed learning environment while at the same time enjoying themselves. Our language tutor are qualified and experienced at teaching languages to young children by creating stimulating activities involving an equal mix of art, games, stories and role-play in a highly interactive way. All of the children will be kept engaged at all times and will learn without even realising it!
							</p>
							<p>
								<strong class="text-green">Film Society Club</strong>
							</p>
							<p>
								The Film Society aims at providing student with a clean and healthy value based entertainment with a view to look after their entertainment and educational need through the medium of films. The advent of Cinema heralded a new era it has become a powerful and effective tool of communications. In this century, almost every corner of the world adopts this medium as a powerful tool of social change.
							</p>
							<p>
								<strong class="text-green">Math Club</strong>
							</p>
							<p>
								The Math Club aims to promote interest and excitement about mathematics in a friendly, collaborative environment. Students extend their mathematical knowledge and critical thinking skills acquired in math class by practicing math problems during the Club hours. These Math techniques stimulate the mind and enhance the pattern of recognition and logical reasoning capabilities.
							</p>
							<p>
								<strong class="text-green">Aero- Modeling Club</strong>
							</p>
							<p>
								Aero- modeling is the art of designing, building and flying miniaturized aircrafts (powered or non-powered). While Aero- modeling has reached a certain degree of sophistication, one can build a model plane from any material which may include Paper, Balsa, Composites so on and so forth. This activity involves building and assembling model aircraft. Aero-modeling activity is consists of two skills basically. One is modeling of Aero model and the other one is flying of that model.
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