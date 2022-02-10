<?php
session_start();
include('include/db.php');
@extract($_GET);
@extract($_POST);
$sql_stud = "SELECT distinct(cat) as catname from sela_tblcareer where active=1 order by catname ASC";
$result_stud = mysql_query($sql_stud) or die(mysql_error());
$num_rows=mysql_num_rows($result_stud);

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
		<title>Career at SelaQui International School</title>
		<meta name="description" content="Find out the details of current openings/career opportunities with Selaqui International School.">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Career at <strong class='goudy'>SelaQui</strong></span></h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/careers.jpg" alt="Headmaster" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<strong class='goudy'>SelaQui</strong> is a <a href="https://www.selaqui.org/">coeducational boarding school</a> and every staff member is required to undertake the professional roles and duties which the boarding environment demands and to contribute fully to the life of the community. Teachers at <strong class='goudy'>SelaQui</strong> are deeply committed to the academic, social and moral welfare of pupils; all have specific tutorial responsibilities and involvement in the boarding Houses. The School has its own salary scale, which compares favourably with CBSE pay scale and with the best schools in the country. Besides salary teachers also get host of other benefits.
							</p>
							<p>
								<strong>Basic Requirements:</strong>
							</p>
							<ul>
								<li>Post graduate in any discipline with a boarding school or a good college background</li>
								<li>Experience of working in boarding school</li>
								<li>Knowledge of the <a href="https://www.selaqui.org/cbse-boarding-school-curriculum.php">CBSE curriculum</a></li>
								<li>Passion for teaching and learning</li>
								<li>Proficiency in the English language </li>
								<li>Ability to inspire children to further their ambitions and dreams </li>
							</ul>
							<h2>Current Openings - Be a part of <strong class='goudy'>SelaQui</strong> Family...</h2>
							<ol class="olGrid">
								<li>Candidate are requested to read through the following documents carefully. <a href="Download/professional-standards.pdf" class="pdf" target="_blank" data-toggle="tooltip" title="Click to Download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
							</ol>
							<?
								while($result_row = mysql_fetch_array($result_stud))
								 {
								$cat1= $result_row['catname'];
								?>
							<p>
								<strong class="text-green"><? echo $result_row['catname'];?></strong>
							</p>
							<table class="table table-bordered striped">
								<thead>
									<tr>
										<th class="text-center"><strong>Subject/Title</strong></th>
										<th class="text-center"><strong>Minimum Experience</strong></th>
										<th class="text-center"><strong>Apply</strong></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$sql_stud1 = "SELECT * from sela_tblcareer where cat='".$cat1."' and active=1 order by id DESC";
										//print_r($sql_stud1);
										$result_stud1 = mysql_query($sql_stud1) or die(mysql_error());
										  $i=1;
										while($result_row1 = mysql_fetch_array($result_stud1))
										{	
										if($i%2==0) 
										{
										   $x = "bgcolor='#F4F4F4'";
										} 
										 
										else
										{
											$x = "bgcolor='#FFFFFF'";
										} 
										?>
									<tr <?=$x;?>>
										<td class="text-center"><? echo $result_row1['subject'];?> <?php if($result_row1['subject']=="Director of Sports" || $result_row1['subject']=="Headmaster" )
											{?><img src="images/new.GIF" ><?php }?></td>
										<td class="text-center"><? echo $result_row1['experience'];?></td>
										<td class="text-center"><a href="job-application.php?id=<?=$result_row1['id']?>&subject=<?=$result_row1['subject']?>&cat=<?=$result_row1['cat']?>&JobDesignation=<?=$result_row1['JobDesignation']?>"  class="btn btn-common btn-block"> Apply</a></td>
									</tr>
									<? $i++;
										}?>
								</tbody>
							</table>
							<? }?>
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