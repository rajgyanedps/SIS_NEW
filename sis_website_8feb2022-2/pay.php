<?php 
session_start();
include('include/db.php');
include("ccavenue/libfuncs.php3");

if(count($_POST)>0)
{
	
	   $code    = $_POST['ordercodeforreg'];
	   $amtt    = $_POST['amounts']; 
	 
	 //print_r($code);die; 
	  
	  //$Amount = 1000;
	  $Amount = $amtt;
	  $sum = number_format($Amount,2,".","");
	  $bcname       =   $_REQUEST['pay_name'];
	  $bcaddress    =   $_REQUEST['pay_address'];
	  $bccountry    =   $_REQUEST['pay_country'];
	  $bcphone      =   $_REQUEST['pay_phone'];
	  $bcmail       =   $_REQUEST['pay_email'];
	
	  $billing_cust_name       = $_REQUEST['billing_cust_name'];
	  $billing_cust_address    = $_REQUEST['billing_cust_address'];
	  $billing_cust_country    = $_REQUEST['billing_cust_country'];
	  $billing_cust_state      = $_REQUEST['billing_cust_state'];
	  $billing_cust_city       = $_REQUEST['billing_cust_city'];
     $billing_cust_Zip        = $_REQUEST['billing_zip'];
	  $billing_cust_tel        = $_REQUEST['billing_cust_tel'];
	  $billing_cust_email      = $_REQUEST['billing_cust_email'];
	
	 // $delivery_cust_name      = $_REQUEST['delivery_cust_name'];
	  $delivery_cust_address   = $_REQUEST['delivery_cust_address'];
	  $delivery_cust_country   = $_REQUEST['delivery_cust_country'];
	  $delivery_cust_state     = $_REQUEST['delivery_cust_state'];
  	  $delivery_cust_tel       = $_REQUEST['delivery_cust_tel'];
	  $delivery_cust_notes     = $_REQUEST['delivery_cust_notes'];
	
	 $Merchant_Param          = $_REQUEST['Merchant_Param'];
	 $billing_zip_code        = $_REQUEST['billing_zip_code'];
	 $delivery_cust_city      = $_REQUEST['delivery_cust_city'];
	 $delivery_zip_code       = $_REQUEST['delivery_zip_code'];
	 
	  
    $passstring = "?Order_Id=".$code."&Amount=".$sum."&billing_cust_name=".$billing_cust_name."&billing_cust_address=".$billing_cust_address."&billing_cust_country=".$billing_cust_country."&billing_cust_state=".$billing_cust_state."&billing_cust_city=".$billing_cust_city."&billingZip=".$billing_cust_zip;
	$passstring .= "&billing_cust_tel=".$billing_cust_tel."&billing_cust_email=".$billing_cust_email;
	$passstring .= "&Currency=USD&TxnType=A&actionID=TXN&Merchant_Id=M_mrn19886_19886";
    $passstring .= "&delivery_cust_name=".$delivery_cust_name."&delivery_cust_address=".$delivery_cust_address."&delivery_cust_tel=".$delivery_cust_tel."&delivery_cust_country=".                    $delivery_cust_country."&delivery_cust_state=".$delivery_cust_state."&delivery_cust_notes=".$delivery_cust_notes."&delivery_cust_city=".$delivery_cust_city;
   
    $Merchant_Id = "M_mrn19886_19886"; // Tesi
    //$Merchant_Id = "M_mayar_6201";  // for check purpose
	$Order_Id = $code;
	
	$Redirect_Url="https://www.selaqui.org/thanks.php" ;//your redirect URL where your customer will be redirected after authorisation from CCAvenue
	
	$WorkingKey = "saeqtmi7tvwsm6raqr"  ;//put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page. 
	
	//$WorkingKey = "j7rdga9aou5uywwhhar6qwumwcxze91c";  // for check purpose
	
	$Checksum = getCheckSum($Merchant_Id,$sum,$Order_Id ,$Redirect_Url,$WorkingKey);
	
	$ccavenue = "https://www.ccavenue.com/shopzone/cc_details.jsp";
	$passstring .="&Checksum=".$Checksum;
	$passstring .="&Redirect_Url=".$Redirect_Url;
 $redirect_page = $ccavenue.$passstring;
// print_r($redirect_page);die;
                        /*$QueryStatementForOrder   = "insert into ordermanagement set
												     ordercode           =     '".$code."',
												     memberid            =     '".$memberid."',
												     regidate            =     '".$registrationdate."'";
                      
                        $RegistrationQuery = mysql_query($QueryStatementForOrder);*/
//print_r($redirect_page);die;  
echo "<script>window.location.href='$redirect_page'</script>";	
}
?>
