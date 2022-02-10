<?php
$valid_formats = array("pdf", "doc", "xlsx", "bmp");
$max_file_size = 1024*10000; //100 kb
$path = "upload_test/"; // Upload directory
chmod($path, 0777);
if (isset($_POST['submit'])) {
	
	$files = $_FILES['attachment']['name'];
	$var = implode("",$files);
	foreach ($_FILES['attachment']['name'] as $f => $name) {     
	    if ($_FILES['attachment']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	  
			
			
			//echo $name;echo "/";
			
	    if ($_FILES['attachment']['error'][$f] == 0) {	           
	        if ($_FILES['attachment']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["attachment"]["tmp_name"][$f], $path.$name)) {
	            	// Number of successfully uploaded files
	            }
	        }
	    }
		
	}
	

    
}



?>
<!DOCTYPE html>
<html>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5N3WMT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="attachment[]" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> 