<?php
error_reporting(0);
session_start();
include('include/db.php');

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31536000"); //30days (60sec * 60min * 24hours * 30days)

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
        <meta http-equiv="Cache-control" content="public">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="canonical" href="<?php echo getCurrentPageURL('url'); ?>" />
        <link rel="alternate" href="<?php echo getCurrentPageURL('url'); ?>" hreflang="en-in" />
        <title>SelaQui - Best Boarding School for Girls, Co-Ed Boarding Schools in Dehradun, India</title>
        <meta name="description" content="SelaQui International School - Ranked Among the Top/Best co-ed CBSE Boarding Schools for Boys and Girls in Dehradun, India. Admission Open Now."/>
        <meta name="keywords" content="boarding school india, residential school india, best boarding schools in dehradun, co-ed boarding school india, best boarding schools in india, cbse boarding schools in india"/>
        <meta name="y_key" content="a11b0e777489b865"/>
        <meta name="alexaVerifyID" content="6ptx4tCpirXBdVcfCpQMRhKj2AM"/>
        <meta name="msvalidate.01" content="B05CD9B2C07E113CC3F50EB76039E57A"/>
        <meta name="msvalidate.01" content="1841804934F0F9E437C8CB7632934FE5"/>
        <meta name="y_key" content="e771acf95ca1d3af"/>
        <meta name="y_key\" content=\"e771acf95ca1d3af\"/>
        <meta name="robots"content="index,follow"/>
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
    <body>
        <div id="light" class="pop" style="display:block;">
            <div class="overlay"></div>
            <div class="loader_mail">
                <div class="loaderTC_mail">
                    <div class="content_mail">
                        <div class="container midcon1" style="max-width:600px;">
                            <!--<section id="admissionopen">
                                <div id="subscribe">
                                     <div class="container-fluid">
                                       <div class="row justify-content-md-center">
                                         <div class="col-lg-12">
                                           <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">		<img src="assets/images/sis_logo_test_w.png" alt="Sela Qui logo">	 
                                               <h2 class="subscribe-title">Admission Entrance Exam 2019-20</h2>
                                			<p class="wow fadeInDown" data-wow-delay="0.2s">Date: 27th January’2019</p>
                                			
                                			<h3 class="wow fadeInDown" data-wow-delay="0.2s">Exam center</h3>
                                			<ul>
                                				<li>Dehradun</li>
                                				<li>Delhi</li>
                                				<li>Lucknow</li>
                                				<li>Patna</li>
                                				<li>Guwahati</li>
                                				<li>Mumbai</li>
                                			</ul>
                                			<p class="wow fadeInDown" data-wow-delay="0.2s"><span>For more details <i class="fa fa-phone" aria-hidden="true"></i> : 7669-040404</span></p>
                                			
                                			<form class="text-center">      
                                               <a href="admission-entrance-exam-2019-20.php" class="btn btn-common">
                                               Register Now
                                               </a>
                                             </form>
                                		  
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                </section>-->
                            <section id="admissionopen">
                                <div id="subscribe">
                                    <div class="justify-content-md-center">
                                        <div class="subscribe-inner subscribe-inner1 wow fadeInDown" data-wow-delay="0.3s">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="entrancetest">
                                                        <img src="assets/images/aiee.jpg" class="img-fluid" alt="Admission Entrance Exam 2020-21" style="max-width:100%;">
                                                        <a href="admission-entrance-exam-2020-21.php">Register Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="close" onclick="return ClosePopUP();">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header-wrap">
            <?php include('include/menu.php'); ?>
            <? if (stristr($_SERVER['HTTP_USER_AGENT'],'mobi')!==FALSE) {
                echo  '<div id="main-slide" class="carousel slide" data-ride="carousel">        
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/images/slide1.jpg" alt="best co-ed boarding schools in India">
                	<div class="overlay"></div>
                          <div class="carousel-caption d-md-block">              
                            <h2 class="wow fadeInDown heading" data-wow-delay=".4s"> Admissions Open</h2>
                            <p class="fadeInUp wow" data-wow-delay=".6s">For Class V To IX & XI Session 2019-20</p>
                	  <p class="fadeInUp wow" data-wow-delay=".6s"><img class="img-fluid" src="assets/images/VMC-logo1.png" alt="Vidya Mandir classes">Specialized for "GURUKUL PROGRAMME"</p>
                	  <a href="https://www.selaqui.org/registration-form.php" class="fadeInLeft wow btn btn-common1 btn-lg" data-wow-delay=".6s">Apply Now</a>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/images/slide11.jpg" alt="top international schools in dehradun">
                	<div class="overlay"></div>            
                        </div>  
                      </div>
                      <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>';
                } else { ?>
            <div id="main-slide" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/images/slide1.jpg" alt="best co-ed boarding schools in India">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-md-block">
                            <h2 class="wow fadeInDown heading" data-wow-delay=".4s"> Admissions Open</h2>
                            <p class="fadeInUp wow" data-wow-delay=".6s">For Class V To IX & XI Session 2020-21</p>
                            <a href="https://www.selaqui.org/registration-form.php" class="fadeInLeft wow btn btn-common1 btn-lg" data-wow-delay=".6s">Apply Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/slide3.jpg" alt="boarding schools in Uttarakhand">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-md-block">
                            <p class="slideInLeft wow" data-wow-delay=".6s">"Personal attention and a disciplined</p>
                            <h2 class="wow slideInRight heading" data-wow-delay=".6s">approach in pedagogy"</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/slide4.jpg" alt="top boarding schools in Dehradun">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-md-block">
                            <h2 class="wow bounceIn heading" data-wow-delay=".7s">"Leadership and learning</h2>
                            <p class="fadeInUp wow" data-wow-delay=".6s">are indispensable to each other"</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/slide5.jpg" alt="best residential school in Dehradun">
                        <div class="overlay"></div>
                        <div class="carousel-caption d-md-block">
                            <p class="fadeInUp wow" data-wow-delay=".6s">"Sports facilities are excellent and very successful in bringing</p>
                            <h2 class="wow bounce heading" data-wow-delay=".7s">about outstanding level of achievement"</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/images/slide11.jpg" alt="top international schools in dehradun">
                        <div class="overlay"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            <? } ?> 
        </header>
        <section class="countdown-timer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title-header text-center">
                            <h1 class="section-title wow fadeInUp main-heading-h1" data-wow-delay="0.2s">Best CBSE Residential School for Boys & Girls in Dehradun, India</h1>
                        </div>
                    </div>
                    <div class="col-xl-12 text-justify">
                        <div class="row time-countdown justify-content-center wow fadeInRight" data-wow-delay="0.3s">
                            <p><strong class='goudy'>SelaQui</strong> International School is a co-ed CBSE boarding school nestled in a 52 acres campus with a natural spring running through it providing an ideal setting for education in a country setting.   Ranked among the best CBSE residential schools in Dehradun, it is open to boys and girls from class 5 onward, irrespective of their backgrounds. The School vision statement underlines a commitment to values, excellence and leadership, and is in the forefront of all pedagogical practices and ranks among top international schools in Uttarakhand. Students’ involvement in decision making is at the core of <strong class='goudy'>SelaQui</strong> education and the institution believes in nurturing a student community that is committed to nation building. The School boasts of an International student community from over 15 countries and 25 states of India and is among the top residential schools in India. Students also travel to other schools for international student exchange programmes. </p>
                            <p><strong class='goudy'>SelaQui</strong> International School provides opportunities to every student to excel in his/her chosen field. All students are encouraged to set a series of goals for themselves and they are mapped accordingly. The Goal setting practice and the Harkness table method are unique practices at <strong class='goudy'>SelaQui</strong>. The curriculum is designed around the 6 C’s - Critical thinking, Communication, Collaboration, Creativity, Character and Citizenship and all activities are aligned to it. The School has been producing the best board results in co-ed boarding school category for last two years.  </p>
                            <p>
                                The careers department helps students to prepare for competitive exams such as IIT/NEET / CLAT / SAT and university placements in India and abroad.
                            </p>
                            <p>The school has specialist sports programme with probably the best sporting facilities in India. The campus has a golf course, an equestrian centre, an indoor rifle shooting range, a cricket oval, two football pitches, five all weather tennis courts and two basketball and badminton courts. Every student plays at least two games throughout their school life.</p>
                            <p>There are more than two dozen clubs and societies for students to participate in, ranging from Ornithologist club, Shakespeare society, Debating club, Art and Music to Model United Nations and village development. Every student compulsorily spends around 12 hours in social service in a term and three days in a village as part of outreach programme. The School has a very strong tradition of mountaineering in school with students going for Everest Base camp and Kilimanjaro trip every year.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="admissionopen">
            <div id="subscribe" class="section-padding">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 col-lg-7">
                            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">			 
                                <?php include('include/admission_open_banner.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php include('include/E-Brochure.php'); ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <img class="img-fluid" src="assets/images/blog.jpg" alt="Blogs Link">
                                <div class="team-overlay">
                                    <div class="overlay-social-icon text-center">
                                        <!--<ul class="social-icons">
                                            <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>                      
                                            </ul>-->
                                    </div>
                                </div>
                            </div>
                            <div class="info-text">
                                <h3><a href="https://www.selaqui.org/blog/" target="_blank">Latest Blogs</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <?php include('include/news_glance.php'); ?> 
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="counter-section services section-padding">
            <div class="overley"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why <strong class='goudy'>SelaQui</strong>?</h2>
                        </div>
                    </div>
                </div>
                <div class="row services-wrapper">
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
                            <div class="icon">
                                <i class="fa fa-university"></i>
                            </div>
                            <div class="services-content">
                                <p>Pollution Free 52 Acres<br>
                                    Lush Green<br>
                                    Campus
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
                            <div class="icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="services-content">
                                <p>International<br>
                                    Exchange Program<br>
                                    For Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="services-content">
                                <p>Research Based<br>
                                    Experiential Learning
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="services-content">
                                <p>Air Conditioned<br>
                                    Boarding Houses
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1s">
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="services-content">
                                <p>Student Teacher <br>
                                    Ratio <strong>6:1</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fa fa-street-view"></i>
                            </div>
                            <div class="services-content">
                                <p>Excellent College Placements for Graduating Batch</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fa fa-wifi"></i>
                            </div>
                            <div class="services-content">
                                <p>Wi-Fi, Smart Classrooms,<br>
                                    Monitored and Secure<br>
                                    Campus
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="services-content">
                                <p>Career Information<br>
                                    and Guidance<br>
                                    Department 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                            <div class="services-content">
                                <p>Golf Course, Horse<br>
                                    Riding and Shooting<br>
                                    Range
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
                        <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="services-content">
                                <p>Qualified Resident Medical Team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sponsors" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
                    <div class="col-xl-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="spnsors-logo">
                                    <a href="https://india.afs.org/" target="_blank"><img src="assets/images/plc1.png" alt="Partners" /></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spnsors-logo">
                                    <a href="#"><img src="assets/images/plc2.png" alt="Partners" /></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spnsors-logo">
                                    <a href="#"><img src="assets/images/plc3.png" alt="Partners" /></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spnsors-logo">
                                    <a href="#"><img src="assets/images/plc4.png" alt="Partners" /></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spnsors-logo">
                                    <a href="#"><img src="assets/images/plc7.png" alt="Partners" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <? if (stristr($_SERVER['HTTP_USER_AGENT'],'mobi')!==FALSE) {
            } else { ?>  
        <? } ?>
        <section id="contact-map" class="section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title-header text-center">
                            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Admission Enquiry</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="form-wrapper">
                                <form role="form" method="post" id="reused_form">
                                    <div class="row">
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input type="hidden" name="fname" value="<?=$fname?>" />
                                                <select class="form-control" name="myself" id="myself" required>
                                                    <option value="">I am</option>
                                                    <option value="Student" >Student</option>
                                                    <option value="Parent" >Parent</option>
                                                    <option value="Visitor">Visitor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="fname" name="fname" placeholder="Name" value=""/>                        
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="email" name="email" placeholder="Email" value=""/>                        
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="mobile" maxlength="10" name="mobile" onkeypress="return isNumberKey(event)" placeholder="Mobile No." value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <?php 
                                                    $state_query = mysql_query("SELECT * FROM `state`");
                                                    ?>
                                                <select class="form-control" name="state" id="state" required="required">
                                                    <option value="">State</option>
                                                    <?php
                                                        while($res = mysql_fetch_assoc($state_query)){
                                                        ?>
                                                    <option value="<?=$res['state_name'];?>" ><?=$res['state_name'];?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="city" name="city" placeholder="City" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <select class="form-control" name="reference" id="reference">
                                                    <option value="">Information Source</option>
                                                    <option value="Google"  >Google</option>
                                                    <option value="Facebook" >Facebook</option>
                                                    <option value="Referral"  >Referral</option>
                                                    <option value="Seminar" >Seminar</option>
                                                    <option value="Newspaper Article" >Newspaper Article</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <select class="form-control" name="admission" id="admission">
                                                    <option value="">Admission Sought in</option>
                                                    <option value="V" >V</option>
                                                    <option value="VI" >VI</option>
                                                    <option value="VII"  >VII</option>
                                                    <option value="VIII" >VIII</option>
                                                    <option value="IX" >IX</option>
                                                    <option value="X"  >X</option>
                                                    <option value="XI Science / Medical"  >XI &#173; Science / Medical</option>
                                                    <option value="XI Science / Non-Medical"  >XI &#173; Science / Non-Medical</option>
                                                    <option value="XI Commerce" >XI &#173; Commerce</option>
                                                    <option value="XI Humanities"  >XI &#173; Humanities</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-fluid" style="height:30px;" alt="Captcha" />
                                                Refesh Captcha <a href='javascript: refreshCaptcha();' style="font-size:20px;" class="text-success"><strong> <i class="fa fa-refresh" aria-hidden="true"></i></strong></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-line">
                                            <div class="form-group">
                                                <input id="letters_code" name="letters_code" placeholder="Enter Captcha" type="text" value="" onClick="this.value='';" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-submit">
                                                <button type="submit" class="btn btn-common" id="form-submit" onclick="enquiry_save_details();"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="success_message" style="width:100%; height:100%; display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('include/footer-old.php'); ?>
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
        <script src="assets/js/form-validation.js"></script>
        <script src="assets/js/owlcarousel/owl.carousel.js"></script>
        <script src="assets/js/owlcarousel/owl.autoplay.js"></script>
        <script>
            $(document).ready(function() { 
              $('.owl-carousel').owlCarousel({
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
                    items: 3,
                    nav: true
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: true,
                    margin: 20,					
                  }
                }
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
        <script>
            $(function()
            {
                function after_form_submitted(data)
                { alert(data);
                    if(data.result == 'success')
                    {
                        $('form#reused_form').hide();
                        $('#success_message').show();
                        $('#error_message').hide();
                    }
                    else
                    {
                        $('#error_message').append('<ul></ul>');
            
                        jQuery.each(data.errors,function(key,val)
                        {
                            $('#error_message ul').append('<li>'+key+':'+val+'</li>');
                        });
                        $('#success_message').hide();
                        $('#error_message').show();
            
                        //reverse the response on the button
                        $('button[type="button"]', $form).each(function()
                        {
                            $btn = $(this);
                            label = $btn.prop('orig_label');
                            if(label)
                            {
                                $btn.prop('type','submit' );
                                $btn.text(label);
                                $btn.prop('orig_label','');
                            }
                        });
            
                    }//else
                }
            
            	$('#reused_form').submit(function(e)
                  {
                    e.preventDefault();
             
                    $form = $(this);
                    //show some response on the button
                    $('button[type="submit"]', $form).each(function()
                    {
                        $btn = $(this);
                        $btn.prop('type','button' );
                        $btn.prop('orig_label',$btn.text());
                        $btn.text('Sending ...');
                    });
            
            
                                $.ajax({
                            type: "POST",
                            url: 'enquiry_form_submission.php',
                            data: $form.serialize(),                
                           cache: false,
            
            				success: function (data) {
            			   if(data)
                    //{ 
                        $('#reused_form').hide();
                        $('#success_message').show();
                        $('#error_message').hide();
            			$('#success_message').append('<h3>'+data+'</h3>');
            			
                   // }
                        }
                        });
            
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