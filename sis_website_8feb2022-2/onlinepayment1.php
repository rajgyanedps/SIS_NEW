<?php
session_start();
include('include/db.php');
$Id = $_GET['app'];
 
$LastId = str_replace("0000"," ",$Id);
//print_r($LastId);die;
//echo "select app_id from student where stud_id = '".$LastId."'";
$Queryapp= mysql_fetch_array(mysql_query("select app_id from student where stud_id = '".$LastId."'"),MYSQL_ASSOC);
//echo "select * from application where app_id = '".$Queryapp['app_id']."'";
$Query= mysql_fetch_array(mysql_query("select * from application where app_id = '".$Queryapp['app_id']."'"),MYSQL_ASSOC);
$fetchdate = $Query['reg_date']; 
$Name        = $Query['student_fname'].' '.$Query['student_midname'].' '.$Query['student_lname'];
$Phone       = $Query['father_tel'];
$Mobile      = $Query['father_mobile'];
$Address     = $Query['father_add1'];
$country     = $Query['father_country'];
$mail        = $Query['father_email'];
$State        = $Query['father_state'];
$City        = $Query['father_city'];
 $zip         = $Query['father_pin'];
if(($Phone!='')&&($Mobile!=''))
  {
  $number = $Mobile; 
  }
if(($Phone!='')&&($Mobile==''))
  {
  $number = $Phone; 
  }  
  if(($Phone=='')&&($Mobile!=''))
  {
  $number = $Mobile; 
  }

//echo "select ordercode from ordermanagement where memberid = '".$LastId."'";
  
$QueryForOrderCode= mysql_fetch_array(mysql_query("select ordercode,Payamount from ordermanagement where memberid = '".$LastId."'"),MYSQL_ASSOC);
$OrderCode = $QueryForOrderCode['ordercode'];
$amount       = $QueryForOrderCode['Payamount'];

$var = base64_decode($_GET['course']);

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
function submitform()
{
document.forms["form1"].submit();
}
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>


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


</head>
<body >

<div id="main_wrapper">
<? include('include/header.php'); ?>

<div class="midpage">
<div class="midpage_box">
<div class="midpage_box_topbg"></div>
<div class="midpage_box_rept">
<div class="midpage_box_content">
<div class="midpage_left_panel">
<div class="midpage_left_panel_banner">
<div id="banner">

        <img src="images/slider/trynity_drama.png" alt="" border="0" title="" />

  </div>
 

<div class="left_panel_mid_content">
  <h1>  Payment process</h1><br />
  
<div id="contentContainer">
       
     <div id="aboutContent" style="width: 700px; float:left;">
    

      
        <h2>Terms and Conditions :
       </h2 ><div id="Content">
       <div class="cl"></div>
        <ul style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-family:Georgia, 'Times New Roman', Times, serif">
        <li><p>The online registration fee of Rs <?php echo $amount?>/- is non-refundable. This is also applicable in cases where the student does not answer the online entrance test. </p></li>
        <li><p>The selection of the student will be based on his/her performance in the entrance test and is solely at the discretion of the Admission Team. </p></li>
    <li><p>After selection in the preliminary online entrance test the student will be called to the school campus for an entrance test and interview with the Headmaster. </p></li>
     <li><p> Admission being granted will be at the discretion of the Headmaster and Admission Team. </p></li>
   
        </ul>
         </div>
       
       
<form name="form1" method="post" action="pay.php">
         <input type="hidden" name="lastid" value="<?php echo $LastId?>">
         <input type="hidden" name="date" value="<?php echo $fetchdate?>">
         <input type="hidden" name="ordercodeforreg" value="<?php echo $OrderCode?>">
         <input type="hidden" name="amounts" value="<?php echo $amount?>"> <!--Pass Customer Full Name -->
         <input type="hidden" name="billing_cust_name" value="<?php echo $Name?>"> <!--Pass Customer Full Name -->
         <input type="hidden" name="billing_cust_address" value="<?php echo $Address ?>"><!--Pass Customer Full Address-->
         <input type="hidden" name="billing_cust_country" value="<?php echo $country?>"> <!--Pass Customer Country -->
         <input type="hidden" name="billing_cust_state" value="<?php echo $State?>"><!--Pass Customer State -->
         <input type="hidden" name="billing_cust_city" value="<?php echo $City?>"> <!--Pass Customer City -->
         <input type="hidden" name="billing_zip" value="<?php echo $zip?>"> <!--Pass Customer Zip Code-->
         <input type="hidden" name="billing_cust_tel" value="<?php echo $number?>"> <!--Pass Customer Phone No-->
         <input type="hidden" name="billing_cust_email" value="<?php echo $mail?>"> <!--Pass Customer Email address-->
         <input type="hidden" name="delivery_cust_name" value="<?php echo $Name?>"> <!--Pass Same or other other detail fill by customer-->
         <input type="hidden" name="delivery_cust_address" value="<?php echo $Address ?>">
         <input type="hidden" name="delivery_cust_country" value="<?php echo $country?>">
         <input type="hidden" name="delivery_cust_state" value="<?php echo $State?>">
         <input type="hidden" name="delivery_cust_tel" value="<?php echo $number?>">
         <input type="hidden" name="delivery_cust_notes" value="">
         <input type="hidden" name="Merchant_Param" value="">
         <input type="hidden" name="billing_zip_code" value="">
         <input type="hidden" name="delivery_cust_city" value="">
         <input type="hidden" name="delivery_zip_code" value="">
<div class="cls" style="padding-left: 18px;"><!--<img src="img/dotline00.jpg">-->&nbsp;</div>
<fieldset style="width: 670px; border: 1px solid rgb(187, 212, 228);">
<legend><strong>Payment Detail :&nbsp;</strong></legend>
<div class="form-Contain">
<!--<label style="width: 130px; padding-left: 20px;">Offline:<font color="#cc0000"></font></label>-->
<span style="width: 70px;">
<label>
<!--<input type="radio" name="paymode" id="offline" value="offline" onclick="show_tr('msgSmallBlue1'); return true" />--></label>
</span>
<label style="width: 130px; padding-left: 20px;">Online:<font color="#cc0000"></font></label>
<span style="width: 70px;">
<!--<label>
<input type="radio" name="paymode" id="online"  value="online" onclick="show_tr('msgSmallGreen'); return true"   /></label>-->
<label>
<input type="radio" name="paymode" id="online"  value="online" checked  /></label>
</span>

<!--<label style="width: 130px; padding-left: 20px;">Deposit In Account:<font color="#cc0000"></font></label>-->
<span style="width: 70px;">
<label>
<!--<input type="radio" name="paymode" id="otheracc" value="otheracc" onclick="show_tr('msgSmallRed'); return true"  />--></label>
</span>



<span style="width: 70px;">
<label></label>
</span>
</div>
</fieldset>
</form>
<div class="cls" style="padding-left: 18px;"><!--<img src="img/dotline00.jpg">-->&nbsp;</div>
<div class="cls" style="padding-left: 18px;"></div>
<div id="msgSmallBlue1" style="display:none;"><a href="admission.pdf","mywindow","location=1,status=1,scrollbars=1,width=900,height=800"; target="_blank" style="color:#FF0000">Click here</a> to print your application form.<br />
Attach a demand draft of <strong>Rs. <?php echo $amount;//$price?></strong> drawn in favour of SelaQui International School Payable at Dehradun and send us at following address:<br />
<br />
<strong>SelaQui International School</strong><br />
<u>Head Office</u><br />
315/274,Westend Marg.<br />
M.B. Road, Saidulajab<br />
Near ITDC Delhi Haat<br />
New Delhi India - 110030
</div>
<div id="msgSmallGreen" style="display:block;">Click Pay Now button to pay registration fee of Rs.  <?php echo $amount?> through Credit Card/Net Banking/Debit Card.<br /><br />
<span style="width:750px;margin:0px; float:left; text-align:center;"><img src="images/paynow.jpg" onclick="submitform(this.form)"  /></span></div>
<div id="msgSmallRed" style="display:none; background:#fff">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<a href="admission.pdf","mywindow","location=1,status=1,scrollbars=1,width=900,height=800"; target="_blank" style="color:#FF0000">Click here</a> to print your application form.<br />
Deposit a sum of <strong>Rs. <?php echo $amount;//$price?></strong> in the Axis Bank account, mention the deposit details in the form and send us to the following address:<br />
<br />
<strong>SelaQui International School</strong><br />
315/274,Westend Marg.<br />
M.B. Road, Saidulajab<br />
Near ITDC Delhi Haat<br />
New Delhi India - 110030
</td>
</tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td width="30%" align="left" valign="middle">Bank:</td>
    <td width="70%" align="left" valign="middle"><strong>Axis Bank</strong></td>
  </tr>
  <tr>
    <td align="left" valign="middle">Account Name:</td>
    <td align="left" valign="middle"><strong>SELAQUI INTERNATIONAL SCHOOL</strong></td>
  </tr>
  <tr>
    <td align="left" valign="middle">Account No:</td>
    <td align="left" valign="middle"><strong>911010062609917</strong></td>
  </tr>
  <tr>
    <td align="left" valign="middle">IFSC Code:</td>
    <td align="left" valign="middle"><strong>UTIB0000093</strong></td>
  </tr>
    <tr>
    <td align="left" valign="middle">MICR Code:</td>
    <td align="left" valign="middle"><strong>248 211 002</strong></td>
  </tr>

  <tr>
    <td align="left" valign="middle">Branch: </td>
    <td align="left" valign="middle"><strong>Rajpur Road, Dehradun , Uttarakhand</strong></td>
  </tr>
</table>
</div>
  </div>
      </div>
</div>


</div>



</div>
<div class="midpage_right_panel">
<div class="midpage_right_panel_form">
<? include('include/query_form.php');?>
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

    
  


</body>

</html>