<?php 
ob_start();
session_start();
mysql_connect("selaquicrm.db.5227155.hostedresource.com", "selaquicrm", "Siscrm1#") or die(mysql_error());
mysql_select_db("selaquicrm") or die(mysql_error());
date_default_timezone_set('Asia/Calcutta'); 
echo json_decode($data);
if ($_SERVER["REQUEST_METHOD"] === 'POST') {    
    //print_r($_POST); die;
    $first_name = isset($_POST['Name']) ? mysql_real_escape_string($_POST['Name']) : "";    
    $email = isset($_POST['Email']) ? mysql_real_escape_string($_POST['Email']) : "";
    $phone_no = isset($_POST['phone_no']) ? mysql_real_escape_string($_POST['phone_no']) : "";
    $qualification = isset($_POST['qualification']) ? mysql_real_escape_string($_POST['qualification']) : "";
    $student_percentage = isset($_POST['percentage']) ? mysql_real_escape_string($_POST['percentage']) : "";
    $call_time = isset($_POST['call_time']) ? mysql_real_escape_string($_POST['call_time']) : "";
    $message = isset($_POST['message']) ? mysql_real_escape_string($_POST['message']) : "";
    $state = isset($_POST['state']) ? mysql_real_escape_string($_POST['state']) : "";
    $city = isset($_POST['city']) ? mysql_real_escape_string($_POST['city']) : "";
    $class_name = isset($_POST['grade']) ? mysql_real_escape_string($_POST['grade']) : "";
    $annual_income = isset($_POST['income']) ? mysql_real_escape_string($_POST['income']) : "";
    $status='unipro';
    
    $parts = parse_url($_POST['url']);
    parse_str($parts['query'], $query);
    $PSE=$query['PSE'];
    $PAC= $query['PAC'];
    $PCA= $query['PCA'];
    $PAG= $query['PAG'];
    $PKW= $query['PKW'];
    $PMT= $query['PMT'];
    $PDS= $query['PDS'];
    $today=date('Y-m-d H:i:s');
    
    if($PSE || $PAC || $PCA || $PAG || $PKW || $PMT || $PDS || $PPC || $PAD ) {    	
        $_SESSION['campaign_key']=array(
        	'PSE' => $PSE,
        	'PAC' => $PAC,
        	'PCA' => $PCA,
        	'PAG' => $PAG,
        	'PKW' => $PKW,
        	'PMT' => $PMT,
        	'PDS' => $PDS,							
        	'PAD' => $PAD);	
    }
    
    //newly added parameters
    $part = parse_url($_POST['url']);
    parse_str($part['query'], $new_camp);
    $source = $new_camp['utm_source'] ? mysql_real_escape_string($new_camp['utm_source']) : "";
    $medium = $new_camp['utm_medium'] ? mysql_real_escape_string($new_camp['utm_medium']) : "";
    $campaign = $new_camp['utm_campaign'] ? mysql_real_escape_string($new_camp['utm_campaign']) : "";
    $adgroup = $new_camp['utm_adgroup'] ? mysql_real_escape_string($new_camp['utm_adgroup']) : "";
    $location = $new_camp['utm_location'] ? mysql_real_escape_string($new_camp['utm_location']) : "";
    $keyword = $new_camp['utm_keyword'] ? mysql_real_escape_string($new_camp['utm_keyword']) : "";
    $device = $new_camp['utm_device'] ? mysql_real_escape_string($new_camp['utm_device']) : "";
    $devicemodel = $new_camp['utm_devicemodel'] ? mysql_real_escape_string($new_camp['utm_devicemodel']) : "";
    $placement = $new_camp['utm_placement'] ? mysql_real_escape_string($new_camp['utm_placement']) : "";
    $adpostion = $new_camp['utm_adpostion'] ? mysql_real_escape_string($new_camp['utm_adpostion']) : "";
    $target = $new_camp['utm_target'] ? mysql_real_escape_string($new_camp['utm_target']) : "";
    $network = $new_camp['utm_network'] ? mysql_real_escape_string($new_camp['utm_network']) : "";
    $creative = $new_camp['utm_creative'] ? mysql_real_escape_string($new_camp['utm_creative']) : "";
    //end of newly added parameters 
    if($first_name!='') {
        $filed = $_SESSION['campaign_key'];
          $query = "INSERT INTO student (`stud_name`,`emp_id`,`state`,`city`,`joined`,`email`,`phone_no`,`course`,`Percentage`,`call_time`,`message`,`information_source`,`grade`,`annual_income`,`PSE`,`PAC`,`PCA`,`PAG`,`PKW`,`PMT`,`PDS`,`PPC`,`PAD`,`utm_medium`,`utm_campaign`,`utm_adgroup`,`utm_location`,`utm_keyword`,`utm_device`,`utm_devicemodel`,`utm_placement`,`utm_adpostion`,`utm_target`,`utm_network`,`utm_creative`)
          VALUES('$first_name','100100','$state','$city','$today','$email','$phone_no','$qualification','$student_percentage','$call_time','$message','$source','$class_name','$annual_income','".$filed['PSE']."','".$filed['PAC']."','".$filed['PCA']."','".$filed['PAG']."','".$filed['PKW']."','".$filed['PMT']."','".$filed['PDS']."','".$status."','".$filed['PAD']."','$medium','$campaign','$adgroup','$location','$keyword','$device','$devicemodel','$placement','$adpostion','$target','$network','$creative')";
        $result = mysql_query($query);
        if ($result == 1) {
            $data["message"] = "data saved successfully";
            $data["status"] = "Ok";
        } else {
            $data["message"] = "data not saved";
            $data["status"] = "error";    
        }
    }
} else {
    $data["message"] = "Format not supported";
    $data["status"] = "error";    
}
echo json_encode($data);
?>


<!--
<form name="frm" method="POST">
<input type="text" name="name" id="name" value="sandeepbisht" >
<input type="text" name="email" id="email" value="sandeep.bisht@dpsgs.org" >
<input type="text" name="phone_no" id="phone_no" value="9971589502" >
<input type="text" name="qualification" id="qualification" value="MCA" >
<input type="text" name="percentage" id="percentage" value="70%" >
<input type="text" name="call_time" id="call_time" value="9PM" >
<input type="text" name="message" id="message" value="hello how r u" >
<input type="text" name="state" id="state" value="delhi" >
<input type="text" name="city" id="city" value="test" >
<input type="submit" name="submit" id="button" value="Save" class="btn btn-primary">
</form>-->