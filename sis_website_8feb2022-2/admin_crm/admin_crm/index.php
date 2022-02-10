<?
error_reporting(0);

ob_start(); session_start(); 
include_once("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SelaQui School Admin Area</title>
            <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>        

<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>

<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){ 
  $("#userlogin").validationEngine();
}); 

</script>
<style>
    .msg {
font-family: Arial, Helvetica, sans-serif;
font-size: 13px;
color: #FF0000;
padding: 4px;
font-weight: bold;
}
</style>
<link href="css/msg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if(isset($_GET['msg1']))
{?>
<div class="black_overlay" id="fade" onclick="document.getElementById('forgot').style.display='none';document.getElementById('fade').style.display='none'"></div>
<? }
else
{?>
<div class="black_overlay" style="display:none;" id="fade" onclick="document.getElementById('forgot').style.display='none';document.getElementById('fade').style.display='none'"></div>

<?php
}
include("homeheader.php");
?>

<br />
<br /><br />
<div align="center" class="msg">
<?=$_GET['msg']; ?>
</div>
<br />

<table width="320" border="0" align="center" bgcolor="#f3f7fd" cellpadding="0" cellspacing="0" style="border:solid 1px #88c9fd;">
<tr><td height="46" colspan="2"><div style="height:33px; background:url(images/login.jpg) top left repeat-x; margin-top:0px; padding-left:45px; padding-top:13px; font-size:18px; color:#FFFFFF"><b>Member's Login</b></div></td>
</tr>
<tr><td>
<form name="form1" method="post" action="checklogin.php" >   
<table width="99%" border="0" align="center" cellpadding="3" cellspacing="0">
<tr><td><img src="images/spacer.gif" height="10px;" /></td></tr>
<tr>   
<td height="24" valign="bottom" bgcolor="#e6effc" style="font-size:13px; padding-left:30px; border-top:#d0e1fa 1px solid;"><b>Your Username</b></td>
</tr>
<tr><td bgcolor="#e6effc"><img src="image/spacer.gif" height="2px;" /></td>
</tr>
<tr>
<td height="35" valign="top" bgcolor="#e6effc" style="padding-left:30px; border-bottom:#d0e1fa 1px solid;"><input class="text" name="myusername" id="q" size="35" type="text" value="Enter Your user name" onfocus="this.value=(this.value=='Enter Your user name') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Enter Your user name' : this.value;" style="height:20px; line-height:20px;border:solid 1px #61b5f8;font-size:14px;color:#0a5095;background-color:#ffffff"/></td>
</tr>
<tr>
  <td><img src="images/spacer.gif" height="10px;" /></td>
</tr>
<tr>
<td height="24" valign="bottom" bgcolor="#e6effc" style="font-size:13px; padding-left:30px; border-top:#d0e1fa 1px solid;"><b>Your Password</b></td>
</tr>
<tr><td bgcolor="#e6effc"><img src="image/spacer.gif" height="2px;" /></td>
</tr>
<tr>
<td height="35" valign="top" bgcolor="#e6effc" style="padding-left:30px; border-bottom:#d0e1fa 1px solid;"><input class="text" name="mypassword" id="q" size="35" type="password" value="Enter Password" onfocus="this.value=(this.value=='Enter Password') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Enter Password' : this.value;" style="height:20px; line-height:20px;border:solid 1px #61b5f8;font-size:14px;color:#0a5095;background-color:#ffffff"/></td>
</tr>
<tr><td><img src="images/spacer.gif" height="5px;" /></td></tr>
<tr>
<td align="center"><input type="image" src="images/login-btn.jpg" name="Submit" ></td>
</tr>
<tr><td><img src="image/spacer.gif" height="1px;" /></td></tr>
<tr>
<td align="left" bgcolor="#e6effc" style="font-size:13px; padding-left:30px; border-bottom:#d0e1fa 1px solid;  border-top:#d0e1fa 1px solid;">
<a href="#" onclick="document.getElementById('forgot').style.display='block';document.getElementById('fade').style.display='block'" title="Forgot Password" class="registore">Lost Your Password?</a></td>
</tr>
<tr><td><img src="image/spacer.gif" height="3px;" /></td>
</tr>
</table>
</form>
</td></tr></table>
<?php
if(isset($_GET['msg1']))
{
?>
<div id="forgot" style="z-index:1002;position:absolute;top:30%;left:35%">
<? }
else
{
?>
<div id="forgot" style="z-index:1002;position:absolute; top:35%; left:35%;display:none">
<? }?>
<form name="forgot" method="post" action="forgotwork.php" onSubmit="return CheckValid()">
  <table width="400" height="200" border="0" align="center" style="font-size:13px" bgcolor="#ECECFF">
  <tr><td>
  <table align="center" width="275" height="70">
  
  <tr height="15px"><td align="center" bgcolor="#FFFFE6">
<font color="#000000" size="2px">Please enter your e-mail address.<br /> You will receive a password via e-mail.</font>
</td></tr></table>
  <tr><td><div align="center" class="msg">

<?=$_GET['msg1']; ?>
</div></td></tr>
    <tr>
      <td height="29" style="padding-left:78px"><b>Email Address :</b></td>
    </tr>
    <tr>
      <td height="43" align="center"><font color="#FF0000" size="4px">*</font>&nbsp;
        <input name="email" type="text" size="35" /></td>
    </tr>
    <tr>
      <td height="42" align="center"><input type="submit" name="submit" value="Send Password" />
      </td>
    </tr>
    <tr><td align="right">
    <a href="#">
    <img src="images/close.gif" border="0" onclick="document.getElementById('forgot').style.display='none';document.getElementById('fade').style.display='none'" /></a></td></tr>
</td></tr>
  </table>
  </form>
</div>
    
</body>
</html>
