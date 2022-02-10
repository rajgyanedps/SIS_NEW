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
		<title>E-Granthalaya - SelaQui International School</title>
		<meta name="description" content="The School has a well-equipped air- conditioned and computerized library, with more than 8000 books a number that is growing day by day.">
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
          <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">E-Granthalaya</h1>
        </div>
<div class="team-item wow fadeInUp" data-wow-delay="0.2s">
          <div class="team-img"> <img src="assets/images/e_granthalaya.jpg" alt="Residential School India" data-toggle="tooltip" title="Residential School India" class="img-fluid"> </div>
        </div>
<div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
<p> <strong class="text-green">THE SCHOOL LIBRARY </strong> </p>
<p> The School has a well-equipped air- conditioned and computerized library, with more than 8000 books; a number that is growing day by day. The overall purpose of the Library and Resource Centre is to support the curriculum offered in SelaQui International School. The function of the library is to support and enrich classroom instruction through a collection of carefully selected material for the students and teachers of the school. The Library is well equipped with textbooks and reference books covering a wide range of subjects. The library has a subscription of 25 periodicals. Since the school aims at making learning a fun process, there is an assortment of books and magazines available on general topics and separate sections for books on travel, sports, animal care, short stories, adventure, drama, poetry, astrology, child psychology, parenting and other topics. </p>
<p>All new books are arranged on a display rack in the library and reviewed from time to time. All the books in the Library are bar-coded and classified that helps the teachers and students to view and search any book online, using the key words or the author’s name. The library uses its Library Management software. The books are arranged according to DDC. The school provides a dedicated research place for teachers and students where they can access a whole new world of e-resources, with a high speed internet connection available for them. </p>
<p>To encourage reading habit a special Reading Awards has been started for both Junior and senior category. In order to instill reading habits among the students and to create lifelong readers, book fairs are organized every year in the school premises. Apart from promoting literacy and reading habit, the book fairs present a vast panorama of books- varying from fiction to facts, poetry to puzzles, and anthologies to novels. The opportunity to browse books of different genres and subject matters has been a wonderful experience for the students. </p>
<p>The book fairs organized by the school have always received an overwhelming response from the students and teachers. </p>
<p> <strong class="text-green">LIBRARY RULES </strong> </p>
<ol>
          <li>All students and members of the staff are members of the library. </li>
          <li>Students are permitted to borrow only two books at a time for a period of fifteen days. </li>
          <li>Marking, underlining or writing on library books, periodicals, and newspapers is strictly forbidden. </li>
          <li>Reference books and periodicals are non- issuable books. These can be consulted only in the library. </li>
          <li>To encourage timely return of library materials and to provide optimal sharing of the collections, fines are charged for overdue items. If books are not returned within the due date, fines will be charged from the first overdue day @ Rs 5/. </li>
          <li>The Librarian may call for a book at any time, even if the normal period of loan has not expired. </li>
          <li>In the case of a book that is misused, wrongly handled or lost the person concerned will have to replace the book or pay double the price of the book. </li>
          <li>After reading, ensure that the books are left on the tables only. Periodicals and newspapers are to be kept back at their respective places. </li>
          <li>The members should take good care of library furnishings. Make sure the library looks as good when you leave as it did when you came in. </li>
          <li>Library books are to be deposited at least one week before leaving for vacation. </li>
          <li>Library computers are for academic purposes only. Do not tamper with the computer settings. Follow the internet safety guidelines. </li>
          <li>Strict order and silence shall be maintained in the library and speak softly if needed. </li>
        </ol>
<p> <strong class="text-green">General Resources </strong> </p>
<ul class="governors">
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="https://diksha.gov.in/" target="_blank"><img src="assets/images/L_3.jpg" alt="" data-toggle="tooltip" title="https://diksha.gov.in/" class="img-fluid" data-original-title="https://diksha.gov.in/"></a> </div>
            </div>
  </li>
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="https://ndl.iitkgp.ac.in/" target="_blank"><img src="assets/images/L_4.jpg" alt="" data-toggle="tooltip" title="https://ndl.iitkgp.ac.in/" class="img-fluid" data-original-title="https://ndl.iitkgp.ac.in/"></a> </div>
            </div>
  </li>
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="http://cbseacademic.nic.in/index.html" target="_blank"><img src="assets/images/L_5.jpg" alt="" data-toggle="tooltip" title="http://cbseacademic.nic.in/index.html" class="img-fluid" data-original-title="http://cbseacademic.nic.in/index.html"></a> </div>
            </div>
  </li>
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="https://ncert.nic.in/textbook.php" target="_blank"><img src="assets/images/L_6.jpg" alt="" data-toggle="tooltip" title="https://ncert.nic.in/textbook.php" class="img-fluid" data-original-title="https://ncert.nic.in/textbook.php"></a> </div>
            </div>
  </li>
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="http://epathshala.nic.in/process.php?id=students&type=Supplementry-Books&ln=en" target="_blank"><img src="assets/images/L_7.jpg" alt="" data-toggle="tooltip" title="http://epathshala.nic.in/process.php?id=students&type=Supplementry-Books&ln=en" class="img-fluid" data-original-title="http://epathshala.nic.in/process.php?id=students&type=Supplementry-Books&ln=en"></a> </div>
            </div>
  </li>
          <li>
    <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="team-img"> <a href="http://www.olabs.edu.in/" target="_blank"><img src="assets/images/L_8.jpg" alt="" data-toggle="tooltip" title="http://www.olabs.edu.in/" class="img-fluid" data-original-title="http://www.olabs.edu.in/"></a> </div>
            </div>
  </li>
        </ul>
<p> <strong class="text-green">Magazines/ Newspapers</strong> </p>
<ul class="governors">
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.champak.in/stories" target="_blank"><img src="assets/images/L_10.jpg" alt="" data-toggle="tooltip" title="https://www.champak.in/stories" class="img-fluid" data-original-title="https://www.champak.in/stories"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://kids.nationalgeographic.com/" target="_blank"><img src="assets/images/L_11.jpg" alt="" data-toggle="tooltip" title="https://kids.nationalgeographic.com/" class="img-fluid" data-original-title="https://kids.nationalgeographic.com/"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.downtoearth.org.in/archives" target="_blank"><img src="assets/images/L_12.jpg" alt="" data-toggle="tooltip" title="https://www.downtoearth.org.in/archives" class="img-fluid" data-original-title="https://www.downtoearth.org.in/archives"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.educationworld.in/" target="_blank"><img src="assets/images/L_13.jpg" alt="" data-toggle="tooltip" title="https://www.educationworld.in/" class="img-fluid" data-original-title="https://www.educationworld.in/"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://vigyanprasar.gov.in/dream-2047/" target="_blank"><img src="assets/images/L_14.jpg" alt="" data-toggle="tooltip" title="https://vigyanprasar.gov.in/dream-2047/" class="img-fluid" data-original-title="https://vigyanprasar.gov.in/dream-2047/"></a> </div>
  </div>
        </li>

<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="http://newindiasamachar.pib.gov.in/" target="_blank"><img src="assets/images/L_15.jpg" alt="" data-toggle="tooltip" title="http://newindiasamachar.pib.gov.in/" class="img-fluid" data-original-title="http://newindiasamachar.pib.gov.in/"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://epaper.tribuneindia.com/" target="_blank"><img src="assets/images/L_16.jpg" alt="" data-toggle="tooltip" title="https://epaper.tribuneindia.com/" class="img-fluid" data-original-title="https://epaper.tribuneindia.com/"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.telegraphindia.com/" target="_blank"><img src="assets/images/L_17.jpg" alt="" data-toggle="tooltip" title="https://www.telegraphindia.com/" class="img-fluid" data-original-title="https://www.telegraphindia.com/"></a> </div>
  </div>
        </li>

<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://indianexpress.com/" target="_blank"><img src="assets/images/L_18.jpg" alt="" data-toggle="tooltip" title="https://indianexpress.com/" class="img-fluid" data-original-title="https://indianexpress.com/"></a> </div>
  </div>
        </li>
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.businessweekly.co.uk/" target="_blank"><img src="assets/images/L_19.jpg" alt="" data-toggle="tooltip" title="https://www.businessweekly.co.uk/" class="img-fluid" data-original-title="https://www.businessweekly.co.uk/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.dailypioneer.com/" target="_blank"><img src="assets/images/L_20.jpg" alt="" data-toggle="tooltip" title="https://www.dailypioneer.com/" class="img-fluid" data-original-title="https://www.dailypioneer.com/"></a> </div>
  </div>
        </li>
</ul>
<p> <strong class="text-green">Imp References</strong> </p>
<ul class="governors">
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://spaceplace.nasa.gov/" target="_blank"><img src="assets/images/L_21.jpg" alt="" data-toggle="tooltip" title="https://spaceplace.nasa.gov/" class="img-fluid" data-original-title="https://spaceplace.nasa.gov/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.nasa.gov/kidsclub/index.html" target="_blank"><img src="assets/images/L_22.jpg" alt="" data-toggle="tooltip" title="https://www.nasa.gov/kidsclub/index.html" class="img-fluid" data-original-title="https://www.nasa.gov/kidsclub/index.html"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://thekidshouldseethis.com/tagged/science" target="_blank"><img src="assets/images/L_23.jpg" alt="" data-toggle="tooltip" title="https://thekidshouldseethis.com/tagged/science" class="img-fluid" data-original-title="https://thekidshouldseethis.com/tagged/science"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="http://kidssearch.com/" target="_blank"><img src="assets/images/L_24.jpg" alt="" data-toggle="tooltip" title="http://kidssearch.com/" class="img-fluid" data-original-title="http://kidssearch.com/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://kids.kiddle.co/" target="_blank"><img src="assets/images/L_25.jpg" alt="" data-toggle="tooltip" title="https://kids.kiddle.co/" class="img-fluid" data-original-title="https://kids.kiddle.co/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.kidtopia.info/" target="_blank"><img src="assets/images/L_26.jpg" alt="" data-toggle="tooltip" title="https://www.kidtopia.info/" class="img-fluid" data-original-title="https://www.kidtopia.info/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.guinnessworldrecords.com/" target="_blank"><img src="assets/images/L_27.jpg" alt="" data-toggle="tooltip" title="https://www.guinnessworldrecords.com/" class="img-fluid" data-original-title="https://www.guinnessworldrecords.com/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.coca-colaindia.com/limca-book-of-records" target="_blank"><img src="assets/images/L_28.jpg" alt="" data-toggle="tooltip" title="https://www.coca-colaindia.com/limca-book-of-records" class="img-fluid" data-original-title="https://www.coca-colaindia.com/limca-book-of-records"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.dkfindout.com/uk/" target="_blank"><img src="assets/images/L_29.jpg" alt="" data-toggle="tooltip" title="https://www.dkfindout.com/uk/" class="img-fluid" data-original-title="https://www.dkfindout.com/uk/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.factmonster.com/" target="_blank"><img src="assets/images/L_30.jpg" alt="" data-toggle="tooltip" title="https://www.factmonster.com/" class="img-fluid" data-original-title="https://www.factmonster.com/"></a> </div>
  </div>
        </li>
        </ul>

<p><strong class="text-green">Teachers Resources</strong> </p>
<ul class="governors">
<li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="http://egyankosh.ac.in/" target="_blank"><img src="assets/images/L_31.jpg" alt="" data-toggle="tooltip" title="http://egyankosh.ac.in/" class="img-fluid" data-original-title="http://egyankosh.ac.in/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="http://www.teachersofindia.org/en" target="_blank"><img src="assets/images/L_32.jpg" alt="" data-toggle="tooltip" title="http://www.teachersofindia.org/en" class="img-fluid" data-original-title="http://www.teachersofindia.org/en"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://itpd.ncert.gov.in/" target="_blank"><img src="assets/images/L_33.jpg" alt="" data-toggle="tooltip" title="https://itpd.ncert.gov.in/" class="img-fluid" data-original-title="https://itpd.ncert.gov.in/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.weareteachers.com/free-online-learning-resources/" target="_blank"><img src="assets/images/L_34.jpg" alt="" data-toggle="tooltip" title="https://www.weareteachers.com/free-online-learning-resources/" class="img-fluid" data-original-title="https://www.weareteachers.com/free-online-learning-resources/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.edhelper.com/" target="_blank"><img src="assets/images/L_35.jpg" alt="" data-toggle="tooltip" title="https://www.edhelper.com/" class="img-fluid" data-original-title="https://www.edhelper.com/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.teachertopia.info/" target="_blank"><img src="assets/images/L_36.jpg" alt="" data-toggle="tooltip" title="https://www.teachertopia.info/" class="img-fluid" data-original-title="https://www.teachertopia.info/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.hippocampus.org/" target="_blank"><img src="assets/images/L_37.jpg" alt="" data-toggle="tooltip" title="https://www.hippocampus.org/" class="img-fluid" data-original-title="https://www.hippocampus.org/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="http://oer.educ.cam.ac.uk/wiki/Home" target="_blank"><img src="assets/images/L_38.jpg" alt="" data-toggle="tooltip" title="http://oer.educ.cam.ac.uk/wiki/Home" class="img-fluid" data-original-title="http://oer.educ.cam.ac.uk/wiki/Home"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://newsela.com/" target="_blank"><img src="assets/images/L_39.jpg" alt="" data-toggle="tooltip" title="https://newsela.com/" class="img-fluid" data-original-title="https://newsela.com/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://phet.colorado.edu/" target="_blank"><img src="assets/images/L_40.jpg" alt="" data-toggle="tooltip" title="https://phet.colorado.edu/" class="img-fluid" data-original-title="https://phet.colorado.edu/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://concord.org/our-work/focus-areas/stem-models-simulations/" target="_blank"><img src="assets/images/L_41.jpg" alt="" data-toggle="tooltip" title="https://concord.org/our-work/focus-areas/stem-models-simulations/" class="img-fluid" data-original-title="https://concord.org/our-work/focus-areas/stem-models-simulations/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.scientificamerican.com/" target="_blank"><img src="assets/images/L_42.jpg" alt="" data-toggle="tooltip" title="https://www.scientificamerican.com/" class="img-fluid" data-original-title="https://www.scientificamerican.com/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.sciencefriday.com/science-friday-podcasts/" target="_blank"><img src="assets/images/L_43.jpg" alt="" data-toggle="tooltip" title="https://www.sciencefriday.com/science-friday-podcasts/" class="img-fluid" data-original-title="https://www.sciencefriday.com/science-friday-podcasts/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://edu.rsc.org/eic" target="_blank"><img src="assets/images/L_44.jpg" alt="" data-toggle="tooltip" title="https://edu.rsc.org/eic" class="img-fluid" data-original-title="https://edu.rsc.org/eic"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.sciencebuddies.org/" target="_blank"><img src="assets/images/L_45.jpg" alt="" data-toggle="tooltip" title="https://www.sciencebuddies.org/" class="img-fluid" data-original-title="https://www.sciencebuddies.org/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://www.pbs.org/wgbh/nova/" target="_blank"><img src="assets/images/L_46.jpg" alt="" data-toggle="tooltip" title="https://www.pbs.org/wgbh/nova/" class="img-fluid" data-original-title="https://www.pbs.org/wgbh/nova/"></a> </div>
  </div>
        </li>
        <li>
          <div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
    <div class="team-img"> <a href="https://besthistorysites.net/general-history-resources/" target="_blank"><img src="assets/images/L_47.jpg" alt="" data-toggle="tooltip" title="https://besthistorysites.net/general-history-resources/" class="img-fluid" data-original-title="https://besthistorysites.net/general-history-resources/"></a> </div>
  </div>
        </li>
       
        </ul>

<p> <strong class="text-green">Dictionary/ Thesaurus</strong> </p>
<ul class="governors">
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.oxfordlearnersdictionaries.com/" target="_blank"><img src="assets/images/L_49.jpg" alt="" data-toggle="tooltip" title="https://www.oxfordlearnersdictionaries.com/" class="img-fluid" data-original-title="https://www.oxfordlearnersdictionaries.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.macmillandictionary.com/" target="_blank"><img src="assets/images/L_50.jpg" alt="" data-toggle="tooltip" title="https://www.macmillandictionary.com/" class="img-fluid" data-original-title="https://www.macmillandictionary.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://dictionary.cambridge.org/dictionary/" target="_blank"><img src="assets/images/L_51.jpg" alt="" data-toggle="tooltip" title="https://dictionary.cambridge.org/dictionary/" class="img-fluid" data-original-title="https://dictionary.cambridge.org/dictionary/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.thefreedictionary.com/" target="_blank"><img src="assets/images/L_52.jpg" alt="" data-toggle="tooltip" title="https://www.thefreedictionary.com/" class="img-fluid" data-original-title="https://www.thefreedictionary.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.merriam-webster.com/" target="_blank"><img src="assets/images/L_53.jpg" alt="" data-toggle="tooltip" title="https://www.merriam-webster.com/" class="img-fluid" data-original-title="https://www.merriam-webster.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.lexico.com/" target="_blank"><img src="assets/images/L_54.jpg" alt="" data-toggle="tooltip" title="https://www.lexico.com/" class="img-fluid" data-original-title="https://www.lexico.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.collinsdictionary.com/" target="_blank"><img src="assets/images/L_55.jpg" alt="" data-toggle="tooltip" title="https://www.collinsdictionary.com/" class="img-fluid" data-original-title="https://www.collinsdictionary.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://dict.hinkhoj.com/" target="_blank"><img src="assets/images/L_56.jpg" alt="" data-toggle="tooltip" title="https://dict.hinkhoj.com/" class="img-fluid" data-original-title="https://dict.hinkhoj.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.shabdkosh.com/" target="_blank"><img src="assets/images/L_57.jpg" alt="" data-toggle="tooltip" title="https://www.shabdkosh.com/" class="img-fluid" data-original-title="https://www.shabdkosh.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.wordhippo.com/" target="_blank"><img src="assets/images/L_58.jpg" alt="" data-toggle="tooltip" title="https://www.wordhippo.com/" class="img-fluid" data-original-title="https://www.wordhippo.com/"></a> </div>
</div>
</li>
</ul>

<p> <strong class="text-green">Subject Resources</strong> </p>
<ul class="governors">
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.math-drills.com/" target="_blank"><img src="assets/images/L_59.jpg" alt="" data-toggle="tooltip" title="https://www.math-drills.com/" class="img-fluid" data-original-title="https://www.math-drills.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.organic-chemistry.org/" target="_blank"><img src="assets/images/L_60.jpg" alt="" data-toggle="tooltip" title="https://www.organic-chemistry.org/" class="img-fluid" data-original-title="https://www.organic-chemistry.org/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://knowfree.tradepub.com/" target="_blank"><img src="assets/images/L_61.jpg" alt="" data-toggle="tooltip" title="https://knowfree.tradepub.com/" class="img-fluid" data-original-title="https://knowfree.tradepub.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.watchknowlearn.org/" target="_blank"><img src="assets/images/L_62.jpg" alt="" data-toggle="tooltip" title="http://www.watchknowlearn.org/" class="img-fluid" data-original-title="http://www.watchknowlearn.org/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://puzzlemaker.discoveryeducation.com/" target="_blank"><img src="assets/images/L_63.jpg" alt="" data-toggle="tooltip" title="https://puzzlemaker.discoveryeducation.com/" class="img-fluid" data-original-title="https://puzzlemaker.discoveryeducation.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="readinquirewrite.umich.edu" target="_blank"><img src="assets/images/L_64.jpg" alt="" data-toggle="tooltip" title="readinquirewrite.umich.edu" class="img-fluid" data-original-title="readinquirewrite.umich.edu"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.mrdonn.org/index.html" target="_blank"><img src="assets/images/L_65.jpg" alt="" data-toggle="tooltip" title="https://www.mrdonn.org/index.html" class="img-fluid" data-original-title="https://www.mrdonn.org/index.html"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.albert.io/subjects/middle-school/math" target="_blank"><img src="assets/images/L_66.jpg" alt="" data-toggle="tooltip" title="https://www.albert.io/subjects/middle-school/math" class="img-fluid" data-original-title="https://www.albert.io/subjects/middle-school/math"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.physics4kids.com/" target="_blank"><img src="assets/images/L_67.jpg" alt="" data-toggle="tooltip" title="http://www.physics4kids.com/" class="img-fluid" data-original-title="http://www.physics4kids.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.chem4kids.com" target="_blank"><img src="assets/images/L_68.jpg" alt="" data-toggle="tooltip" title="http://www.chem4kids.com" class="img-fluid" data-original-title="http://www.chem4kids.com"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.numbernut.com/" target="_blank"><img src="assets/images/L_69.jpg" alt="" data-toggle="tooltip" title="http://www.numbernut.com/" class="img-fluid" data-original-title="http://www.numbernut.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.biology4kids.com/" target="_blank"><img src="assets/images/L_70.jpg" alt="" data-toggle="tooltip" title="http://www.biology4kids.com/" class="img-fluid" data-original-title="http://www.biology4kids.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.cosmos4kids.com/" target="_blank"><img src="assets/images/L_71.jpg" alt="" data-toggle="tooltip" title="http://www.cosmos4kids.com/" class="img-fluid" data-original-title="http://www.cosmos4kids.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.geography4kids.com/" target="_blank"><img src="assets/images/L_72.jpg" alt="" data-toggle="tooltip" title="http://www.geography4kids.com/" class="img-fluid" data-original-title="http://www.geography4kids.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.funenglishgames.com/writinggames/story.html" target="_blank"><img src="assets/images/L_73.jpg" alt="" data-toggle="tooltip" title="https://www.funenglishgames.com/writinggames/story.html" class="img-fluid" data-original-title="https://www.funenglishgames.com/writinggames/story.html"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.lepointdufle.net/p/francais-activites.htm" target="_blank"><img src="assets/images/L_74.jpg" alt="" data-toggle="tooltip" title="https://www.lepointdufle.net/p/francais-activites.htm" class="img-fluid" data-original-title="https://www.lepointdufle.net/p/francais-activites.htm"></a> </div>
</div>
</li>
</ul>

<p> <strong class="text-green">YOU TUBE Channel</strong> </p>
<ul class="governors">
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.youtube.com/channel/UCXVCgDuD_QCkI7gTKU7-tpg" target="_blank"><img src="assets/images/L_76.jpg" alt="" data-toggle="tooltip" title="https://www.youtube.com/channel/UCXVCgDuD_QCkI7gTKU7-tpg" class="img-fluid" data-original-title="https://www.youtube.com/channel/UCXVCgDuD_QCkI7gTKU7-tpg"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.youtube.com/channel/UC9MAhZQQd9egwWCxrwSIsJQ" target="_blank"><img src="assets/images/L_77.jpg" alt="" data-toggle="tooltip" title="https://www.youtube.com/channel/UC9MAhZQQd9egwWCxrwSIsJQ" class="img-fluid" data-original-title="https://www.youtube.com/channel/UC9MAhZQQd9egwWCxrwSIsJQ"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.youtube.com/channel/UCIEgH5vCwFLIczPSRAb2ASw" target="_blank"><img src="assets/images/L_78.jpg" alt="" data-toggle="tooltip" title="https://www.youtube.com/channel/UCIEgH5vCwFLIczPSRAb2ASw" class="img-fluid" data-original-title="https://www.youtube.com/channel/UCIEgH5vCwFLIczPSRAb2ASw"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.youtube.com/channel/UCj69RSSBzgCXIflpDYGgmzA" target="_blank"><img src="assets/images/L_79.jpg" alt="" data-toggle="tooltip" title="https://www.youtube.com/channel/UCj69RSSBzgCXIflpDYGgmzA" class="img-fluid" data-original-title="https://www.youtube.com/channel/UCj69RSSBzgCXIflpDYGgmzA"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.youtube.com/channel/UCW39zufHfsuGgpLviKh297Q" target="_blank"><img src="assets/images/L_80.jpg" alt="" data-toggle="tooltip" title="https://www.youtube.com/channel/UCW39zufHfsuGgpLviKh297Q" class="img-fluid" data-original-title="https://www.youtube.com/channel/UCW39zufHfsuGgpLviKh297Q"></a> </div>
</div>
</li>
</ul>

<p> <strong class="text-green">AUDIO BOOKS</strong> </p>
<ul class="governors">
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://librivox.org/" target="_blank"><img src="assets/images/L_82.jpg" alt="" data-toggle="tooltip" title="https://librivox.org/" class="img-fluid" data-original-title="https://librivox.org/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://stories.audible.com/discovery" target="_blank"><img src="assets/images/L_83.jpg" alt="" data-toggle="tooltip" title="https://stories.audible.com/discovery" class="img-fluid" data-original-title="https://stories.audible.com/discovery"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.storynory.com/" target="_blank"><img src="assets/images/L_84.jpg" alt="" data-toggle="tooltip" title="https://www.storynory.com/" class="img-fluid" data-original-title="https://www.storynory.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.storyberries.com/" target="_blank"><img src="assets/images/L_85.jpg" alt="" data-toggle="tooltip" title="https://www.storyberries.com/" class="img-fluid" data-original-title="https://www.storyberries.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://ciet.nic.in/pages.php?id=audiobook&ln=en" target="_blank"><img src="assets/images/L_86.jpg" alt="" data-toggle="tooltip" title="https://ciet.nic.in/pages.php?id=audiobook&ln=en" class="img-fluid" data-original-title="https://ciet.nic.in/pages.php?id=audiobook&ln=en"></a> </div>
</div>
</li>
</ul>
         
<p> <strong class="text-green">PDF & E- Books</strong> </p>
<ul class="governors">
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://monkeypen.com/pages/free-childrens-books" target="_blank"><img src="assets/images/L_88.jpg" alt="" data-toggle="tooltip" title="https://monkeypen.com/pages/free-childrens-books" class="img-fluid" data-original-title="https://monkeypen.com/pages/free-childrens-books"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.oxfordowl.co.uk/for-home/find-a-book/library-page/" target="_blank"><img src="assets/images/L_89.jpg" alt="" data-toggle="tooltip" title="https://www.oxfordowl.co.uk/for-home/find-a-book/library-page/" class="img-fluid" data-original-title="https://www.oxfordowl.co.uk/for-home/find-a-book/library-page/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.freechildrenstories.com/" target="_blank"><img src="assets/images/L_90.jpg" alt="" data-toggle="tooltip" title="https://www.freechildrenstories.com/" class="img-fluid" data-original-title="https://www.freechildrenstories.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://americanliterature.com/" target="_blank"><img src="assets/images/L_91.jpg" alt="" data-toggle="tooltip" title="https://americanliterature.com/" class="img-fluid" data-original-title="https://americanliterature.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://www.readprint.com/" target="_blank"><img src="assets/images/L_92.jpg" alt="" data-toggle="tooltip" title="http://www.readprint.com/" class="img-fluid" data-original-title="http://www.readprint.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="http://kavitakosh.org/kk/index.php" target="_blank"><img src="assets/images/L_93.jpg" alt="" data-toggle="tooltip" title="http://kavitakosh.org/kk/index.php" class="img-fluid" data-original-title="http://kavitakosh.org/kk/index.php"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.worldhistory.org/" target="_blank"><img src="assets/images/L_95.jpg" alt="" data-toggle="tooltip" title="https://www.worldhistory.org/" class="img-fluid" data-original-title="https://www.worldhistory.org/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.britannica.com/" target="_blank"><img src="assets/images/L_96.jpg" alt="" data-toggle="tooltip" title="https://www.britannica.com/" class="img-fluid" data-original-title="https://www.britannica.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://sportsecyclopedia.com/" target="_blank"><img src="assets/images/L_97.jpg" alt="" data-toggle="tooltip" title="https://sportsecyclopedia.com/" class="img-fluid" data-original-title="https://sportsecyclopedia.com/"></a> </div>
</div>
</li>
<li>
<div class="team-item wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
<div class="team-img"> <a href="https://www.newworldencyclopedia.org/entry/Info:Main_Page" target="_blank"><img src="assets/images/L_98.jpg" alt="" data-toggle="tooltip" title="https://www.newworldencyclopedia.org/entry/Info:Main_Page" class="img-fluid" data-original-title="https://www.newworldencyclopedia.org/entry/Info:Main_Page"></a> </div>
</div>
</li>
</ul>

        
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