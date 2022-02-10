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
		<title>FAQ's - Selaqui International School</title>
		<meta name="description" content="Know all about how SelaQui International School will guide and prepare students for the Trinity College London.">
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
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Frequently Asked Questions</h1>
                </div>
        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                  <div class="team-img"> <img src="assets/images/about_school.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid"> </div>
                </div>
        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                  <p> <strong> What is the first step in the admission process?</strong> </p>
                  <p> The first step in the admission process is registration. You can do it online. The registration fee is Rs 9000/-. </p>
                  <p>&nbsp;</p>
                  <p> <strong> How far is the school from the airport?</strong> </p>
                  <p> It takes 56 minutes to travel from Dehradun Airport to Selaqui International School. The approximate driving distance between Dehradun Airport and Selaqui International School is 47 km. Travel time refers to the time taken if the distance is covered by a car. </p>
                  <p>&nbsp;</p>
                  <p> <strong> What is the school day like?</strong> </p>
                  <p> The school day is structured. Our students are busy from morning 6:00 am until 10:30 pm. From breakfast and house jobs to attending classes, sports and games, evening and night preps, our students are constantly engaged in something or the other. </p>
                  <p>&nbsp;</p>
                  <p> <strong> Is the school a co-ed institution?</strong> </p>
                  <p> The school is up to Senior Secondary School (XI-XII) and affiliated with the Central Board of Secondary Education (CBSE). It is a Coed Boarding School, with classes from V to XII.  </p>
                  <p>&nbsp;</p>
                  <p> <strong> How often do the students go on break?</strong> </p>
                  <p> There are two major breaks; summer and winter, which is at least 30 days long, and a Diwali break too. We avoid giving frequent breaks as it adversely affects the students’ schedule on campus. But, of course, urgency is always addressed. </p>
                  <p>&nbsp;</p>
                  <p> <strong> Where do your students come from?</strong> </p>
                  <p> Although it changes year to year, broadly we have students from all parts of India and abroad too.   </p>
                  <p>&nbsp;</p>
                  <p> <strong> Is playing a sport required, and what games and sports are offered at your school?</strong> </p>
                  <p> The students must indulge themselves in a sport. We have a fixed two and a half hours for the sports every day as it provides a physical outlet to the rigours of the academic day. The school has tennis courts, basketball courts, football fields, cricket oval, a full-length swimming pool, a shooting range, horse riding, Outdoor Chess Board etc.To see a complete list of the sports we offer, you can head to our website: www. selaqui.org. </p>
                  <p>&nbsp;</p>
                  <p> <strong> Do the school offer clubs and societies?</strong> </p>
                  <p> The school has clubs and societies that organise various activities to develop the skills and extract the best out of every child. The clubs include Cookery, Dramatics, Debates, Publishing, Sports and adventure, Lyceum,IT Club, Photography club,School Band etc. </p>
                  <p>&nbsp;</p>
                  <p> <strong> What is the language of instruction?</strong> </p>
                  <p> The language of instruction is English. </p>
                  <p>&nbsp;</p>
                  <p> <strong> How does the school support students when they finish their schooling at Selaqui International School?</strong> </p>
                  <p> There is an active career counselling unit in school to guide students on career choices. The school has an enabling environment to encourage students to achieve their potential, and help is available for the deserving candidate. </p>
                  <p>&nbsp;</p>
                  <p> <strong> What if my child feels homesick?</strong> </p>
                  <p> Every student is assigned to a student mentor for the first few weeks to make him comfortable, familiarise with the school infrastructure, practices, and ethos. Moreover, there is a whole pastoral team to look into it. </p>
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