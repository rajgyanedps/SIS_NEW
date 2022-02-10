<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5N3WMT');</script>
<!-- End Google Tag Manager -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title><link rel="shortcut icon" href="http://www.selaqui.org/images/favicon.ico" type="image/x-icon">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots"content="index,follow">
<meta name="googlebot"content="INDEX,FOLLOW"/>
<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
<meta name="msnbot" content="INDEX,FOLLOW"/>

<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/normalize.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function check()
{

if(document.form1.accDet.value=="")
{
alert("Please fill your admission number");
document.form1.accDet.focus();
return false;
}
else {

 num = document.form1.accDet.value;
// alert(num); return false;
 if(isNaN(num))
   {
       alert("Please fill your correct admission number");
       document.form1.accDet.focus();
       return false;
  // var url = "account/"+num;
   //window.location.href=url;
 // window.open(url, "_self");
    }
  else {
         url = "account/"+num+".pdf"; 
		 window.open(url);
      }
   }
 }
 
 function check1()
{
var result=document.getElementById('result').value;

if(result=="")
{
   
alert("Please fill your admission number");
document.getElementById('result').focus();
return false;
}
else {

 num1 = document.getElementById('result').value;
// alert(num); return false;
 if(isNaN(num1))
   {
       alert("Please fill your correct admission number");
       document.getElementById('result').focus();
       return false;
  // var url = "account/"+num;
   //window.location.href=url;
 // window.open(url, "_self");
    }
  else {
         url = "result/"+num1+".pdf"; 
		 window.open(url);
      }
   }
 }
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<? @include('include/analytics.php'); ?>
    <? @include('include/slider_form.php'); ?>

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



<div class="container-fluid">
<? @include('include/header.php'); ?>

  <div class="cl"></div>
  <div class="row-fluid">
  <div class="pull-left span3">
 <? @include('include/sports-activities.php'); ?>
</div>
<div class=" span6 pull-left">
  <h1><span class="goudy" style="font-weight:bold; font-size:25px;">Imprest Details</span></h1>
  
<div id="Content2">
        <table width="100%" cellspacing="0" cellpadding="0" style="border:dashed #2A1F55 1px;" >
            <tr>
              
              <td width="28%" colspan="3" align="center" valign="middle"> <p>&nbsp;Please Enter Student's Admission Number</p> </td>
            </tr>
            <tr>
              <td align="center" valign="middle" colspan="3" ><table align="center" width="100%" cellpadding="5" cellspacing="5">
              <tr><td align="center"> <strong>ADMISSION NUMBER</strong></td></tr>
               <tr><td align="center"><form id="form1" name="form1" method="post" action="" onsubmit=" return check();">
                  <label>
                  <input type="text" name="accDet" id="accDet" value=""  />
                  </label> &nbsp; <input type="submit" name="accDetSubmit" id="accDetSubmit" value="Submit" />
                </form></td></tr>
               <tr>
                 <td align="center">&nbsp;</td>
               </tr>
              </table></td>
            </tr>
          </table>
        <div style="float: left;  margin: 14px 0 0;width: 600px;" >Note: Admission number issued at the time of enrolment. Save the file if required.</div>
        </div>
  
  <div class="cl"></div>
  <h1><span class="goudy" style="font-weight:bold; font-size:25px;">Result Details</span></h1>
  
<div id="Content2">
        <table width="100%" cellspacing="0" cellpadding="0" style="border:dashed #2A1F55 1px;" >
            <tr>
              
              <td width="28%" colspan="3" align="center" valign="middle"> <p>&nbsp;Please Enter Student's Admission Number</p> </td>
            </tr>
            <tr>
              <td align="center" valign="middle" colspan="3" ><table align="center" width="100%" cellpadding="5" cellspacing="5">
              <tr><td align="center"> <strong>ADMISSION NUMBER</strong></td></tr>
               <tr><td align="center"><form id="form2" name="form2" method="post" action="" >
                  <label>
                  <input type="text" name="result" id="result" value=""  />
                  </label> &nbsp; <input type="submit" name="result" id="result" value="Submit" onclick=" return check1();" />
                </form></td></tr>
               <tr>
                 <td align="center">&nbsp;</td>
               </tr>
              </table></td>
            </tr>
          </table>
        <div style="float: left;  margin: 14px 0 0;width: 600px;" >Note: Admission number issued at the time of enrolment. Save the file if required.</div>
        </div>
  <div class="cl"></div>
<br />
<br />
  </div>
<div class="midpage_right_panel pull-right span3 text-center">
<? @include('include/query_form.php');?>
</div>
</div>
     <div class="row-fluid"> 
<? @include('include/footer.php'); ?>

</div>
</div>
</body>
</html>
