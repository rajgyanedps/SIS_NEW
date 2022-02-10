<? //include("iit-jee/ccavenue/libfuncs.php3");
include("ccavenue/libfuncs.php3");
include('webadmin/include/db.php');
/*

	This is the sample RedirectURL PHP script. It can be directly used for integration with CCAvenue if your application is developed in PHP. You need to simply change the variables to match your variables as well as insert routines for handling a successful or unsuccessful transaction.

	return values i.e the parameters namely Merchant_Id,Order_Id,Amount,AuthDesc,Checksum,billing_cust_name,billing_cust_address,billing_cust_country,billing_cust_tel,billing_cust_email,delivery_cust_name,delivery_cust_address,delivery_cust_tel,billing_cust_notes,Merchant_Param POSTED to this page by CCAvenue. 

*/

	$WorkingKey = "saeqtmi7tvwsm6raqr" ; //put in the 32 bit working key in the quotes provided here
	$Merchant_Id= $_REQUEST['Merchant_Id'];
	$Amount= $_REQUEST['Amount'];
	$Order_Id= $_REQUEST['Order_Id'];
	$Merchant_Param= $_REQUEST['Merchant_Param'];
	$Checksum= $_REQUEST['Checksum'];
	$AuthDesc=$_REQUEST['AuthDesc'];
    $Checksum = verifyChecksum($Merchant_Id, $Order_Id , $Amount,$AuthDesc,$Checksum,$WorkingKey);
	
	$orderqry="select * from application  where app_id  =(SELECT memberid FROM ordermanagement WHERE ordercode = '".$Order_Id."')"; 
$orderres=mysql_query($orderqry) or die(mysql_error());
$orderrow=mysql_fetch_array($orderres);
$name=$orderrow['Name'];
$regno=$orderrow['id'];
$curdate=date("d-m-Y", strtotime(date("d-m-Y")));
$mobno=$orderrow['Mobileno'];
$var=$orderrow['admission_sought'];	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5N3WMT');</script>
<!-- End Google Tag Manager -->
<link media="all" href="img/widget082.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title><link rel="shortcut icon" href="http://www.selaqui.org/images/favicon.ico" type="image/x-icon">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="INDEX,FOLLOW">
<meta name="YahooSeeker" content="INDEX,FOLLOW">
<meta name="msnbot" content="INDEX,FOLLOW">

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/normalize.css" rel="stylesheet" type="text/css" />
<? $pos = strpos($var,'Arjuna');
	if($pos === false)
	{?>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4634742-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
	<? }
	else
	{ ?> 
	 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39563290-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <? } ?>  
<!-- Global site tag (gtag.js) - AdWords: 1040837567 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1040837567"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1040837567');
</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5N3WMT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->








<div id="main_wrapper">
<? //include('include/header.php'); 
include('include/menu.php');
include('include/class.php');
?>

<div class="midpage">
<div class="midpage_box">
<div class="midpage_box_topbg"></div>
<div class="midpage_box_rept">
<div class="midpage_box_content">
<div class="midpage_left_panel">
<div class="midpage_left_panel_banner">
  <div class="left_panel_mid_content">
   
  
<div id="contentContainer">
<div id="container">
  <div id="middlePart">
    <div id="middleTabContainer">
     
    </div>
    <div id="contentContainer">
       
    <div id="container">


  
  <div id="midCotainer" >
  <div style="margin:0 auto; width:900px;">
  
<?php
 
if($Checksum=="true" && $AuthDesc=="Y")
   	   {
			 mysql_query("update ordermanagement set paymentstatus = 'Paid' where ordercode = '".$Order_Id."'"); ?>	
             <!--<div id="msgBlack">Transaction Successful!!!<br />Thank You. <br /><br /><br /><br /></div>-->
             
             <div id="wrapper" style="width:600px;">
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:700px; float:left;"><h2>Dear Parent/Student,</h2> <br />
<br /><br />


Greetings from SelaQui International School !<br />
<br />


Thank you.Your registration is now complete. Our Admission Counselor will contact you shortly about the date of the entrance test and interview.<br />
<br />

Should you have  any further queries, Please feel free to get in touch with Ms. Bevelene Lyonette on phone <strong class="green_col"><span class="no_under"><a href="tel:+919873743433" onclick="_gaq.push(['_trackEvent', 'IIT/NEET', 'Call for NEET']);">+91 - 987 - 374 - 3433</a></span></strong> or write in to <strong class="green_col">admissions@selaqui.org</strong><br />
<br />
<br />
<strong>Best Wishes,</strong><br /><br />

<strong>Admission Team<br />
Sela<span class="goudy" style="font-weight:bold;">Q</span>ui International School</strong><br />
</div>
</div>
                <?
			   $email=$orderrow['Email'];
			  
			   $subject = "Congratulations! Your Registration Has Been Completed Successfully With Gurukul IIT JEE";
			   $txt ='<div id="wrapper" style="width:1000px; margin:auto; height:auto;">
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:1000px; float:left;">Dear Parent/Student, </div>
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:1000px; float:left; margin:10px 0;">Greetings from SelaQui International School !</div>
<div class="img" style="margin-left:220px; width:auto; float:left; padding:20px;"><img src="images/img.png" /></div>
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:1000px; float:left; margin:10px 0;">Thank you for completing the online registration. Our Admission Counselor will be in touch with you shortly for further course of action as mentioned below.</div>
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:1000px; float:left; margin:10px 0;">1.The student answers a preliminary online entrance test. The link for the test, username and password will be e-mailed to you on a mutually suitable date.<br /><br />
2.Once selected the student and parents will be asked to visit the campus for an entrance test and an interview with the Headmaster after which admission will be granted.<br /><br />
3.A fee of Rs 9,500/- will become payable for the entrance test and interview on the school campus. 
</div>
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:1000px; float:left; margin:10px 0;">For any further assistance please feel free to write in to admissions@selaqui.org or call on<br />
09927000585. <br />
<br />
<br />
<strong>Best Wishes,</strong><br />
<strong>Admission Team</strong><br />
<strong>SelaQui International School</strong><br />
</div>
</div>';
						
			   $bcc = "roopesh.madhesia@townschoolsindia.org";
			   
			   $headers  = 'MIME-Version: 1.0' . "\r\n";
			   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			   $headers .= 'Bcc: $bcc' . "\r\n";
			   $headers .= "From: noreply@selaqui.org". "\r\n";
			   $headers .= "Return-Path: <noreply@selaqui.org>". "";
	
			@mail($email,$subject,$txt,$headers);
			   } else if($Checksum=="true" && $AuthDesc=="B"){
			   mysql_query("update ordermanagement set paymentstatus = 'Underprocess'  where ordercode = '".$Order_Id."'"); ?>
			   <div id="msgRed">Transaction In Process!!! We will contact you soon... <br /><br /><br /><br /></div>
			   <?php } else if($Checksum=="true" && $AuthDesc=="N"){
			   mysql_query("update ordermanagement set paymentstatus = 'Unsuccessful'  where ordercode = '".$Order_Id."'"); ?>
			   <div id="msgRed">Transaction Unsuccessful!!! Please Try Again... <br /><br /><br /><br /></div>
			   <?php }  else {
			   echo "<br><strong style='color:red'>Security Error. Illegal access detected....</strong>";
			 }
?>
</div></div></div>
<? $pos = strpos($var,'Arjuna');
	if($pos === false)
	{
		 echo '<!-- Google Code for Registration Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1040837567;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "-r8BCLWF9QEQv9en8AM";
var google_conversion_value = 300;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1040837567/?value=300&amp;label=-r8BCLWF9QEQv9en8AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>';
}
	else
{
	 echo '<!-- Google Code for Registrations Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1009738736;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "mDjiCPjc9wEQ8Me94QM";
var google_conversion_value = 200;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1009738736/?value=200&amp;label=mDjiCPjc9wEQ8Me94QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
';
}
// print_r($var);//
  ?>  
      </div>
  </div>
 

  
</div>
</div>
</div>


</div>



</div>
<div class="midpage_right_panel">
<div class="midpage_right_panel_form">
<? //include('include/query_form.php');?>
</div>
</div>
</div>

</div>
<div class="cl"></div>
<div class="midpage_box_bottom"></div>
</div>


</div>        
<? include('include/footer.php'); ?>
</div>


</body></html>