<?php include 'inc/header.php'; ?>
<?php;
    $name = $email = $feedback = "";
    $nameErr = $emailErr = $feedbackErr = "";
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $nameErr = 'Enter a valid name';
        } else{
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if(empty($_POST['email'])){
            $emailErr = 'Enter a valid error';
        } else {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_EMAIL);
        }
        if(empty($_POST['feedback'])){
            $feedbackErr = 'Enter some feedback you motherfucker';
        } else{
            $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

    } 
    
    echo $name;
    echo $nameErr;
?>
                <div>
                    <div class="logo-brand">
                        <img src="./img/logo.png" alt="logo" height="200">
                    </div>
                    <div class="content">
                        <h1>Feedback</h1>
                        <p>Leave Feedback for Traversy Media</p>
                    </div>
                </div>
                <div class="uptill">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <label for="name">Name</label><br>
                        <input type="text"  name="name" id="name" placeholder="Enter your name"><br>
                        <label for="email">Email</label><br>
                        <input type="email"  name="email" id="email" placeholder="someone@gmail.com"><br>
                        <label for="feedback">Feedback</label><br>
                        <input type="text"  name="feedback" id="feedback" placeholder="Enter your feedback"><br>
                        <input type="submit" class="sub" name="submit" value="Send">
                    </form>
                </div>
<?php include 'inc/footer.php'; ?>

