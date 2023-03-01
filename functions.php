<?php

// confirmQuery Function

function confirmQuery($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED".mysqli_error($connection));
    }
}

//Data secure
function real_escape($user_data){
    global $connection;
    return trim(mysqli_real_escape_string($connection,$user_data));
}





?>