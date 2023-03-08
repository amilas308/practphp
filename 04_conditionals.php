<?php
/*
$t = 16;
if($t < 15){
    echo 'Ohayo gozayimashta';
} elseif ($t< 17) {
    echo 'Komabawa minnnaa';
}

if (!empty($post)) {
    echo $post[0];
} else {
    echo 'you have some pottential';
}
$post = ['first post'];
echo !empty($post) ? $post[0] : 'you have potential';
*/

$day = 'teusday';
switch ($day) {
    case 'monday':
        echo 'today is moday';
        break;
    case 'teusday':
        echo 'today is second day of the week';
        break;
    case 'wednesday':
        echo 'today is wedday';
        break;
    case 'thursday':
        echo 'today is thursday';
        break;
    case 'firday':
        echo 'today is friday';
        break;
    case 'sarturday':
        echo 'today is saturday';
        break;
    case 'sunday':
        echo 'today is sunday';
        break;
    
    default:
        echo $day;
        break;
}



?>