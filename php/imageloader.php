<?php
 $files = scandir("../images", 1); 

 $genericObject = new stdClass("../images");

 foreach($files as $key => $value)
 
{
    if($value === '..' || $value === '.'){
    break;
    }
    
    echo $value;

}


/*var_dump($files);*/ 

// 0 for ascending order, and 1 for descending order