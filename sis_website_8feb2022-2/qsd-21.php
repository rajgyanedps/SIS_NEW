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
		<title>QSD-21 - Selaqui International School</title>
		<meta name="description" content="The Science Decathlon is not any other academic competition. It is not for the best scientist or mathematician. It is not about individual brilliance and portraying your glorious acumen in the Sciences. ">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">QSD-21</h1>
						</div>
						<p align="center"><img src="assets/images/qsd-logo.png" alt="QSD-21" data-toggle="tooltip" title="QSD-21" class="img-fluid"></p>
							<p>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/qsd-banner.jpg" alt="Best Residential School India" data-toggle="tooltip" title="Best Residential School India" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                        
								<strong class="text-green">About The Event</strong>
							</p>
							<p>“The Science Decathlon is not any other academic competition. It is not for the best scientist or mathematician. It is not about individual brilliance and portraying your glorious acumen in the Sciences. This is a venture about challenging competitors and your team whose members who will become lifelong comrades. It is about outperforming your own expectations in a set of 5 events, where you will be part of a team, of students with a wide range of grades, striving towards a shared goal.</p>   

 <p>The Decathletes will master materials and harness skills beyond their current capacity. They will explore unique opportunities in STEM in these events – Physics, Chemistry, Biology, Computer Science or Mathematics. They will engage with the audience through facts as well as with confidence." </p>
							<p>
								<strong class="text-green">Events:</strong>
							</p>
							
							<ol>
								<li><strong>Mathematics Mashrooms</strong></li>
								<li><strong>Breakthrough Video</strong></li>
								<li><strong>Shutter Up</strong></li>
								<li><strong>Parenthesis</strong></li>
								<li><strong>Jeopardy</strong></li>
							</ol>
							<p>Date of Event :11 September,2021 (Saturday) </p>

<p><strong class="text-green">Import Dates:</strong></p>

<p>Registration Open: 26 August, 2021 </p>

<p>Last date of Registration: 05 September, 2021 </p>

<p>Last date of Registration (Breakthrough Video): 09 September, 2021 </p>
<p>
<strong class="text-green">Rules and Regulations of SelaQui Science Decathlon ‘21</strong>
</p>
<p><strong>General Instructions:</strong></p>
<ol>
								<li>All events can be participated either standalone or as part of a School Decathlon Team. Every School Decathlon Team to be comprised of 5 students.</li>

<li>The students must be from Grades 7-12 depending on the eligibility of individual events.</li>

<li>To be eligible for the Champions Trophy, it is mandatory for a School Decathlon Team to participate in all the events.</li>

<li>All students must be in school uniform or formals. </li>

<li>The decisions of the judges will be considered final and no further clarification will be entertained.</li>

<li>Every event will have a ranking based on the performance of the participant(s). There will be points for every position. The overall winner of QSD ’21 will be decided by compiling the results from the different events.  </li>
</ol>
<table class="table table-bordered striped">
<thead>
  <tr>
     <td valign="top" style="vertical-align: top !important;">S.No.</td>
     <td valign="top" style="vertical-align: top !important;">Events</td>
     <td valign="top" style="vertical-align: top !important;">Grades</td>
     <td valign="top" style="vertical-align: top !important;">Type of Event</td>
     <td valign="top" style="vertical-align: top !important;">Rules</td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td valign="top" style="vertical-align: top !important;">1. </td>
    <td valign="top" style="vertical-align: top !important;">Mathematics Mashrooms </td>
    <td valign="top" style="vertical-align: top !important;">9-12 </td>
    <td valign="top" style="vertical-align: top !important;">- Synchronous 

- Three Member Team</td>
    <td valign="top" style="vertical-align: top !important;">
    <ol>
    <li>There will be 3 parts to this live event.</li>
    <li>The different parts will take place in parallel in simultaneous break-out rooms on Microsoft Teams.</li>
    <li>Three members of the team will be participating as individuals in each of the 3 parts. </li>
    <li>The 3 different parts will be:
    <ul>
    <li>Sudoku
    <ul>
    <li>This part will have 3 puzzles to be solved in 100 minutes.</li>
<li>The 3 puzzles will be in increasing order of difficulty.</li>
<li>The final leader board will be decided based on the fastest to complete the 3 puzzles.</li>
<li>If no participant is able to complete any or all the puzzles in its entirety, the position will be decided based on the number of correct entries in the puzzle.</li>
    </ul>
    </li>
</ul>
<ul>
    <li>Vedic Math 
    <ul>
    <li>Three rounds of 10 questions each with increasing complexity of concepts.</li> 
	<li>All questions need to be solved using principles of Vedic Maths.</li>
	<li>A viva after the 3 rounds  to evaluate proper implementation by the judges.</li>
	<li>The final leader board will be decided by the combination of the time taken to solve the questions in the 3 rounds and the performance in the viva.</li>
    </ul>
    
</li>
    </ul>
    <ul>
    <li>Math Riddles
    <ul>
    <li>TEN riddles will be provided to each participant.</li>
<li>The time to solve them will be a maximum of 100 minutes.</li>
<li>For every correctly solved riddle, 5 points will be awarded.</li>
<li>For every incorrect submission, 2 points will be deducted.</li>
<li>The leader board at the end of the scheduled duration will be a cumulative total from all the riddles.</li>
    </ul>
    </li>
</ul>
    </li>
    </ol> 

 



 </td>
  </tr>
  <tr>
     <td valign="top" style="vertical-align: top !important;">2.</td>
     <td valign="top" style="vertical-align: top !important;">Shutter  Up</td>
     <td valign="top" style="vertical-align: top !important;">7-10</td>
     <td valign="top" style="vertical-align: top !important;"><p>- Asynchronous</p>
- Individual</td>
     <td valign="top" style="vertical-align: top !important;">
    <ol>
    <li>A photography competition</li>
<li>This event is not live.</li>
<li>This event is for individual participation. </li>
<li>The topic / theme will be shared at 1000 hrs on August 14, 2021 and the final submission from the participant must be done by 1600 hrs on August 14, 2021.</li>
<li>The participant has to capture 3 photographs on the theme provided.</li>
<li>The submission must bear the time stamp of the images.</li>
<li>No mixing, matching or morphing of photographs will be permitted. Software such as Photoshop etc. for enhancing the images is not permitted.</li>
<li>The organizers will have all rights for the use of these pictures as and when they deem fit.</li>
    </ol>
    </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Parenthesis</td>
    <td>9-12</td>
    <td><p>- Synchronous</p>
- Two Member Team</td>
    <td>
    <ol>
    <li>A coding event which will challenge the analytical skills of the teams.</li>
<li>This is a live event.</li>
<li>The event will take place in parallel in simultaneous break-out rooms on Microsoft Teams.</li>
<li>The teams will be given THREE scenarios to solve which need to be addressed with Java/C/C++/Python programming within the duration of 1 hour and 30 minutes.</li>
<li>Every team should provide only one solution. Multiple solutions will not be accepted and once it is submitted it can’t be changed.</li>
<li>The solution provided will be evaluated for originality by the judges through a viva-voce after the submission.</li>
<li>Copying the source code from the internet will lead to immediate disqualification from the contest. </li>
    </ol></td>
  </tr>
  <tr>
     <td valign="top" style="vertical-align: top !important;">4.</td>
     <td valign="top" style="vertical-align: top !important;">Breakthrough</td>
     <td valign="top" style="vertical-align: top !important;">7-12</td>
     <td valign="top" style="vertical-align: top !important;"><p>- Asynchronous</p>
- Individual / Team</td>
     <td valign="top" style="vertical-align: top !important;"><ol>
    <li>This is not a live event.</li>
<li>An individual participant or a team will get 10 days to create the video and must submit their creation by 1200 hrs on August 14, 2021.</li>
<li>The video must effectively explain a Mathematics / Science concept with demonstration of applications connected to the real world.</li>
<li>The length of the video must be between 5-7 minutes.</li>
<li>Care should be taken to ensure correct vocabulary/notation used in the explanation of the concept.</li> 
<li>Communicated facts and logic have to be scientifically accurate and must support the concept.</li> 
<li>Significant time must not be wasted on credits/bloopers.</li>
<li>Efforts must be taken to ensure clarity of the audio and video feed and suitable subtitles to be included in English. </li>
<li>Points will also be given for building around a theme or creating a memorable story(funny, entertaining, unique, etc.) </li>
<li>Any audio / visual content must follow all rules concerning copyrighted material.  </li>
<li>The organizers will have all rights for the use of these videos as and when they deem fit.</li>
    </ol></td>
  </tr>
  <tr>
     <td valign="top" style="vertical-align: top !important;">5.</td>
     <td valign="top" style="vertical-align: top !important;">Jeopardy</td>
     <td valign="top" style="vertical-align: top !important;">9-12</td>
     <td valign="top" style="vertical-align: top !important;"><p>- Synchronous</p>
- Individual</td>
     <td valign="top" style="vertical-align: top !important;"><ol>
    <li>This is a live event.</li>
<li>An initial ELIMINATION ROUND will be played to decide the top 5 participants. </li>
<li>The top 5 participants will compete in a quiz game comprising two rounds: Jeopardy! and Double Jeopardy!!</li>
<li>The Jeopardy! and Double Jeopardy! rounds will each feature five categories, with topics ranging from Physics, Chemistry, Biology, Computer Science, Astronomy and Current trends in Science, each of which contains five questions, which will be ostensibly valued by difficulty.</li>
<li>The highest ranked participant in the ELIMINATION ROUND will start the Jeopardy! round. </li>
<li>The Jeopardy! round will begin when the first participant selects a question, which may be from any position on the game board. The question will be revealed and read aloud by the host, after which the team will be given a chance to answer.
<ul>
<li> If the participant responds correctly, the question’s points value will be added to the participant's score, and then the board will be passed to the next participant.</li>
<li> An incorrect response will deduct the question's value from the participant's score and will allow the next participant the opportunity to respond. There will be no deductions on passed questions.</li>
<li> If no participant responds correctly or the question passes through all participants, the host will give the correct response.</li>
</ul>
</li>
<li>The participant who is leading from the first round will start the second round Double Jeopardy! round. </li>
<li>The second round, Double Jeopardy!, will feature five categories of questions again. The values will be doubled from the Jeopardy! Round for correct responses and incorrect responses will lose quadruple the number of points.</li>
<li>The winning participant will be declared after counting the total number of points of both the Jeopardy! and Double Jeopardy! rounds.</li>
    </ol></td>
  </tr>
  </tbody>
</table>



<p>
<strong class="text-green">Registration Form</strong>
</p>
<p><iframe src="https://forms.office.com/pages/responsepage.aspx?id=aW4sGeGjRUG-dCgMXqaGSvdcqrEDwFpJiZ6vtbWw-FlUODBPUlVaRlhMS0szSFlLWUlMQlVQRlRYMC4u" style="height:500px;width:100%; border:0;" title=""></iframe></p>
<p><strong class="text-green">Contact Person Details:</strong></p>

<p>Soham Roy </p>

<p>Head of Curriculum and RIDE (Research, Innovate, Design, Empower) </p>

<p><a href="mailto:Sohamr@selaqui.org">Sohamr@selaqui.org</a></p>

<p>9831632079 </p>

<div class="time-countdown justify-content-center wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <ol class="olGrid">
                        <li>QSD Brochure <a href="Download/qsd-brochure.pdf" class="pdf" target="_blank" data-toggle="tooltip" title="" data-original-title="Click to Download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                        <li>QSD Cover Letter<a href="Download/qsd-cover-letter.pdf" class="pdf" target="_blank" data-toggle="tooltip" title="" data-original-title="Click to Download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
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