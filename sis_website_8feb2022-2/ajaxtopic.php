<?php
session_start();
error_reporting(0);
include("include/db.php");
include("function.php");
/*function __autoload($class_name) {
    include "class/".$class_name . '.php';
}  */
include 'class/kzone.php';
include 'class/Expert.php';
   $obj_k  = new kzone();
///for filter page display subject with class


//print_r($_REQUEST);
if($_REQUEST['tasktype2']=='subject2')
{
$c=$_REQUEST['c1'];
 $subject = $_REQUEST['subject'] ;//"'".implode("','",$_REQUEST['class1'])."'";
$str1
="";
	 

	//print_r($subject);
	
$count=count($subject);
if($count)
{

	foreach($subject as $v){
//echo "select * from study_material where  user_type='admin' and fileext='video' and FIND_IN_SET('".$v."', study_material_subject) and class='".$c."' order by study_material_topic ASC";
		 $sub_qry = mysql_query("select * from study_material where  user_type='admin' and fileext='video' and FIND_IN_SET('".$v."', study_material_subject) and class='".$c."' order by study_material_topic ASC");
		while($sub_result = mysql_fetch_array($sub_qry)){
		
			$subject_name[$sub_result['study_material_topic']]=$sub_result['study_material_topic'];
		}
		}
		} else { ?>
	 
	
	
<div style="color:#ff0000; margin:10px 0; font-weight:bold; text-align:center;">Please Select Atleast One Subject </div><?php }
	
	
	
	//echo count($subject_name);
	if(count($subject_name)>0)
	{
		$final_arr_sub = array_unique($subject_name); 
	//	print_r($final_arr_sub );	
	$str1.='<img src="images/topic.png" width="196" height="47" />';
	 $str1 .= ' <div class="space cl"></div>
          
	 <div style="overflow:auto; height:185px;">';
		foreach($final_arr_sub as $val){
		
		  $str1 .= '<div class="filter_box3"><div class="check"><input name="topic[]" type="checkbox" id="topic[]" value="'.$val.'"  onClick="show_content();"/></div>
            <div class="check_txt2">'.$val.'</div>
            <div class="clearBoth"></div>
            </div>';
		
		}
		 $str1 .='</div>';
	} else {?>
	 
	
	<img src="images/topic.png" width="196" height="47" />	
    
<div style="color:#ff0000; margin:10px 0; font-weight:bold; text-align:center;">No Record Found</div>
    <?php }
	echo $str1; 
	
}



?>