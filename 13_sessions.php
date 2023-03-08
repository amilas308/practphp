<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if($username == 'abba' && $password == 'password'){
            $_SESSION['username'] = $username;
            header('Location: /RETURN/vex/dashboard.php');
        } else{
            echo 'Incorrect Login Details';
        }
    }


?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div><br>
    <input type="submit" value="Submit" name="submit">
</form>