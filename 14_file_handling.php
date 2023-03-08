<?php
$file = '/vex/users.txt';
if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $content = fread($handle, file_size($file));
    fclose($handle);
    echo $content;
} else{
    $handle = fopen($file, 'w');
    $content = 'Abba' . PHP_EOL . 'james' . PHP_EOL . 'Masu';
    fwrite($handle, $content);
    fclose($handle);
}




?>