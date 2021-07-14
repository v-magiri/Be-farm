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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/farmerquery.css" type="text/css">
    <title>Farmer Inquires</title>
</head>
<body>
    <div class="navbar">
    <nav>
            <a href="expert-home.php"><img src="../Images/default.png" style="width:50px; border-radius:50%;" ></a>
            <div class="navlinks">
                <ul>
                    <li><a href="expert-home.php">Home</a></li>
                    <li><a href="inquires.php">Inquires</a></li>
                    <li><a href="../Includes/exlogout.php"><i class="fas fa-sign-out-alt "><span class="title">Log out</span></i></a></li>

                </ul>
            </div>
        </nav>
        
    </div>
    <section class="header">

    </section>
    <section class="main">
        <div class="sidebar">

        </div>
        <div class="mainbody">

        </div>

    </section>
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