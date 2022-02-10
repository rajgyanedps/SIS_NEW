<?php
date_default_timezone_set('Asia/Calcutta');
$dt=date("Y-m-d H:i:s");
//connection established...
mysql_connect("localhost", "sisschoo_selaquimess", "sisschoo_selaquimess") or die(mysql_error());
mysql_select_db("sisschoo_selaquimess") or die(mysql_error());
//..........................
$attandance_for='dinner_hall';
$q1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' AND date='".date('Y-m-d')."'");
$row_cnt = mysql_num_rows($q1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			$data1=mysql_query("select * from tbl_extra_people group by id  order by id asc");
			
			$reg_id=array();
			
			while($d1=mysql_fetch_array($data1))
			{
				$reg_id[]=$d1['id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				//check for breakfast............................
				$d2=mysql_query("select * from tbl_dinner_history where data='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
		         if($row_cnt==0)
		         {
					$da1=mysql_fetch_array(mysql_query("select * from tbl_extra_people where id='".$reg_id[$i]."'"));
			  mysql_query("insert into tbl_dinner_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,type,date) values('".$reg_id[$i]."','".$da1['breakfast']."',
			  '".$da1['morning_tea']."','".$da1['lunch']."',
			  '".$da1['evening_tea']."','".$da1['dinner']."','".$da1['status']."',
			  '".$da1['bedtea']."','".$da1['morning_snacks']."',
			  '".$da1['evening_snacks']."','".$da1['night_milk']."',
			  '".$da1['dining_hall_user_type']."','".date('Y-m-d')."')");
			 
				 }
				 
				
			}
		
		echo 'Marks Attandance Successfully';
		}
		//update student record................................
		
		//Agni House id 1
		
		$attandance_for="Agni House";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='1' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
		
		
		
		
	 //Akash House id 2
		
		$attandance_for="Akash House";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='2' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
		
		
		
		//Jal House id 3
		
		$attandance_for="Jal House";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='3' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
	 
		


//Prithvi House id 4
		
		$attandance_for="Prithvi House";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='4' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
	 
		


//Girls Hostel id 5
		
		$attandance_for="Girls Hostel";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='5' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
	 



//Holding House id 6
		
		$attandance_for="Holding House";
		$d1=mysql_query("select * from mark_attandance where mark_attandance_for='".$attandance_for."' and date='".date('Y-m-d')."'");
		$row_cnt=mysql_num_rows($d1);
		if($row_cnt>0)
		{
			echo 'We have already mark attandance for selected date';
		}
		else
		{
			mysql_query("insert into mark_attandance(date,mark_attandance_for,cron_date_time) values('".date('Y-m-d')."','".$attandance_for."','".$dt."')");
			
			$d1=mysql_query("select * from tbl_registration where house='6' and withdraw='0' group by reg_id order by reg_id desc");
			
			$reg_id=array();
			
			while($d2=mysql_fetch_array($d1))
			{
				$reg_id[]=$d2['reg_id'];
				
			}
			for($i=0;$i<count($reg_id);$i++)
			{
				
				//check for breakfast............................
				 $d2=mysql_query("select * from tbl_student_history where date='".date('Y-m-d')."' and reg_id='".$reg_id[$i]."'");
				 $row_cnt=mysql_num_rows($d2);
				 if($row_cnt==0)
		         {
					 $d1=mysql_fetch_array(mysql_query("select * from tbl_registration where reg_id='".$reg_id[$i]."' "));
			  mysql_query("insert into tbl_student_history(reg_id,breakfast,morning_tea,lunch,evening_tea,dinner,status,bedtea,morning_snacks,evening_snacks,night_milk,house,date) values('".$reg_id[$i]."','".$d1['breakfast']."',
			  '".$d1['morning_tea']."','".$d1['lunch']."','".$d1['evening_tea']."','".$d1['dinner']."','".$d1['status']."','".$d1['bedtea']."','".$d1['morning_snacks']."','".$d1['evening_snacks']."','".$d1['night_milk']."','".$d1['house']."','".date('Y-m-d')."')");
			  
				 }
              }
			
		echo 'Marks Attandance Successfully';	
		}
	 

		
	 
?>