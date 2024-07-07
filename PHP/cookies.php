<?php

// cookies are a mechanism for a storing a data in remote browser and thus tracking 
// or indentifying return users.You can set a specific data to be stored in the browser,
// and then retrieve it when the user visits the site again.


// set cookie

setcookie('name','Prajwal',time()+86400*30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name','',time()-86400);




?>