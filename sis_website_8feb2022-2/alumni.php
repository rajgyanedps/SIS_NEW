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
		<title>Alumni - SelaQui International School Dehradun</title>
		<meta name="description" content="SelaQui International School thoroughly values its community and its relationship with them. To strengthen the existing threads and weave many a new, there is an Alumni Relations Office at SelaQui International School which is devoted to this cause. ">
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
							<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Alumni</h1>
						</div>
						<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="team-img">
								<img src="assets/images/alumni.jpg" alt="Alumni" class="img-fluid">
							</div>
						</div>
						<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
							<p>
								<strong class="text-red">Bonjour <strong class='goudy'>SeQuins</strong>!</strong>
							</p>
							<p>
								No, It’s no sayonara as yet!
							</p>
							<p>
								Regardless of whether you have graduated from the School, you will continue to shine like a <strong class='goudy'>SeQuin</strong> forever in our hearts. <a class="linkforseo" href="https://www.selaqui.org/"><strong class='goudy'>SelaQui</strong> International School</a> thoroughly values its community and its relationship with them. To strengthen the existing threads and weave many a new, there is an Alumni Relations Office  at <strong class='goudy'>SelaQui</strong> International School which is devoted to this cause. The Alumni Relations office’s (ARO) objective is to foster connections within the Alumni community, to make them feel engaged with their alma mater and turn them into contributors to the extent of their ability through both their time and personal resources.
							</p>
							<p>
								Alumni Relations Office regularly organizes Annual Alumni Meets and also Regional Meets in different cities across India. An Alumni lunch is hosted by the Headmaster during the Founder’s Day celebrations and another very popular annual feature is the cricket match between the School Team and Old <strong class='goudy'>SeQuins</strong>.  Such events provide an opportunity to catch-up with old-buddies and narrate ‘stories’. It is also about taking a trip down the memory lane together and re-live the moments of joy of playing sports together and innocent laughter you shared with your friends here at <strong class='goudy'>SelaQui</strong>.
							</p>
							<p>
								Alumni Relations Office communicates regularly with the Alumni community through Newsletters, Social Media platforms and other resources. The idea is to keep the community well-connected and well informed about the school’s development and achievements. We aim to ensure that <strong class='goudy'>SelaQui</strong> Alum, both in India and overseas, remain connected with their alma mater and with the friends they made here for life.
							</p>
							<p>Please leave your contact details with the ARO on:</p>
							<p>Email: <a href="mailto:alumni@selaqui.org">alumni@selaqui.org</a></p>
							<p>Phone: 0135-3051201</p>
							<!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfNXo7ONGzCPFdQLYnogcJGi3X_x_wRk-15AZyJZtTz_bCpQw/viewform?embedded=true" width="100%" height="1581" frameborder="0" marginheight="0" marginwidth="0" class="container-form wow fadeInLeft" data-wow-delay="0.2s">Loading...</iframe>-->
							<iframe src="https://forms.office.com/Pages/ResponsePage.aspx?id=aW4sGeGjRUG-dCgMXqaGSvdcqrEDwFpJiZ6vtbWw-FlUM0dTT1lIQTUxVDlRWUpEQThKOTNZS0tNRi4u" width="100%" height="1581" frameborder="0" marginheight="0" marginwidth="0" class="container-form wow fadeInLeft" data-wow-delay="0.2s">Loading...</iframe>
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
		<script src="assets/js/upload/uploadcontrol.js"></script>
		<!--<script src="assets/js/form-validator.min.js"></script>
			<script src="assets/js/contact-form-script.min.js"></script>-->
		<script src="assets/js/jquery.validate.js"></script>
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
		<script>
			$(document).ready(function() {
			      // validate the comment form when it is submitted
			      //$("#commentForm").validate();
			      
			      // validate signup form on keyup and submit
			      $("#appform").validate({
			      	rules: {
			      		fname: "required",
			      		lname: "required",
			      		dd:"required",
			      		mon:"required",
			      		yr:"required",
			      		onlinetest_date:"required",
			      		father_fname:"required",
			      		father_lname:"required",
			      		mobile:{
			      			required: true,
			      			number: true,
			
			      			minlength: 10
			
			      		},
			      		email: {
			      			required: true,
			      			email: true
			      		},
			      		comm_add1:"required",
			      		comm_add2:"required",
			      		comm_country:"required",
			
			      		comm_state:"required",
			      		comm_city:"required",
			      		comm_pin:{
			      			required: true,
			
			      			minlength: 6
			
			
			      		},
			      		classname:"required",
			      		schoolname:"required",
			      		admission_sought:"required",
			
			
			      		uname: {
			      			required: true,
			      			minlength: 2
			      		},
			      		password: {
			      			required: true,
			      			minlength: 5
			      		},
			      		cpassword: {
			      			required: true,
			      			minlength: 5,
			      			equalTo: "#password"
			      		}
			
			
			
			      	},
			      	messages: {
			      		fname: "Enter first Name",
			      		lname: "Enter lastname",
			      		dd:"Select Day",
			      		mon:"Select Month.",
			      		yr:"Select Year",
			      		onlinetest_date:"Select Online Test Date",
			      		father_fname:"Enter first Name",
			      		father_lname:"Enter Last Name.",
			
			      		comm_add1:"Enter Address1",
			      		comm_add2:"Enter Address2.",
			      		comm_country:"Select Country.",
			      		comm_state:"Enter State.",
			      		comm_city:"Enter City.",
			      		comm_pin:"Enter 6 Digit Pin code.",
			      		classname:"Select class.",
			      		schoolname:"Enter School Name.",
			      		admission_sought:"Select Admission Class.",
			      		uname: {
			      			required: "Enter a username",
			      			minlength: "Your username must consist of at least 2 characters"
			      		},
			      		password: {
			      			required: "Enter your password",
			      			minlength: "Your password must be at least 5 characters long"
			      		},
			      		confirm_password: {
			      			required: "Enter your password"
			
			
			      		},
			      		email: "Enter a valid email address"
			
			      	}
			      });
			      
			      // propose username by combining first- and lastname
			      
			      
			      //code to hide topic selection, disable for demo
			      
			  });
		</script>
		<script>
			function state_show(state_val){		
				if(state_val == 'India'){
					$('#state').css('display', 'block');
					$('#comm_state').css('display', 'none');
				}else{
					$('#state').css('display', 'none');
					$('#comm_state').css('display', 'block');
				}
			}
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