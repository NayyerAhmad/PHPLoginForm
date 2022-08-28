<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS','');
define('DB','loginform');


function connect()
{
    $rs = mysqli_connect(HOST,USER,PASS,DB);
    return $rs;

}





?>