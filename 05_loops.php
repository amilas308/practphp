<?php
/*
for ($p = 0; $p <= 10; $p = $p + 2) { 
    echo 'Number ' . $p . '<br>';
}

$d = 1;
while($d < 20){
    echo 'Number ' . $d;
    $d++;
}


for($x = 0; $x < count($post); $x++){
    echo $post[$x];
}
*/
$post = ['language','tribe','country'];
foreach($post as $index => $item){
    echo $index + 1  . ' - ' . $item;
}

?>