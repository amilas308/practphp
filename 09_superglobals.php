<?php
// var_dump($_SERVER);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']?></li>
        <li>Host: <?php echo $_SERVER['DOCUMENT_ROOT']?></li>
        <li>Host: <?php echo $_SERVER['REQUEST_URI']?></li>
        <li>Host: <?php echo $_SERVER['SERVER_NAME']?></li>
        <li>Host: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
        <li>Host: <?php echo $_SERVER['SERVER_PORT']?></li>
        <li>Host: <?php echo $_SERVER['HTTP_USER_AGENT']?></li>
        <li>Host: <?php echo $_SERVER['PHP_SELF']?></li>
        <li>Host: <?php echo $_SERVER['REMOTE_PORT']?></li>
        <li>Host: <?php echo $_SERVER['REMOTE_ADDR']?></li>
    </ul>
</body>
</html>