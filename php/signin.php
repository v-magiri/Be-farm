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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/signinform.css">
    <title>Be-Farm Login</title>
</head>
<body>
        <div class="header">
            <img src="../Images/cover.png" width="100px" height="100px" style="border-radius:50%;" alt="Be-farm">
            <h2><i class="fa fa-user"></i>  Login</h2>
        </div>
        <section class="form">
            <div class="login_container">   
                <div class="row">
                    <div class="col-form">
                        <form method="post" action="../Includes/signin.inc.php ">
                            <label for="email">Username:</label><br>
                            <input type="email" id="Email" required name="email"><br>
                            <label for="pwd">Password:</label><br>
                            <input type="password" id="pwd" required name="pwd"><br><br>
                            <p>Create Account? <a href="signup.php">Sign Up</a></p><br>
                            <button type="submit" name="login" class="submit"><i class="fas fa-sign-in-alt"></i>Log in</button>
                        </form><br>
                    </div>
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "wronglogin"){
                                echo "<p>Incorrect Log in details</p>";
                            }

                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-img">

                    </div>
                </div>
            </div>
        </section>
</body>
</html>