<?php
    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload']['name'])){
            // print_r($_FILES);
            $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
            $file_name = $_FILES['upload']['name'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $file_size = $_FILES['upload']['size'];
            $file_path = $_FILES['upload']['full_path'];
            $target_dir = "uploads/${file_name}";
            // echo $file_path;
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 4000000){
                    move_uploaded_file($file_tmp, $target_dir);
            $message = '<p style="color: green;">File uploaded sucessfully</p>';
                } else{
            $message = '<p style="color: brown;">File is too large</p>';

                }
            } else{
            $message = '<p style="color: yellow;">Invalid file type</p>';
            }
        } else{
            $message = '<p style="color: red;">Choose a file</p>';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <?php echo $message ?? null ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="choose">Choose an image file</label>
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>