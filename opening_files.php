<?php

$file = "example.txt";
// open file 
if($handle = fopen($file, "w")){
    // write to file 
    fwrite($handle, "this text was written");
    fclose($handle);
}else {
    echo "This file could not be written";
}


?>