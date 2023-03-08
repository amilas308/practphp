<?php
    $fruits = ['apple', 'mango', 'pear'];
    // echo count($fruits);
    // var_dump(in_array('apple', $fruits));
    $fruits[] = 'tomatoe';
    array_push($fruits, 'garden egg', 'cucumber');
    array_unshift($fruits, 'ginger');
    // remove array
    array_pop($fruits);
    array_shift($fruits);
    unset($fruits[3]);
    $chunked_array = array_chunk($fruits, 2);
    // print_r($fruits);
    // print_r($chunked_array);
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr4 = array_merge($arr1,$arr2);
    // print_r($arr4);
    $a = ['yellow' , 'red', 'orange'];
    $b = ['pepper' , 'apple', 'pawpaw'];
    $c= array_combine($a,$b);
    // print_r($c);
    // $key = array_keys($c);
    $flip = array_flip($c);
    // print_r($c);
    $number = range(1,40);
    $newNumber = array_map(function($numbers){
        return "NUmber ${numbers}";
    },$number);
    $filt = array_filter($number, function($number3){
        return $number3 <= 10;
    },);

    $sum = array_reduce($number, fn($carry, $number4) =>
        $carry + $number4);
    var_dump($sum);
?>