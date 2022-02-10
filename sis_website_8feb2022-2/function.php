<?php
function parse_input($unsafe_str){
$safe_str = htmlspecialchars($unsafe_str, ENT_QUOTES, 'UTF-8');
return $safe_str;
}
function parse_output($unsafe_str){
$safe_str = htmlspecialchars_decode($unsafe_str);
return $safe_str;
}
function redirect($url, $permanent = false) {
	if($permanent) {
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}
function uploadFile($PATH,$FILENAME,$FILEBOX)
{
$file=$PATH.$FILENAME;
    $uploaded="TRUE";
	global $_FILES;
	
    if (! @file_exists($file))
    {
		if ( isset( $_FILES[$FILEBOX] ) )
        {
			if (is_uploaded_file($_FILES[$FILEBOX]['tmp_name']))
            {
	            copy($_FILES[$FILEBOX]['tmp_name'], $PATH.$FILENAME);
            }else{
				$uploaded="FALSE";
            }
        }
    } //end of if @fileexists
	return $uploaded;
}
function get_FileExtention($file_name)
{
	$file_extn = substr($file_name, strrpos($file_name, '.')+1);
	return $file_extn ;
}
function insert_into_tags($tags)
{
	
	 $qry = mysql_query("select * from tags where tag='".$tags."'");
	$res = mysql_num_rows($qry);
	if($res <= 0)
	{
	
		$ins_qry = mysql_query("insert into tags set tag = '".$tags."'");
		$last_id = mysql_insert_id();
	}
	return $last_id;
}

function pagination($current, $pages, $link='?page=%d') {
/**
 * Pagination function
 * 
 * @param int $current The current page
 * @param int $pages   How many pages there are in total
 * @param int $link    Link format (sprintf with one %d parameter)
 * @return array An array of links
 */
 
  $min = ($current-3<$pages && $current-3>0) ? $current-3 : 1;
  $max = ($current+3>$pages) ? $pages : $current+3;
  $output = array();
  for($i=$min; $i<=$max; $i++):
    if($current == $i):
      $output[] = "<span>{$i}</span>";
    else:
      $output[] = '<a href="'.sprintf($link,$i).'">'.$i.'</a>';
    endif;
  endfor;
  if ($current+1 < $pages):
    $output[] = '<a href="'.sprintf($link,$current+1).'">Next</a>';
  endif;
  if ($current-1 > 0):
    array_unshift($output, '<a href="'.sprintf($link,$current-1).'">Previous</a>');
  endif;
  return $output;
} 

  

function contactus_insert($fname,$mobile,$email,$class,$info) {

$sql = "insert into tbl_contactus(fname,mobile,email,class,info) values('$fname','$mobile','$email','$class','$info')";
$query_con = mysql_query($sql);
return $query_con;
}


?>