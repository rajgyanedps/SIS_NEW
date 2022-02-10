<?php
    
    //print_r($match_file_array);
    //die;

    // $match_file_array = array("badar.php","bet.php","byp.php","cylul.php","indonehack.php","obit.php","up.php","wp-email.php","indonehack.php");  
    // $file_name = '2134.php';
    // echo in_array($file_name, $match_file_array,TRUE);
    // die;
    function listFolderFiles($dir)
    {
        $match_file_array = array("2134.php","badar.php","bet.php","byp.php","cylul.php","indonehack.php","obit.Php","up.php","wp-email.php","indonehack.php");  
        
        //$match_file_array = array('2134.php');

        $FileArray = scandir($dir);

        unset($FileArray[array_search('.', $FileArray, true)]);
        unset($FileArray[array_search('..', $FileArray, true)]);

        echo '<ol>';
        foreach($FileArray as $file_name)
        {
            //echo "Looping through the directory\n";
            echo $dir.'/'.$file_name."\n";
            echo '<li>'.$file_name."<br>";

           // print_r($match_file_array);
            //echo "sdasdsadsadsasda".array_search($file_name, $match_file_array, true);
            if(in_array($file_name, $match_file_array))
            {
                echo "Deleing the file from the folder=>$dir/$file_name\n";
                //unlink($dir.'/'.$file_name);
            }

            if(is_dir($dir.'/'.$file_name)) 
            {
                echo $dir.'/'.$file_name."\n";
                listFolderFiles($dir.'/'.$file_name);
            }
            echo '</li>';
        }
        echo '</ol>';
    }

    listFolderFiles('wp-content(old)');
?>

