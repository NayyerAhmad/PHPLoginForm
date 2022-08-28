<?php
include 'function.php';

if(isset ($_POST['btnlogin']))
{
    $users = $_POST ['user'];
    $password = $_POST ['pass'];

    checkadmin($users,$password);

    $chk = checkadmin($users, sha1($passwords));

    if($chk == true)
    {
        header('location:dashboard.php');
    }
    else
    {
        header('location:loginform.php');

    }


}


?>