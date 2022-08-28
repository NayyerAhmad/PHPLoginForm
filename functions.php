<?php
include 'config.php';

function runquery ($qry)
{
    $con = connect();
    $re = mysqli_query($con,$qry);

    $data = array();

    while ($final = mysqli_fetch_assoc($re))
    {

        $data[] = $final;
    }

    return $data;

}


function checkadmin($user,$pass)
    {
        $qry = "select * from login where username = '$user' and password = '$pass'";

        $result = runquery ($qry);

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }



?> 