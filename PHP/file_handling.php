<?php


// file handling is the ability to read and write files on tje server.
// PHP has built in functions for reading and writing files

$file = 'extras/users.txt';

if(file_exists($file)){
    // echo readfile($file);

    $handle = fopen($file,'r');
    $contents = fread($handle,filesize($file));
    fclose($handle);
    echo $contents;
}
else{
    $handle = fopen($file,'w');
    $contents = 'Prajwal' . PHP_EOL . 'John' . PHP_EOL . 'Harvey';
    fwrite($handle,$contents);
    fclose($handle);
}


?>