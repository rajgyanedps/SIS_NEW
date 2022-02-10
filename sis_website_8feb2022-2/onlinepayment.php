<?php
session_start();
include('include/db.php');
$Id = $_GET['app'];
//$price=$_GET['price'];
$price=9000;
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
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5N3WMT');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots"content="index,follow">
<meta name="googlebot"content="INDEX,FOLLOW"/>
<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
<meta name="msnbot" content="INDEX,FOLLOW"/>


<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>

<title>Online Payment - Selaqui International School</title>

<?php include('include/class.php'); ?>


<script language="JavaScript" type="text/javascript">
  function refreshCaptcha()
  {
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
  }
</script>

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
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
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
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  <? } ?> 

</head>

<body id="other_page">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5N3WMT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Payment process</h1>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-img">
                <img src="assets/images/trynity_drama.jpg" alt="Best Boarding Schools India" class="img-fluid">
              </div>
            </div>
            <div class="time-countdown justify-content-center wow fadeInLeft" data-wow-delay="0.3s">
              <p><strong class="text-green">Terms and Conditions</strong></p>
              <ol class="olGrid">
                <li> The online registration fee of <strong>Rs <?=$price?> /-</strong> is non-refundable. This is also applicable in cases where the student does not answer the online entrance test. </li>
                <li> The selection of the student will be based on his/her performance in the entrance test and is solely at the discretion of the Admission Team. </li>
                <li> After selection in the preliminary online entrance test the student will be called to the school campus for an entrance test and interview with the Headmaster. </li>
                <li> Admission being granted will be at the discretion of the Headmaster and Admission Team. </li>
              </ol>
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
               <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                <div class="form-wrapper">                
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>Payment Detail</h2>
                    </div>
                    <div class="col-lg-12 form-line">
                      <div class="form-group">
                        <!--<div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="paymode" id="offline" value="offline" onclick="show_tr('msgSmallBlue1'); return true" />Offline
                          </label>
                        </div>-->
                        <div class="form-check">
                          <label class="form-check-label">
                            <!--<input class="form-check-input" type="radio" name="paymode" id="online"  value="online" onclick="show_tr('msgSmallGreen'); return true"   />--><input class="form-check-input" type="radio" name="paymode" id="online"  value="online" checked  />Online
                          </label>
                        </div>
                        <!--<div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="paymode" id="otheracc" value="otheracc" onclick="show_tr('msgSmallRed'); return true"  />Deposit In Account
                          </label>
                        </div>-->
                      </div> 
                    </div>
                    <div class="col-lg-12" id="msgSmallBlue1" style="display:none;">
                      <p>
                        <a href="admission.pdf","mywindow","location=1,status=1,scrollbars=1,width=900,height=800"; target="_blank" style="color:#FF0000" data-toggle="tooltip" title="Click Here"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> print your application form.
                      </p>
                      <p>
                          Attach a demand draft of <strong>Rs. <?=$price?></strong> drawn in favour of SelaQui International School Payable at Dehradun and send us at following address:
                      </p>
                      <p>
                        <strong>SelaQui International School</strong>
                      </p>
                      <p>
                        <u>Head Office</u>
                      </p>
                      <p>
                        315/274,Westend Marg.
                      </p>
                      <p>
                        M.B. Road, Saidulajab
                      </p>
                      <p>
                        Near ITDC Delhi Haat
                      </p>
                      <p>
                        New Delhi India - 110030
                      </p>
                    </div>
                    <div class="col-lg-12" id="msgSmallGreen">
                      <p>
                          Click Pay Now button to pay registration fee of Rs. <?=$price?> through Credit Card/Net Banking/Debit Card.
                          <!--<button class="btn btn-common pull-right" onclick="submitform(this.form)">Pay Now</button>-->
						  <a href="https://smarthubeducation.hdfcbank.com/SmartFees/Landing.action?instId=4980" target="_blank" class="btn btn-common pull-right">Pay Now</a>
                      </p>
                    </div>
                    <div class="col-lg-12" id="msgSmallRed" style="display:none;">
                      <p>
                        <a href="admission.pdf","mywindow","location=1,status=1,scrollbars=1,width=900,height=800"; target="_blank" style="color:#FF0000" data-toggle="tooltip" title="Click Here"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> print your application form.
                      </p>
                      <p>
                          Deposit a sum of <strong>Rs. <?=$price?></strong> in the Axis Bank account, mention the deposit details in the form and send us to the following address:
                      </p>
                      <p>
                        <strong>SelaQui International School</strong>
                      </p>
                      <p>
                        <u>Head Office</u>
                      </p>
                      <p>
                        315/274,Westend Marg.
                      </p>
                      <p>
                        M.B. Road, Saidulajab
                      </p>
                      <p>
                        Near ITDC Delhi Haat
                      </p>
                      <p>
                        New Delhi India - 110030
                      </p>
                      <table class="table table-bordered striped">
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
          </form>
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