<? 
 include("ccavenue/libfuncs.php3");
include('include/db.php');

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
	
	$orderqry="select * from entrance_exam  where id  =(SELECT memberid FROM payment WHERE ordercode = '".$Order_Id."')"; 
$orderres=mysql_query($orderqry) or die(mysql_error());
$orderrow=mysql_fetch_array($orderres);
$name=$orderrow['student_name'];
$regno=$orderrow['id'];
$curdate=date("d-m-Y", strtotime(date("d-m-Y")));
$mobno=$orderrow['mobile_no'];
$var=$orderrow['admission_sought'];	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><link media="all" href="img/widget082.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Boarding Schools in India, Best Boarding Schools in India, Residential schools in India</title><link rel="shortcut icon" href="http://www.selaqui.org/images/favicon.ico" type="image/x-icon">
<meta name="description" content="Best Boarding and Residential schools in India. SelaQui International School is one of them top boarding school in India. It is a good co educational residential and boarding schools in Dehradun, India.  ">
<meta name="keywords" content="boarding schools in india, best boarding schools in india, residential schools in india, best residential schools in india, boarding schools in uttarakhand, residential schools in uttarakhand, international school in india, international schools in uttarakhand">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="INDEX,FOLLOW">
<meta name="YahooSeeker" content="INDEX,FOLLOW">
<meta name="msnbot" content="INDEX,FOLLOW">
<link rel='stylesheet' type='text/css' href='css/menu.css' />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/normalize.css" rel="stylesheet" type="text/css" />
 
 
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
</head>
<body>






<div id="main_wrapper">
<?// include('include/header.php'); ?>

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
  
   <div id="msgBlack">Transaction Successful!!!<br />Thanks for showing your interest. Our admissions team will contact you shortly <br /><br /><br /><br /></div>
            
  
<?php
 
if($Checksum=="true" && $AuthDesc=="Y")
   	   {
			 mysql_query("update payment set paymentstatus = 'Paid' where ordercode = '".$Order_Id."'"); ?>	
             <div id="msgBlack">Transaction Successful!!!<br />Thanks for showing your interest. Our admissions team will contact you shortly <br /><br /><br /><br /></div>
             
             <div id="wrapper" style="width:600px;">
<div class="txt" style="font:12px Verdana, Arial, Helvetica, sans-serif; color:#000000; width:700px; float:left;"><h2>Dear Parent/Student,</h2> <br />
<br /><br />


Greetings from SelaQui International School !<br />
<br />


Thanks for showing your interest. Our admissions team will contact you shortly.<br />
<br />

<br />

</div>
</div>
               <?
			   } else if($Checksum=="true" && $AuthDesc=="B"){
			   mysql_query("update payment set paymentstatus = 'Underprocess'  where ordercode = '".$Order_Id."'"); ?>
			   <div id="msgRed">Transaction In Process!!! We will contact you soon... <br /><br /><br /><br /></div>
			   <?php } else if($Checksum=="true" && $AuthDesc=="N"){
			   mysql_query("update payment set paymentstatus = 'Unsuccessful'  where ordercode = '".$Order_Id."'"); ?>
			   <div id="msgRed">Transaction Unsuccessful!!! Please Try Again... <br /><br /><br /><br /></div>
			   <?php }  else {
			   //echo "<br><strong style='color:red'>Security Error. Illegal access detected....</strong>";
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
<?// include('include/query_form.php');?>
</div>
</div>
</div>

</div>
<div class="cl"></div>
<div class="midpage_box_bottom"></div>
</div>


</div>        
<?// include('include/footer.php'); ?>
</div>


</body></html>