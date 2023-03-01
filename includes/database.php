<?php

// Most Secure Way of Creating Database Connection

$db['server_name'] = "localhost";
$db['user_name'] = "root";
$db['user_password'] = "";
$db['database_name'] = "booking-management";

foreach($db as $Key => $value){
    define(strtoupper("$Key"), $value);
}
$connection = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,DATABASE_NAME);
if(!$connection){
    die("CONNECTION FAILED" . mysqli_connect_error());
}

?>