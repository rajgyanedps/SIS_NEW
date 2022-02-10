<?php
error_reporting(0);
session_start();
//include("connection.php");
include('include/db.php');
@extract($_GET);
@extract($_POST);
$e_arr = array();
if($_POST['city_id']!=''){
    $data =mysql_query("select * from tbl_event where id='" . $_POST['city_id'] . "'  order by id asc");
        while( $row = mysql_fetch_array($data) ){
       $id = $row['id'];
        $venue = $row['venue'];
        $event_date = $row['event_date'];
       
       $q2=mysql_query("select sum(seat) as total_seat from event_registration  where location='".$row['id']."'");
	   
	   $booked_seat=mysql_fetch_array($q2);
	   $booked=$booked_seat['total_seat'];
	   $no_seat= $row['no_seat']-$booked;
        $e_arr = array("id" => $id, "venue" => $venue, "event_date" => $event_date, "no_seat" => $no_seat);
            echo json_encode($e_arr);
        }
}
?>
