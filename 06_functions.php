<?php
    function registerUser($email){
        echo $email . ' registered';
    }
    // registerUser('bilal');
    function sum($n1, $n2){
        return $n1 + $n2;
    }
    $result = sum(4,6);
    // echo  $result;

    $multiple = function($n3, $n4){
        return $n3 * $n4;
    };
    // echo $multiple(10,5);
    $multiple = fn($n3, $n4) =>  $n3 * $n4;
    echo $multiple(9,9);
?>