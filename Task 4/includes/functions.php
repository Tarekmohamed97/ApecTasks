<?php

include "db.php";

function send_query($que)
{

        global $connection;
        $query = $que;
        $result = mysqli_query($connection,$query);
        return $result;
}

function check_query_sent($result)
{
    if(!$result)
    {
        echo"No query was sent";
    }
}

?>