<?php
    require_once "../Includes/method.php";
    require_once "../Includes/dbconn.php";

    session_start();
    if(isset($_SESSION["expert"]) && $_SESSION['expert'] == true){
    }
    else{
        header("location: expert-signin.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/experthome.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be-Farm</title>
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar">
        <nav>
            <a href="expert-home.php"><img src="../Images/default.png" style="width:50px; border-radius:50%;" ></a>
            <div class="navlinks">
                <ul>
                    <li><a href="expert-home.php">Home</a></li>
                    <li><a href="">Inquires</a></li>
                    <li><a href="" title="Logout"><i class="fas fa-sign-out-alt"></i></a></li>

                </ul>
            </div>
        </nav>
        
    </div>

    <!-- footer -->
    <section class="footer">
            <div class="rowftr">
                <div class="ftritm">
                    <p>&copy Be-Farm</p>
                </div>
                <div class="ftritm">
                    <p><i class="fab fa-facebook"></i> Be-Farm</p>
                </div>
                <div class="ftritm">
                    <p><i class="fab fa-twitter"></i> @Be-farm</p>
                </div>
                <div class="ftritm">
                    <p> <a href="mailto:befarm@gmail.com"><i class="fas fa-envelope-square"></i> Mail Us </a></p>
                </div>
            </div>
    </section>
</body>
</html>