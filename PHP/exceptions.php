<?php

// PHP has a exception model similar to that of progrmming languages
// An exception can be thrown, and caught("catched") within PHP.
//CODE MAY BE Surrounded in a try block, to facilitate the catching of
// potential exceptions. Each Try must have atleast one corresponding 
// catch or finally block.

function inverse($x){
    if(!$x){
        throw new Exception('Divison by zero');
    }
    return 1/$x;

}

// echo inverse(0);

try {
    echo inverse(5) . '<br>';
    echo inverse(0);
}

catch(Exception $e){
     echo 'Caught Exception', $e->getMessage(), ' ' . '<br>';
}

finally{
    echo 'Finally Block';
}

?>