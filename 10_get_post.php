<?php
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}


?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=john&age=23">Click</a>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="">Name: </label>
        <input type="text" name="name" placeholder="name">
    </div>
    <div>
        <label for="">Age: </label>
        <input type="text" name="age" placeholder="age">
    </div>
    <input value="Submit"  type="submit" name="submit">
</form>