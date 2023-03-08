<?php
setcookie('name', 'bilal', time() + 86400);

if(isset($_COOKIE['name'])){
    echo 'Hello ' .  $_COOKIE['name'];
}

?>