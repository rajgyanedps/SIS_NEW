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
		<title>Transfer Certificate - Selaqui International School Dehradun</title>
		<meta name="description" content="The primary goal of the transfer certificate is to release the student from the current school so that they can join others.">
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
                  <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Transfer Certificate</h1>
                </div>
        <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s"> 
                          <p> <strong class="text-green">2020-21</strong> </p>
 <ol class="olGrid">
                <!-- New Start -->
                <li>Aryan Verma <a href="Download/Transfer_certificate/TC-2021/Aryan-Verma-1873.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                <li>Krish Chandna <a href="Download/Transfer_certificate/TC-2021/Krish-Chandna-1624.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                 <li>Aarnav Agarwal <a href="Download/Transfer_certificate/TC-2021/Aarnav-Agarwal-1712.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                  <li>Adil Khan <a href="Download/Transfer_certificate/TC-2021/Adil-Khan-1532.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                   <li>Aditya Verma<a href="Download/Transfer_certificate/TC-2021/Aditya-Verma-1620.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                    <li>Aman Modak <a href="Download/Transfer_certificate/TC-2021/Aman-Modak-1617.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                     <li>Aryan Verma <a href="Download/Transfer_certificate/TC-2021/Aryan-Verma-1696.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                      <li>Devansh Sharma <a href="Download/Transfer_certificate/TC-2021/Devansh-Sharma-1622.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                       <li>Gaurang Garg <a href="Download/Transfer_certificate/TC-2021/Gaurang-Garg-1383.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                        <li>Harsh Choudhary <a href="Download/Transfer_certificate/TC-2021/Harsh-Choudhary-1654.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                         <li>Keshav Arora <a href="Download/Transfer_certificate/TC-2021/Keshav-Arora-1518.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                          <li>Kushagra Agrawal<a href="Download/Transfer_certificate/TC-2021/Kushagra-1516.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                           <li>Pavitra Jain <a href="Download/Transfer_certificate/TC-2021/Pavitra-Jain-1627.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                            <li>Suhanee Mishra <a href="Download/Transfer_certificate/TC-2021/Suhanee-Mishra-1592.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                             <li>Tanishq Pal Monga <a href="Download/Transfer_certificate/TC-2021/Tanishq-Pal-Monga-1713.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                             <li>Tanmay Bhatia <a href="Download/Transfer_certificate/TC-2021/Tanmay-Bhatia-1714.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                
                <li>Sumaer Raj Singh <a href="Download/Transfer_certificate/TC-2021/Sumaer-Raj-Singh-1527.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                <li>Atishay Jain <a href="Download/Transfer_certificate/TC-2021/Atishay-Jain-1537.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
				  <li>Ashar Iqbal <a href="Download/Transfer_certificate/TC-2021/Ashar-Iqbal-1246.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
				    <li>Divij sain <a href="Download/Transfer_certificate/TC-2021/Divij-Sain-1832.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                    <li>Ghanishth Agarwal <a href="Download/Transfer_certificate/TC-2021/Ghanishth-Agarwal-1808.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
                     <li>Panshul Agarwal <a href="Download/Transfer_certificate/TC-2021/Panshul-Agarwal-1720.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
               <li>Vedank Goel <a href="Download/Transfer_certificate/TC-2021/Vedank-Goel-1613.pdf" target="_blank" class="pdf" data-toggle="tooltip" title="Download File"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
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