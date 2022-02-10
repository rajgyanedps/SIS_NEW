<?php
session_start();
include("include/db.php");
include("function.php");
error_reporting(0);
/*function __autoload($class_name) {
    include "class/".$class_name . '.php';
}  */
include 'class/kzone.php';
include 'class/Expert.php';
   $obj_k  = new kzone();
///for filter page display subject with class


//print_r($_REQUEST);
if($_REQUEST['tasktype1']=='subject1')
{

 $classid = $_REQUEST['class1'] ;//"'".implode("','",$_REQUEST['class1'])."'";
$str="";
	 $qry = "select * from class_subject where class_id in($classid)";
	$res = mysql_query($qry);
	$numrow = mysql_num_rows($res);
		$str = '';
	if($numrow > 0){
	
	while($result = mysql_fetch_array($res)){
	$subject_id = explode(",",$result['subject_id']);
	foreach($subject_id as $v){
//echo"select * from subject where subject_id='".$v."'";
		 $sub_qry = mysql_query("select * from subject where subject_id='".$v."' order by subject_name ASC");
		while($sub_result = mysql_fetch_array($sub_qry)){
		
			$subject_name[$sub_result['subject_id']]=$sub_result['subject_name'];
		}
		}
	}
	
	}
	
	//echo count($subject_name);
	if(count($subject_name)>0)
	{
	    asort($subject_name);
		$final_arr_sub = array_unique($subject_name); 
		
	
	$str2.='Subject:&nbsp;<select name="sch_class" class="textFFF" id="sch_class">
	 <option value="0">
           Select Subject </option>';
	
	
	
		foreach($final_arr_sub as $key =>$val){
		
		//  $str1 .= ' <li><label><input type="checkbox" name="subject[]" value="'.$key.'"  />'.$val.'</label> </li>';
		 $str2 .= ' 
            <option value="'.$key.'">
           '.$val.' </option>';
		}
		$str2.='</select>';
	}else{ 
	
	$str2.='Subject:&nbsp;<select name="sch_class" class="textFFF" id="sch_class">';
	
		
		
		//  $str1 .= ' <li><label><input type="checkbox" name="subject[]" value="'.$key.'"  />'.$val.'</label> </li>';
		 $str2 .= ' 
            <option value="0">Select Subject </option>';
		
		$str2.='</select>';}
	
	//echo "no record found.";}
	echo $str2;
	
}



?>