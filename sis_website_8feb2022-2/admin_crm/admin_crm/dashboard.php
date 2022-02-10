<?php
ob_start();
session_start();
extract($_GET);
if($_SESSION['user_type']!='Admin')
{
 header("Location: index.php");
}

?>

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
<br />





<table width="70%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#E5E5E5">
    <tr><td colspan="3" bgcolor="#FFFFFF" class="dashboard_title">Dashboard <span style="float:right;"><a href="logout.php" style="color:#fff; font-weight:bold; padding:8px 10px; background:#F60; border-radius:5px;">Logout</a></span></td></tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr><td bgcolor="#FFFFFF"> <div class="dashboard_selaquicrm"><a href="../CRM/adminhome.php">
     SelaQui CRM</a></div></td>
        <td bgcolor="#FFFFFF"> <div class="dashboard_iitcrm"><a href="../iitjeecrm/adminhome.php">IIT-JEE CRM</a></div></td>
        <td bgcolor="#FFFFFF"> <div class="dashboard_neetcrm"><a href="../neet/neetcrm/adminhome.php">NEET CRM</a></div></td>
    </tr>
</table>
</div>
    
</body>
</html>
