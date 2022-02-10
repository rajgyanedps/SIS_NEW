 <? 
 error_reporting(0);
     session_start();
    include('include/db.php');
    date_default_timezone_set('Asia/Calcutta');
      $DATE=date('Y-m-d H:i:s');
    extract($_POST);
	extract($_GET);
    //$fname=$_POST['fname'];
    $errors='';
    $ch=0;
	//print_r($_SESSION);
	//die();
 //if(isset($_REQUEST['save1'])){
 
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
 {
     $secret = '6LcP2qwZAAAAAKXWo5EVzbCT7us525FEO8H4brrE';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
     
 
       if ($responseData->success) {
         
    	  if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
             { 
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
             } 
           elseif(!empty($_SERVER['REMOTE_ADDR'])) 
             { 
             $ip = $_SERVER['REMOTE_ADDR']; 
             } 
           else 
            { 
            $ip="Not Set"; 
            } 
    	
            
            if(isset($_SESSION['v_type']))
    		$visitor=$_SESSION['v_type'];
    		else
    		$visitor="";
    $interested=$_POST['myself'];
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $sch_class=$_POST['admission'];
    
    $infosource=$_POST['reference'];
    
    //print_r($_POST);die;
    $sel_user = "SELECT * FROM student WHERE email='$email' or phone_no='$mobile'";
    $res_user =  mysql_query($sel_user) or die(mysql_error());
    $num_res=mysql_fetch_array($res_user);
    $num_row = mysql_num_rows($res_user);
    $sid=$num_res['stud_id'];
    
    	 if($num_row == 0)
    	 {
    		
    	$pos = strpos($sch_class,'Arjuna');
    	if($pos === false)
    	{
    		if(($sch_class=='XI Science / Medical') or ($sch_class=='XI Science / Non-Medical'))
    		{
    		 $empid='400100'; // This Id For send XII Science lead to gurukul 
    		}
    		else
    		{
    			 $t=time();
    	 $empid='100100';
    	 /* remove leads from counsellor 2 in database as requested by bewlenne from SIS.
    	 if($t%2==1)
    	 $empid='100100';
    	 else
    	 $empid='200100'; // you can change this to second counsellors id in future
    	 */
    		}
    		$project_id=0;
    	}
    	else
    	{
    	$project_id=5;
    	 $empid='100';
    	}
    
    	
    	 if($_POST['leadtype']=="IB") 
    	 {
    	 $strL="Lead-IB"; 
    	 }
    	 else if($_REQUEST['bid']=='euttaranchal-banner')
    	 {
    	 $strL="Lead-Euttaranchal";
    	 }
    	 else{
    	 $strL="Lead";
    	 } 
    
    	 $user_qry = "INSERT INTO users(username,password,usertype,enabled,last_active)VALUES('','','student','1','".$DATE."')";
    	 $user_res = mysql_query($user_qry) or die(mysql_error());
    	 $id = mysql_insert_id();
    	 
    	  $user_sql="insert into student(project_id,stream,stud_name,email,phone_no,city,state,course,information_source,information_source1,page_group,emp_id,joined,count_visit,user_id,ip_address,v_type) 
		  values('$project_id','$interested','$name','$email','$mobile','$city','$state','$sch_class','$strL','$infosource','SELAQUI MAIN','$empid','".$DATE."',1,'$id','$ip','$visitor')";
    	 mysql_query($user_sql) or die(mysql_error());
    	  
    	   $subject = 'Thank you for contacting SelaQui International School.';
           $txt = '
           <p>Dear <strong>'.$name.',</strong></p>
    	   <br>
           <p>Thank you for contacting <strong>SelaQui International School, Dehradun!</strong>  <br><br>We appreciate your interest in our school. Your enquiry request has been submitted to our admission counselor and you will receive a call shortly. <br><br>
    	   In the meantime if you would like to speak with us or if your enquiry is urgent then please <strong>call us on 91- 7669040404</strong>. <br />
<br />
You can also visit our website <a href="https://selaqui.org">https://selaqui.org</a>
    	   <br><br>
    	   We look forward to speaking to you soon.
		    <br><br><br><strong>Warm Regards,<br>Admissions Team<br>SelaQui International School </strong></p>';
    
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    		$headers .= "From:  SelaQui International School<admissions@selaqui.org>". "\r\n";
    		$headers .= "Return-Path: <admissions@selaqui.org>". "";
    
           $mail= mail($email,$subject,$txt,$headers);
    	
               include('../mailcontent/message.php');
                  //$subject1 = 'SIS Enquiry Class '.$sch_class.'.';
                  //$to='vs.btechit@gmail.com,bishtmca83@gmail.com';
                 mail($to,$subject1,$txt1,$headers); 
                 
                 
    		$_SESSION['formfill']=true;
    
    unset($_SESSION['6_letters_code']);
    
    $errors="<font color='green'>Your Enquiry has been submitted successfully.We will get back to you shortly.</font>" ;
     $ch=1;
  }
    	 else
    	 {
     $errors='<font color="green">This Enquiry Already Sent.</font>';
    	 }
    
    
    
    
    }else {
      $errors='Robot verification failed, please try again';
    }}
    else
    {
        $errors='Click on Check Box';
    }
	echo $errors;
    //}
    ?>