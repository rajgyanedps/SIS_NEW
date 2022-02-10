<? session_start();
ob_start();
//include('connection.php');
//include('webadmin/include/db.php');
include('include/db.php');

echo  $_SESSION['sch_class'];



//$sql_stud = "SELECT date, heading, LEFT(detail,40) as detail from sela_tblnews order by date desc";
$sql_stud = "SELECT * from sela_tblnews order by date desc";
$result_stud = mysql_query($sql_stud) or die(mysql_error());
$num_rows=mysql_num_rows($result_stud);	
$fname=$_POST['fname'];

if(isset($_POST['name']))
{	
if (!empty($_POST['validator']) && strtoupper($_POST['validator']) == strtoupper($_SESSION['rand_code'])) {
  if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
         { 
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
         } 
       elseif(!empty($_SERVER['REMOTE_ADDR'])) 
         { 
         $ip = $_SERVER['REMOTE_ADDR']; 
         } 
       else 
        { 
        $ip="Not Set"; 
        }
		if(isset($_SESSION['v_type']))
		$visitor=$_SESSION['v_type'];
		else
		$visitor="";
$interested=$_POST['desg'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$state=$_POST['state'];
$sch_class=$_POST['sch_class'];

$sel_user = "SELECT * FROM student WHERE email='$email' and phone_no='$mobile'";
$res_user = mysql_query($sel_user) or die(mysql_error());
$num_res=mysql_fetch_array($res_user);
$num_row = mysql_num_rows($res_user);
$sid=$num_res['stud_id'];
$project_id=0;
	 if($num_row == 0)
	 {
	
	$pos = strpos($sch_class,'Arjuna');
	if($pos === false)
	{
		if(($sch_class=='XI Science / Medical') or ($sch_class=='XI Science / Non-Medical'))
		{
		 $empid='400100'; // This Id For send XII Science lead to gurukul 
		}
		else
		{
			 $t=time();
			 $empid='100100';
	 /* remove leads from counsellor 2 in database as requested by bewlenne from SIS.
	 if($t%2==1)
	 $empid='100100';
	 else
	 $empid='200100'; // you can change this to second counsellors id in future
	 */
		}
		$project_id=0;
	}
	else
	{
	$project_id=5;
	 $empid='100';
	}

	
	 if($_POST['leadtype']=="IB") $strL="Lead-IB"; else $strL="Lead";

	 $user_qry = "INSERT INTO users(username,password,usertype,enabled,last_active)VALUES('','','student','1',NOW())";
	 $user_res = mysql_query($user_qry) or die(mysql_error());
	 $id = mysql_insert_id();
	 
	 $user_sql="insert into student(project_id,stream,stud_name,email,phone_no,city,state,course,information_source,emp_id,joined,count_visit,user_id,ip_address,v_type) values('$project_id','$interested','$name','$email','$mobile','$city','$state','$sch_class','$strL','$empid',now(),1,'$id','$ip','$visitor')";
	 mysql_query($user_sql) or die(mysql_error());
	 }
	 else
	 {
	 $user_sql="update student set count_visit=count_visit+1,phone_no='$mobile',remarkdate=NOW(),ip_address='$ip' WHERE  stud_id='$sid'";
     mysql_query($user_sql) or die(mysql_error());
	 }
	   $subject = 'Thank you for contacting SelaQui International School.';
       $txt = '
       <p>Dear '.$name.',</p>
	   <br>
       <p>Your request for information has been recieved. <br><br>A SelaQui Counsellor will get in touch with you soon.<br><br>
	   If you wish you can browse the website for more details by clicking here <a href="http://selaqui.org">http://selaqui.org</a>
	   <br><br><br><br>
	   With Best Regards<br><strong>Team SelaQui.</strong></p>';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: noreply@selaqui.org". "\r\n";
		$headers .= "Return-Path: <noreply@selaqui.org>". "";

        mail($email,$subject,$txt,$headers);
		
	    $_SESSION['formfill']=true;
?>  
<script language="javascript">
alert("Information submitted successfully.We will get back to you shortly");
</script>

<script language="javascript">
window.location="index.php?msg=sc";
</script>

<?php
unset($_SESSION['rand_code']);
}else { ?>
<script type="text/javascript">
alert("Please Enter a valid Code");
</script>
<?php
}
}
?>
<?php  print_r($_POST['rb']);?>

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="6vEfBA-DNY6kLFsgXJ-nIdcBZX2y8JCUidsQE6Q1c4Q" />
<meta name="google-site-verification" content="GB4JyzbNhyerhAT1nzVc02XGFCjswHKL1Sp0kPoBj2E" />
<META name="y_key" content="a11b0e777489b865">
<meta name="alexaVerifyID" content="6ptx4tCpirXBdVcfCpQMRhKj2AM" />
<meta name="msvalidate.01" content="B05CD9B2C07E113CC3F50EB76039E57A" />
<META name="y_key" content="e771acf95ca1d3af">
<META name=\"y_key\" content=\"e771acf95ca1d3af\" >
<meta name="robots"content="index,follow">
<meta name="googlebot"content="INDEX,FOLLOW"/>
<meta name="YahooSeeker"content="INDEX,FOLLOW"/>
<meta name="msnbot" content="INDEX,FOLLOW"/>
<link rel="shortcut icon" href="favicon.ico" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript">

ddsmoothmenu.init({
mainmenuid: "smoothmenu1", //menu DIV id
orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
classname: 'ddsmoothmenu', //class added to menu's outer DIV
//customtheme: ["#1c5a80", "#18374a"],
contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
mainmenuid: "smoothmenu2", //Menu DIV id
orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
//customtheme: ["#804000", "#482400"],
contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<script type="text/javascript" src="Scripts/jquery-1.2.6.min.js"></script>
<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

 
<style type="text/css">
/*** set the width and height to match your images **/

#slideshow {
	position:relative;
	height:360px;
	margin:0;
	padding:0;
}
#slideshow IMG {
	position:absolute;
	top:0;
	left:0;
	z-index:8;
	opacity:0.0;
	width:992px;
}
#slideshow IMG.active {
	z-index:10;
	opacity:1.0;
}
#slideshow IMG.last-active {
	z-index:9;
}
.musings { margin:15px 0px 0px 0px; padding:20px 0 0 0px; width:257px; height:100px; background:url(images/musings2.jpg) left top no-repeat; }
.musings h1 { color:#ff0000; }
ul#ticker_02 { height: 50px; overflow: hidden; margin:30px 8PX 8PX 8PX; padding:0 0px; font-size:11px text-align:left !important;  }
ul#ticker_02 ul { list-style-type:none; margin:0; padding:0; }
ul#ticker_02 li { height:105px; overflow:hidden;list-style:none; padding:5px 0px 10px 5px; color:black;  font-weight:normal; color:#666666; line-height:18px; /*background:url(../../../theme/images/newspaper.png) no-repeat; height:16px; width:16px;*/ }
ul#ticker_02 li a { color: #333333; font-weight:bold; text-decoration:none; }
ul#ticker_02 li span { display: block; color:#666; font-size:11px; padding-right:15px; }
.hd1 { background:#fff; padding:5px; border-radius:10px; }
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="javascript">
function validate_udetail()
{
		
	if(document.userdetails.name.value=="")
	{
		alert("Enter name");
		document.userdetails.name.focus();
		return false;
	}
	
	var emailID=document.userdetails.email
	
	if (document.userdetails.email.value=="")
	{
		alert("The e-mail ld is blank or \n an invalid value has been entered.");
        document.userdetails.email.focus();		
        return false;
    }
	if (echeck(emailID.value)==false)
	{
		emailID.value=""
		emailID.focus()
		return false
	}
	
	
	if(document.userdetails.mobile.value=="")
	{
		alert("Enter Mobile No");
		document.userdetails.mobile.focus();
		return false;
	}
	
	if(document.userdetails.mobile.value!="")
		{
			var stripped1 = document.userdetails.mobile.value.replace(/[\(\)\.\-\ ]/g, '');
			if(isNaN(parseInt(stripped1)))
			{
				alert("The mobile number contains illegal characters");
				document.userdetails.mobile.focus();
				return false;			
			}
			else if ((stripped1.length < 10) || (stripped1.length > 12))
			{
        	
				alert("The mobile number is the wrong length.");
				document.userdetails.mobile.focus();
				return false;
			
    		} 
		
	} 

	
	if(document.userdetails.city.value=="")
	{
		alert("Enter City");
		document.userdetails.city.focus();
		return false;
	}

if(document.userdetails.state.value=="")
	{
		alert("Enter State");
		document.userdetails.state.focus();
		return false;
	} 
	
	if(document.userdetails.sch_class.value=="")
	{
		alert("Select Class");
		document.userdetails.sch_class.focus();
		return false;
	}
	
		if(document.userdetails.validator.value=="")
	{
		alert("Enter Verification Code");
		document.userdetails.validator.focus();
		return false;
	}


	
	return true;
}


function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}


</script>
<link rel="stylesheet" type="text/css" href="jquery.fancybox/jquery.fancybox.css" media="screen" />
	<!--<script type="text/javascript" src="jquery.fancybox/jquery-1.3.2.min.js"></script>-->
	<script type="text/javascript" src="jquery.fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="jquery.fancybox/jquery.fancybox-1.2.1.pack.js"></script>
    
<script type="text/javascript">
$(document).ready(function () {

 $("a#adds").fancybox({ 'hideOnContentClick': false ,
					  'overlayShow':true  ,
					  'frameWidth':265 ,
					  'frameHeight':335,
					  'overlayOpacity':0.7}); 
					  $('#adds').trigger('click');
});
</script>

<script>

$('#save').submit(function(event) {
    var form = this,
        serializedData = $(form).serialize();

    $.post(form.action, serializedData)
    .done(function (response, textStatus, jqXHR) {
        $.facebox(response);
    });

    event.preventDefault();
    });

</script>
<script>

	function tick(){
		$('#ticker_01 li:first').slideUp( function () { $(this).appendTo($('#ticker_01')).slideDown(); });
	}
	setInterval(function(){ tick () }, 5000);


	function tick2(){
		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
	}
	setInterval(function(){ tick2 () }, 3000);


	function tick3(){
		$('#ticker_03 li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker_03')).css('opacity', 1); });
	}
	setInterval(function(){ tick3 () }, 4000);	

	function tick4(){
		$('#ticker_04 li:first').slideUp( function () { $(this).appendTo($('#ticker_04')).slideDown(); });
	}


	/**
	 * USE TWITTER DATA
	 */

	 $.ajax ({
		 url: 'http://search.twitter.com/search.json',
		 data: 'q=%23javascript',
		 dataType: 'jsonp',
		 timeout: 10000,
		 success: function(data){
		 	if (!data.results){
		 		return false;
		 	}

		 	for( var i in data.results){
		 		var result = data.results[i];
		 		var $res = $("<li />");
		 		$res.append('<img src="' + result.profile_image_url + '" />');
		 		$res.append(result.text);

		 		console.log(data.results[i]);
		 		$res.appendTo($('#ticker_04'));
		 	}
			setInterval(function(){ tick4 () }, 4000);	

			$('#example_4').show();

		 }
	});
</script>

<? include('analytics.php'); ?>
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


<div><a href="filter.php" id="adds" class="iframe" ></a></div>
<div id="incHeader">
<?php include("header.php"); ?>
</div>
<div id="container">
  
  <div id="middlePart">
    <div id="middleTabContainer">
      <?php include("middleMenu.php"); ?>
    </div>
    <div id="contentContainer">
      <div id="aboutContent">
        <h1><a href="index.php">Home</a> &gt;</h1> <h2>Resources</h2>
        <br />
        <br />
        <script type="text/javascript">
		var rb=document.getElementById['form1']['rb'];
  document.getElementById('form1').submit();
  alert(rb);
</script>
<script type="text/javascript">
function show_content()
		 {
		 alert("hii");
 $("#search").submit(function(e){

			var class1 = $('#class').val();
			var sub1 = $("#sub").val();
			var topic = $("#topic").val();
			
		
			$.ajax({
			  type: "POST",
			 
			  
			  url: "ajaxpage.php",
			  data: { class1: class1,
			        sub1: sub1,
					name: name,
					topic: topic,
					},
			  success: function(data){
				  testSecondResults(data);
			  }
			});
		});
      });
		 } 

</script>
<form name="form1" method="post" enctype="multipart/form-data" action="" >

        <div class="filter_cont">
        <div class="filter">
          <img src="images/class_head.jpg" width="196" height="47" />
          <div class="space cl"></div>
           <?php $cls_query = mysql_query("select * from class where id in ('1','2','3','4','5')");
					   while($cls_result = mysql_fetch_array($cls_query)){?><div class="filter_box2">
            <input name="class[]" id="class[]" type="radio" value="<?php echo $cls_result['id'];?>" <?php if($cls_result['id']==$_SESSION['class1']) 
			{ ?> checked="checked"<?php }?> class="check" /><?php echo $cls_result['class_name'];?>
            </div>
           <?PHP }?>
          <div class="space cl"></div>
          <img src="images/subject_head.png" width="196" height="47" />
          <div class="space cl"></div>
           <?php 
			  $sql_sub = mysql_query("SELECT * FROM `subject` ");
while($sub_res=mysql_fetch_array($sql_sub))
{
$subject[$sub_res['subject_id']] =  $sub_res['subject_name'];
			  }
			  foreach($subject as $skey=>$sval){
			  ?>
          
          <div class="filter_box">
            <input name="sub[]" type="checkbox" value="<?php echo $skey;?>" <?PHP if($skey==$_SESSION['sch_class'])
			{?>checked="checked"<?php }?> class="check" />
            <?php echo $sval;?></div> <?php }?>
          
          <div class="space cl"></div>
          <img src="images/topic.png" width="196" height="47" />
          <div class="space cl"></div>
          <?php    $res = mysql_query("SELECT * FROM `study_material` ");
while($re=mysql_fetch_array($res))
{?>
          <div class="filter_box">
            <input name="topic[]" type="checkbox" value="<?php echo $re['study_material_topic'];?>" <?php if($re['study_material_topic']==$_SESSION['topic']){?>checked="checked"<?php }?> class="check" />
            <?php echo $re['study_material_topic'];?></div>
          <?php }?>
          <div class="space cl"></div><img src="images/subtopic.png" width="196" height="47" />
          <div class="space cl"></div>
          <div class="filter_box">
            <input name="" type="checkbox" value="" class="check" />
            Lorem Ipsum</div>
          <div class="filter_box">
            <input name="" type="checkbox" value="" class="check" />
            Lorem Ipsum</div>
          <div class="filter_box">
            <input name="" type="checkbox" value="" class="check" />
            Lorem Ipsum</div>
          <div class="filter_box">
            <input name="" type="checkbox" value="" class="check" />
            Lorem Ipsum</div>
          <div class="filter_box">
            <input name="" type="checkbox" value="" class="check" />
            Lorem Ipsum</div>
          <div class="space cl"></div>
          <div class="submit_filter"><input type="button" name="search" id="search" value="SEARCH"  onclick="show_content();"/></div>
        </div>
        <?php $qry = "select * from study_material where  class='".$_SESSION['class1']."' and study_material_subject='".$_SESSION['sch_class']."' and study_material_topic='".$_SESSION['topic']."' and user_type='admin'  Order by study_material_id  DESC";
$anc=mysql_query($qry);
$num=mysql_num_rows($anc);
if($num>0)
{
?>
        <div class="filtered_videos">
          <div class="filter_heading"><span><?php echo $num?> Videos</span> Found in your interest area</div>
          <div class="video_box_big">
            <div align="center">
              <iframe width="637" height="359" src="//www.youtube.com/embed/y3SBSbsdiYg" frameborder="0" allowfullscreen></iframe>
              <?php echo $msg;?>
            </div>
            <div class="video_head">Course</div>
            <div class="video_semi">:</div>
            <div class="video_txt">Science</div>
            <div class="video_head">Subject</div>
            <div class="video_semi">:</div>
            <div class="video_txt">Physics</div>
            <div class="video_head">Class</div>
            <div class="video_semi">:</div>
            <div class="video_txt">Xth</div>
          </div>
          <?PHP 
		 
		 
 
		  
		  while($research=mysql_fetch_array($anc))
		  {?>
          <div class="video_box">
            <div align="center">
              <iframe width="278" src="//www.youtube.com/embed/y3SBSbsdiYg" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video_head">Topic</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php echo $research['study_material_topic'];?></div>
            <div class="video_head">Subject</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php echo $research['study_material_subject'];?></div>
            <div class="video_head">Class</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php echo $research['class'];?></div>
          </div>
          <?php }} else { $msg= "No Record Found";}?>
          
        </div>
        <div class="cl"></div>
      </div>
      </form>
      </div>
     
    </div>
  </div>
  <div id="footerContianer">
    <?php include("footer.php"); ?>
  </div>
</div>
</body>
</html>
