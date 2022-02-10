<? 
ob_start();
session_start();
include_once("db.php");
$sql="UPDATE members SET online=0 WHERE emp_id='".$_SESSION['emp_id']."'";
$result=mysql_query($sql) or die(mysql_error());
session_destroy();
header("location:index.php?msg=You%20are%20now%20logged%20out.");
?>