<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email= $_POST['email'];
    $pass = $_POST['pwd'];
       echo "email is".$email." pass is ".$pass;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signinform.css">
    <title>Be-Farm Login</title>
</head>
<body>
    <div class="login_form">
        <div class="header">
            <img src="../Images/cover.png" width="200px" height="200px" style="border-radius:50%;" alt="Be-farm">
            <h2> Sign in</h2>
        </div>
        <div class="signinform">
            <form method="post" action="../Includes/signin.inc.php ">
                <label for="email">Username:</label><br>
                <input type="email" id="Email" required name="email"><br>
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" required name="pwd"><br><br>
                <p>Create Account <a href="signup.php">Sign Up</a></p><br>
                <button type="submit" value="Sign In" name="login">Sign in</button>

            </form><br>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "wronglogin"){
                        echo "<p>Incorrect Log in details</p>";
                    }

                }
        ?>
        </div>

    </div>
</body>
</html>