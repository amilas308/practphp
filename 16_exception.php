<?php
    function invers($x){
        if(!$x){
            throw new Exception('Exception caught');
        }
        return 1/$x;
    }
    try{
        echo invers(10);
        echo invers(0);
        echo invers(0);
        echo invers(0);
        echo invers(0);
        echo invers(0);
    } catch(Exception $e){
        echo 'Caught exception', $e->getMessage(), ' ';
    }





?>