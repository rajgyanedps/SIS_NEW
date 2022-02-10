<?php
//include("db.php"); 
include('include/db.php');
$prog_id=$_GET['program1'];

$text='<select class="form-control" id="discipline3" name="discipline3" onchange="other_stream3()" required>';
$text.='<option value="">Select</option>';
$stream_query=mysql_query("SELECT * FROM streams WHERE prog_id='".$prog_id."' ORDER BY stream_id") or die(mysql_error());
while($stream_row=mysql_fetch_array($stream_query))
{
$text.='<option value='.$stream_row['stream_id'].'>'.$stream_row['stream'].'</option>';
}
$text.='<option value="Other">Other</option>';
$text.='</select>';
echo $text;

?>




