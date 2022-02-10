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
		<title>Newsletter - Selaqui International School Dehradun</title>
		<meta name="description" content="Newsletter - Selaqui International School Dehradun">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Newsletter</h1>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
                        <p>
								<strong class="text-green">2021</strong>
							</p>
							<ol class="olGrid newsLetter">
							     <li>December Issue <a href="Download/newsletter/2021/dec-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>November Issue <a href="Download/newsletter/2021/nov-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>October Issue <a href="Download/newsletter/2021/october-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>September Issue 2<a href="Download/newsletter/2021/sep-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							     <li>September Issue 1 <a href="Download/newsletter/2021/Sep01-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>August Issue 2<a href="Download/newsletter/2021/Aug02-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							     <li>August Issue 1 <a href="Download/newsletter/2021/Aug01-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>July Issue <a href="Download/newsletter/2021/july-2021.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                            
<li>June Issue <a href="Download/newsletter/2021/JUNE-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
    <li>May Issue <a href="Download/newsletter/2021/MAY-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
  <li>April Issue <a href="Download/newsletter/2021/APR-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
<li>February Issue <a href="Download/newsletter/2021/Feb-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                  
							</ol>
                        
							<p>
								<strong class="text-green">2020</strong>
							</p>
							<ol class="olGrid newsLetter">
							    <li>December Issue 1<a href="Download/newsletter/2021/Dec-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                   <li>December Issue 2<a href="Download/newsletter/2021/Dec-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
  <li>November Issue 1<a href="Download/newsletter/2021/nov-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                 <li>November Issue 2<a href="Download/newsletter/2021/nov-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
 <li>October Issue <a href="Download/newsletter/2021/oct-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
  <li>September Issue <a href="Download/newsletter/2021/September-issue-1 .pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                                <li>September Issue Hindi<a href="Download/newsletter/2021/September-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
<li>August Issue <a href="Download/newsletter/2021/August-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
<li>July Issue <a href="Download/newsletter/2021/SeQuin-Issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
<li>July Issue <a href="Download/newsletter/2021/July-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>May Issue 1<a href="Download/newsletter/2020/may-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							    <li>April Issue 1<a href="Download/newsletter/2020/apr-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 1<a href="Download/newsletter/2020/mar-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 2<a href="Download/newsletter/2020/feb-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 1<a href="Download/newsletter/2020/feb-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong class="text-green">2019</strong>
							</p>
							<ol class="olGrid newsLetter">
								<li>December Issue 1<a href="Download/newsletter/2019/dec-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>November Issue 1<a href="Download/newsletter/2019/nov-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								
								<li>September Issue 1<a href="Download/newsletter/2019/sep-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 5<a href="Download/newsletter/2019/aug-issue-5.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 3<a href="Download/newsletter/2019/aug-issue-3a.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 3<a href="Download/newsletter/2019/aug-issue-3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 2<a href="Download/newsletter/2019/aug-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 1<a href="Download/newsletter/2019/aug-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>July Issue 1<a href="Download/newsletter/2019/jul-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 3<a href="Download/newsletter/2019/may-issue-3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 2<a href="Download/newsletter/2019/may-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 1<a href="Download/newsletter/2019/may-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 3<a href="Download/newsletter/2019/apr-issue-3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 2<a href="Download/newsletter/2019/apr-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 1<a href="Download/newsletter/2019/apr-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 4<a href="Download/newsletter/2019/mar-issue-4.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 3<a href="Download/newsletter/2019/mar-issue-3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 2<a href="Download/newsletter/2019/mar-issue-2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 1<a href="Download/newsletter/2019/mar-issue-1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong class="text-green">2018</strong>
							</p>
							<ol class="olGrid newsLetter">
								<li>November Issue 1<a href="Download/SeQuin_11.1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>November Issue 2<a href="Download/SeQuin_11.2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>October Issue 1<a href="Download/Sequin_10.1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>October Issue 2<a href="Download/Sequin_10.2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>September Issue 1<a href="Download/September9.1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>September Issue 2<a href="Download/September9.2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>September Issue 3<a href="Download/SeQuin_9.3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 1<a href="Download/August8.1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>August Issue 2<a href="Download/August8.2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>July Issue 1<a href="Download/newsletter_july_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>July Issue 2<a href="Download/newsletter_july_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>July Issue 3<a href="Download/newsletter_july_issue_3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>July Issue 4<a href="Download/newsletter_july_issue_4.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 1<a href="Download/newsletter_may_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 2<a href="Download/newsletter_may_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 3<a href="Download/newsletter_may_issue_3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 4<a href="Download/newsletter_may_issue_4.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>May Issue 5<a href="Download/newsletter_may_issue_5.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 1<a href="Download/newsletter_april_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 2<a href="Download/newsletter_april_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>April Issue 3<a href="Download/newsletter_april_issue_3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 1<a href="Download/newsletter_march_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 2<a href="Download/newsletter_march_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>March Issue 3<a href="Download/newsletter_march_issue_3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 1<a href="Download/newsletter_february_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 2<a href="Download/newsletter_february_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 3<a href="Download/newsletter_february_issue_3.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>January<a href="Download/newsletter_january.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong class="text-green">2017</strong>
							</p>
							<ol class="olGrid newsLetter">
								<li>April<a href="Download/april_2nd_issue.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong class="text-green">2016</strong>
							</p>
							<ol class="olGrid newsLetter">
								<li>December<a href="Download/dec_edition_2016.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>November Issue 1<a href="Download/1st_issue_nov_2016.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>November Issue 2<a href="Download/2nd_issue_nov_2016.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 1<a href="Download/feb_2016_issue_1.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>February Issue 2<a href="Download/feb_2016_issue_2.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<p>
								<strong class="text-green">2015</strong>
							</p>
							<ol class="olGrid newsLetter">
								<li>December<a href="Download/December_2015.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
								<li>November<a href="Download/November_2015.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
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