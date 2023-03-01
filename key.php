<?php

// generating random key
//ABC -abc - 09-!@#$%^&*()_+

$original_text = "abcdefghijklmnopqrstuvwxyz0987654321ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+";
$length = strlen($original_text);
echo $length;
echo PHP_EOL;
//convert string to array
$convert_array = str_split($original_text);
//shuffle
shuffle($convert_array);
//print_r($convert_array);
$convert_string = join("",$convert_array);
//echo $convert_string;
$random_password = "";
for($i=0; $i<=10; $i++){
    $random_password .= $convert_string[$i];
}
echo $random_password;

?>