<?php
    require_once "../Includes/method.php";
    require_once "../Includes/dbconn.php";

    session_start();
    if(isset($_SESSION["farmer"]) && $_SESSION['farmer'] == true){
    }
    else{
        header("location: signin.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Credit</title>
</head>
<body>
<div class="nav_bar">
        <nav>
            <a href="home.php"><img src="../Images/default.png" alt="Befarm" width="50px" style="border-radius:50%"></a>
            <div class="nav-link" id="nav_link">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Services<i class="fa fa-caret-down"></i></a>
                <div class="dropctn">
                    <a href="#">Training</a>
                    <a href="#">Credit</a>
                </div>
            </li>
            <li><a href="#">Market</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)">Farm Technologies<i class="fa fa-caret-down"></i></a>
                <div class="dropctn">
                    <a href="#">Planting Material</a>
                    <a href="#">Farm Inputs</a>
                    <a href="#">Farm Tools</a>
                </div>
            </li>
            <li><a href="#">Ask an Expert</a></li>
            <li><a href="../Includes/logout.inc.php"><i class="fas fa-sign-out-alt"><span class="title">Log out</span></i></i></a></li> 
            </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </div>
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