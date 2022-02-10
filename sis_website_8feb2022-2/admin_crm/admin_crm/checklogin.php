<?php
session_start();
include_once("db.php");
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

 $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'"; 
$result=mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);

if($count==1 && $row['user_type']=='Admin')
{
	
$emp_id=$row['emp_id'];
$_SESSION['temp_type']=$row['temp_type'];
$_SESSION['emp_id']=$emp_id;
$user_type=$row['user_type'];
$_SESSION['user_type']=$user_type;
//session_register("myusername");
//session_register("mypassword"); 

$_SESSION['myusername']=$myusername;
$_SESSION['mypassword']=$mypassword;
$sql10="UPDATE $tbl_name SET online=1, last_active=now() WHERE emp_id='".$emp_id."'";
$result10=mysql_query($sql10);
//echo "<script>window.location='adminhome.php?empid=".$emp_id."'</script>";
echo "<script>window.location='dashboard.php?empid=".$emp_id."'</script>";
//header("location:tchome.php");
}
else if ($count==1 && $row['user_type']=='Project Manager')
{
header("location:index.php?msg=Invalid Login Please Try Again");
//header("location:tchome.php");
}
else if ($count==1 && $row['user_type']=='Tele Caller')
{
header("location:index.php?msg=Invalid Login Please Try Again");
}
else if ($count==1 && $row['user_type']=='School Login')
{
header("location:index.php?msg=Invalid Login Please Try Again");
//header("location:tchome.php");
}
else 
{
header("location:index.php?msg=Invalid Login Please Try Again");
}
?>