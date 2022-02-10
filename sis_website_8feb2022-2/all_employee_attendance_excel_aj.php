<?
session_start();

include('mainclass.php');
$obj = new Mainclass();
include('email_function.php');
$obj_email=new Email();
include('db.php');
if ($_SESSION["emp_id"]) {
 $emp_id = $_SESSION["emp_id"];
}

ini_set('max_execution_time', 0);

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=Attendance.xls "); 
header("Content-Transfer-Encoding: binary ");

//print_r($_REQUEST);

function getWeeks($date,$get_org)
    { 
		if($_SESSION['org']=='DPSGS' && $date=='2016-10-08')
		{
			$weeks='00';
		}
		else {
		$date1 = date('d',strtotime($date));
		
		if($date1>='01' && $date1<='07')
		{
			$weeks='00';
		}
		if($date1>='08' && $date1<='14')
		{
			if($get_org=='SIS'){
				$weeks='00';}else{
			$weeks='02';
			}
		}
		if($date1>='15' && $date1<='21')
		{
			$weeks='00';
		}
		if($date1>='22' && $date1<='28')
		{
			$month = date('m');
			
			$arr_organisation = array("0"=>"DPSGM", "1"=>"DPSGI", "2"=>"DPSGV", "3"=>"DPSG-PV-I", "4"=>"DPSG-PV-F", "5"=>"DPSG-STARZ-PV", "6"=>"DPSG-STARZ-DLF", "7"=>"DPSG-STARZ-10A", "8"=>"DPSG-SL");
			
			if( in_array($get_org,$arr_organisation) && ($month=='11' || $month=='12' || $month=='01' || $month=='02' || $month=='03') )
			{
			$weeks='00';
			}elseif($get_org=='SIS'){
			$weeks='00';	
			}
			else
			{ $weeks='04'; }
		}
		if($date1>='29' && $date1<='31')
		{
			$weeks='00';
		}
	}
        return $weeks;
    }

	function get_employe_name($id){
$qry = mysql_query("select concat(first_name,' ',last_name) as name from  personal_detail where emp_id='".$id."'");
$res= mysql_fetch_array($qry);
return $res['name'];
	}
	function previous_days($date,$arr_meargeleave){
	if(in_array($date,$arr_meargeleave)){
	$prvwokingday = date('Y-m-d', strtotime('-1 day', strtotime($date)));
	if(in_array($prvwokingday,$arr_meargeleave)){		
	return previous_days($prvwokingday,$arr_meargeleave);	
	}else{
		return $prvwokingday;
	}
	}
}
function next_days($date,$arr_meargeleave){
	if(in_array($date,$arr_meargeleave)){
	$nextwokingday = date('Y-m-d', strtotime('+1 day', strtotime($date)));
	if(in_array($nextwokingday,$arr_meargeleave)){		
	return next_days($nextwokingday,$arr_meargeleave);	
	}else{
		return $nextwokingday;
	}
	}
}
function sandwich($date,$emp_id,$arr_weekend,$org){
	//print_r($arr_weekend);
	//$qry= mysql_query("SELECT * FROM `leave_apply` where date('".$date."') between from_date and to_date and emp_id='".$emp_id."' and status='Approved'");
	/*$day1=date('D', strtotime($date));
	$weekth2 =   getWeeks($date,$org);
	if(in_array($date,$arr_weekend) && $day1=='Sat' && ($weekth2=='02'|| $weekth2=='04') ){
		$prvwokingday = date('Y-m-d', strtotime('-1 day', strtotime($date)));
		$nextworkingday=date('Y-m-d', strtotime('+2 day', strtotime($date)));
	}elseif(in_array($date,$arr_weekend) && $day1=='Sun' && ($weekth2=='02'|| $weekth2=='04') ){
		$prvwokingday = date('Y-m-d', strtotime('-2 day', strtotime($date)));
		$nextworkingday=date('Y-m-d', strtotime('+1 day', strtotime($date)));
	}elseif(in_array($date,$arr_weekend) && $day1=='Sun' && ($weekth2!='02'|| $weekth2!='04') ){
		$prvwokingday = date('Y-m-d', strtotime('-1 day', strtotime($date)));
		$nextworkingday=date('Y-m-d', strtotime('+1 day', strtotime($date)));
	}else{
		$prvwokingday = date('Y-m-d', strtotime('-1 day', strtotime($date)));
		$nextworkingday=date('Y-m-d', strtotime('+1 day', strtotime($date)));
	}
	 */
	 
	$qry= mysql_query("SELECT * FROM `leave_apply` where date('".$prvwokingday."') between from_date and to_date and emp_id='".$emp_id."' and status='Approved' and leave_type!='LWP'");
	$qry1= mysql_query("SELECT * FROM `leave_apply` where date('".$nextworkingday."') between from_date and to_date and emp_id='".$emp_id."' and status='Approved' and leave_type!='LWP'");
	$abstqry= mysql_query("SELECT * FROM `attendance_login` where date(	punch_in)='".$prvwokingday."' and emp_id='".$emp_id."'");
	$anstqry1= mysql_query("SELECT * FROM `attendance_login` where date(	punch_in)='".$nextworkingday."' and emp_id='".$emp_id."'");
	$macqry= mysql_query("SELECT * FROM `absent_loged` where date(absent_date)='".$prvwokingday."' and emp_id='".$emp_id."' and status='Approved' ");
	$macqry1= mysql_query("SELECT * FROM `absent_loged` where date(absent_date)='".$nextworkingday."' and emp_id='".$emp_id."' and status='Approved'");
	if(mysql_num_rows($qry) < 1 && mysql_num_rows($qry1) < 1 && mysql_num_rows($abstqry) < 1 && mysql_num_rows($anstqry1) < 1 && mysql_num_rows($macqry) < 1 && mysql_num_rows($macqry1) < 1  ){
	$str = "A"; 	
	}else{
	$str = "";	
	}
	return $str;
}
?>
<style>

.chosen-container { width:250px !important;}
.search-field  {width:250px !important;}
.default  {width:250px !important;}
</style>
<div class="cl"></div>
<div class="formbox-in">  
<table class="mytable" style="border:none;" height="150px;" width="100%" border="1" cellspacing="0" cellpadding="0" id="testTable2">

<?php
if($_REQUEST['fromdt12']!="" && $_REQUEST['todt12']!=""){

if(isset($_REQUEST['search_emp'])){

if(count($_REQUEST['search_emp']) >0){
$emp_str = implode("','",$_REQUEST['search_emp']);
$searchemptxt = " and  emp_id in ('".$emp_str ."') ";
}else{
$searchemptxt = "";
}
}else{
$searchemptxt = "";
}

if($_REQUEST['search_org']!=""){
//$searchorgtxt = " and org= '".$_REQUEST['search_org']."' ";
$searchorg_personal = " and organisation='".$_REQUEST['search_org']."'";
}else{
$searchorgtxt ="";
}

if($_REQUEST['status']!=""){
$emp_status = "and status='".$_REQUEST['status']."'";
}else{
$statusss ="Active"; 
$emp_status = "and status='".$statusss."'";
}



if($_REQUEST['fromdt12']!="" && $_REQUEST['todt12']!=""){
$fromdt12= $_REQUEST['fromdt12'];
$todt12 = $_REQUEST['todt12'];
$frmdate12 = " and date(punch_in)>='".$_REQUEST['fromdt12']."' AND date(punch_in) <= '".$_REQUEST['todt12']."'";
}else{
$fromdt12= date('Y-m-d',strtotime('-1 day'));
$todt12 = date('Y-m-d');
$frmdate12 = " and date(punch_in)>='".$_REQUEST['fromdt12']."' AND date(punch_in) <= '".$_REQUEST['todt12']."'";
$limit1 = "";
}
$date_count_arr12 = $obj->getDatesFromRange($fromdt12,$todt12);
$arr_weekend=array();
foreach($date_count_arr12 as $val ){
	$daths2 =  date('D',strtotime($val));  
	$weekth2 =   getWeeks($val,$_SESSION['org']); //date('W',strtotime($val));
	if(date('D',strtotime($val)) =='Sun')
	{
		array_push($arr_weekend,$val);
		$sun= $sun+1;
	}elseif($daths2=='Sat' && ($weekth2=='02'|| $weekth2=='04'))
	{
		array_push($arr_weekend,$val);
		$sun_sat= $sun_sat+1;
	}
 }

$rep_qry12 = mysql_query("select emp_id from  personal_detail where 1 $searchorg_personal $searchemptxt $emp_status") ;
if(mysql_num_rows($rep_qry12) >0){
while($rep_result12=mysql_fetch_array($rep_qry12)){
	
	 $att_qry = mysql_query("select id,emp_id,org,deviceid,min(punch_in) as punch_intime  ,max(punch_in) as punch_outtime from attendance_login  where emp_id='".$rep_result12['emp_id']."' $frmdate12  $searchorgtxt  group by date(punch_in) ") ;
	$attendancearr[$rep_result12['emp_id']]= array();
	$i=0;
	 while($result = mysql_fetch_assoc($att_qry)){
		 $dated = date('Y-m-d',strtotime($result['punch_intime']));
		 $result['emp_id']=$rep_result12['emp_id'];
		$attendancearr[$rep_result12['emp_id']][$dated]=$result;
		 $i++;
	 }
}
}
//echo "<pre>";
//print_r( $attendancearr);
//echo "<hr>";
//$emp_idarr =  $attendancearr;

foreach($attendancearr as $emp_ky=>$emp_idarr){

foreach($date_count_arr12 as $dt){
	$i=0;
	
if($emp_idarr[$dt]['id']!=""){
$arr12[$emp_ky][$dt]['id']=$emp_idarr[$dt]['id'];
$arr12[$emp_ky][$dt]['emp_id']=$emp_idarr[$dt]['emp_id'];
$arr12[$emp_ky][$dt]['punch_in']=$emp_idarr[$dt]['punch_intime'];
$arr12[$emp_ky][$dt]['punch_out']=$emp_idarr[$dt]['punch_outtime'];
$arr12[$emp_ky][$dt]['deviceid']=$emp_idarr[$dt]['deviceid'];
} else{
$arr12[$emp_ky][$dt]['id']='0';
$arr12[$emp_ky][$dt]['emp_id1']=$emp_ky;
$arr12[$emp_ky][$dt]['punch_in']='00:00:00';
$arr12[$emp_ky][$dt]['punch_out']='00:00:00';
$arr12[$emp_ky][$dt]['deviceid']=0;
}
}

}

//echo "<pre>";
//print_r($arr12);
//die();
?>
<th>Emp Code</th>
<th>Emp Name</th>
<th>Designation</th>
<?php foreach($date_count_arr12 as $val ){ 
$daths2 =  date('D',strtotime($val));  $weekth2 =  getWeeks($val,$_REQUEST['search_org']) ; //date('W',strtotime($val));
if(date('D',strtotime($val)) =='Sun' ){ $th_bg = "style='background:#dddddd;'";}else{$th_bg ="";}
if($daths2=='Sat' && ($weekth2=='02'|| $weekth2=='04') ) {$thw_bg =  "style='background:#dddddd;'";}else{$thw_bg="";}
?>
<th <?=$th_bg?> <?=$thw_bg?>>  <?php echo date('d',strtotime($val)); ?></th>
<?php }?>
<th>Total Hrs</th>
<th>Avg. Hrs</th>
</tr>


<?php foreach($arr12 as $empkey=>$emp1_res){
	$sanwichwo=array();
	?>
<tr>
<td><?=$empkey?></td>
<td> <?php echo get_employe_name($empkey); ?></td>
<td> <?php
 $emp_desn= mysql_fetch_array(mysql_query("select desination from official_detail where emp_id='".$empkey."'"));  
echo $emp_desn['desination'];
?></td>
<?php $total=array(); foreach( $emp1_res as $dtkey=>$dtval){
$daths1 =  date('D',strtotime($dtkey));  $weekth1 =   getWeeks($dtkey,$_REQUEST['search_org']); //date('W',strtotime($dtkey));
if(date('D',strtotime($dtkey)) =='Sun' ){ $th_bg1 = "bgcolor='#dddddd'";}else{$th_bg1 ="";}
if($daths1=='Sat' &&($weekth1=='02' ||$weekth1=='04' ))  {$thw_bg1 = "bgcolor='#dddddd'"; }else{$thw_bg1="";}

?>
<td <?=$th_bg1?> <?=$thw_bg1?> ><?php

$in_date1 = $dtval['punch_in'];
$out_date1 = $dtval['punch_out'];

$dtm = date('H:i',strtotime($in_date1));
$dtm1 = strtotime($dtm);
 
$outtm= date('H:i',strtotime($out_date1));
$outtm1= strtotime($outtm);

$organisation = mysql_fetch_array(mysql_query("select organisation from personal_detail where emp_id='".$empkey."'"));
$holiday_list = $obj->holiday_leave($organisation['organisation']);
 
//Convert them to timestamps.
$date1Timestamp1 = strtotime($in_date1);
$date2Timestamp1 = strtotime($out_date1);
 
//Calculate the difference.
$difference1 = ($date2Timestamp1 - $date1Timestamp1)/3600; 

$device= $dtval['deviceid'];

if($dtval['punch_in']!=0){
array_push($total,$difference1);
}

if($dtval['id']==0){
$yellow ="";
$blue="";
$green="";

$daths =  date('D',strtotime($dtkey));  
$weekth =  getWeeks($dtkey,$_REQUEST['search_org']) ;//date('W',strtotime($dtkey));

$ltype1 = $obj->is_on_leave($empkey,$dtkey);
if($ltype1!='0'){
$str_attend = "<div ><strong><font color='#1FBA9C'>".$ltype1."</font></strong></div>";
}else{
$apprvoved_attendance1 = $obj->upsent_reson($empkey,$dtkey);
if($apprvoved_attendance1=='0'){
$str_attend = "<div><strong><font color='#FF0000'>A</font></strong></div>";
}else{
$str_attend = "<div><strong><font color='#A3A3FF' title='".$apprvoved_attendance1."'>P(RM)</font></strong></div>";
}
}
/********************* Sandwich *************/
$arr_meargeleave = array_merge($arr_weekend,$holiday_list);
$arr_meargeleave = array_unique($arr_meargeleave);
 sort($arr_meargeleave);
if(date('D',strtotime($dtkey)) =='Sun' ){ 
$weeka = sandwich($dtkey,$empkey,$arr_meargeleave,$_REQUEST['search_org']);
if($weeka!=''){
	$str_attend = "<div >".$weeka."</div>";
}else{
	$str_attend = "<div >WO</div>";
}
}
$weekth =  getWeeks($dtkey,$_REQUEST['search_org']); 
$daths =date('D',strtotime($dtkey));
if($daths=='Sat' && ($weekth=='02'|| $weekth=='04') ) {
$weeka = sandwich($dtkey,$empkey,$arr_meargeleave,$_REQUEST['search_org']);
if($weeka!=''){
	$str_attend = "<div >".$weeka."</div>";
}else{	
	$str_attend = "<div >WO</div>";
}	}



	if(in_array($dtkey,$holiday_list)){
		$hdsand =sandwich($dtkey,$empkey,$arr_meargeleave,$_REQUEST['search_org']);
	if($hdsand!=""){
		$str_attend = "<div ><strong><font color='#FF0000'> A</font></strong></div>";
	}else{
		$str_attend = "<div ><strong><font color='#1FBA9C'> H </font></strong></div>";
	}
	}
		
/*************** End Sandwich **************/


}else{
$previous_day = $obj->previous_day_logout($dtval['emp_id'],$dtkey);
if($previous_day=='1' && $organisation['organisation']=='DPSGS')
{$working_hours='7.5';}
else
{$working_hours= $obj->working_hrs($dtval['emp_id'],$_REQUEST['search_org'],$dtkey);}
if($difference1 < $working_hours){
$yellow = 'background-color:yellow';
$blue="";
$green="";
/*$str_attend= "<div style='background-color:yellow; width:20px;height:20px' >
<a href='update_attendance.php?emp_id=".$empkey."&dt=".$dtkey."&id=".$dtval['id']."' class='iframe' id='ads2'>P</a>
</div>";*/
$apprvoved_late1 = $obj->late_reson($empkey,$dtkey);
if($apprvoved_late1!='0'){
$str_attend= "<div style='background-color:#FFC0CB; width:20px; height:20px; text-align:center;'>P($apprvoved_late1)</div>";
}
elseif($apprvoved_late1=='0')
{
$hftype = $obj->halfday_leave($empkey,$dtkey);
//$str_attend = "<div style='background-color:#FFC0CB; width:20px;height:20px' title='".$hftype."'>P'".$hftype."'</div>";	
$str_attend = "<div><strong><font color='#1FBA9C'> ".$hftype."</font></strong></div>";
}
else{
	if($_REQUEST['search_org']=='DPSGS')
	{
	$str_attend= "<div style='background-color:yellow; width:20px;height:20px'>P/2</div>";
	}
	else
	{
	$str_attend= "<div>P</div>";
	}
}
}
else{
$yellow ="";
$shift_time= $obj->shifttiming($dtval['emp_id'],$dtkey);
$ten= date("H:i",strtotime('10:00'));
if($dtm1 > $shift_time)
{
	$apprvoved_late2 = $obj->late_reson($empkey,$dtkey);
	if($apprvoved_late2 !='0'){
		$blue="";
$str_attend = "<div style='background-color:#FFC0CB; width:20px;height:20px' title=''>P ($apprvoved_late2)</div>";
}
	
	else if($previous_day=='1'  && $dtm<=$ten)
	{
		$str_attend = "<div> P </div>";
		$blue="";
	}
	
	else{
	$blue= 'background-color:#0CC';
	$yellow="";
	$str_attend = "<div style='background-color:#0CC; width:20px; height:20px; text-align:center;'> P/2 </div>";}
	
}

else{
$evening_time = $obj->shift_evening_time($dtval['emp_id'],$dtkey,$_REQUEST['search_org']);
if($evening_time > $outtm1)
{
	$apprvoved_late3 = $obj->late_reson($empkey,$dtkey);
	if($apprvoved_late3 !='0'){
$blue="";
$str_attend = "<div style='background-color:#FFC0CB; width:20px;height:20px' title='".$apprvoved_late2."'>P</div>";
}else{
$green= 'background-color:#0C0';
$str_attend = "<div style='background-color:#0C0; width:20px; height:20px; text-align:center;'> P/2 </div>";
}
}
else{
$str_attend = "<div>P</div>";
$blue="";
$yellow="";
$green="";
}
}
}
}

?>
<span class="p12_form">
<? 
echo $str_attend;
if($device =='1')
{echo "DPSGS";}
elseif($device =='2' || $device =='3' || $device =='4')
{echo "DPSGM";}
elseif($device =='5' || $device =='6')
{echo "DPSGV";}
elseif($device =='7')
{echo "DPSGI";}
elseif($device =='8')
{echo "DPSG-STARZ-PV";}
elseif($device =='9' || $device =='10')
{echo "DPSG-DDN";}
elseif($device =='11' || $device =='12')
{echo "SIS";}
elseif($device =='13')
{echo "DPSG-STARZ-DLF";}
elseif($device =='14' || $device =='15')
{echo "DPSG-PV";}
elseif($device =='16')
{echo "DPSG-PV";}
elseif($device =='17')
{echo "STARZ-SEC-10A";}
elseif($device =='18')
{echo "DPSG-SL";}
elseif($device =='0')
{echo "";}
?>
</span>
<span class="dt12_form" style="display:none;font-size: 8pt;<?=$yellow?>;<?=$blue?>;<?=$green?>" >
<strong>LI: </strong><?php echo date('H:i',strtotime($in_date1)) ?><br>
<strong>LO: </strong><?php echo date('H:i',strtotime($out_date1)) ?> <br>
<!--<strong>Hrs: </strong><?php echo round($difference1,1); ?>-->
</span>
</td>
<?php }?>

<td><?php 
$total_round= array_sum($total);
echo number_format((float)$total_round, 2, '.', '');
//echo round($total_round,2);
?></td>

<td><?php 
$avg_total= ($total_round/count($total));
echo number_format((float)$avg_total, 2, '.', '');
//echo round($total_round/count($total),2);
?></td>
</tr>

<?php }}else{?>
<p>Search Item For List</p>
 <?php }?>

</table>


</div>
   
