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
    <title>Befarm</title>
</head>
<body>
    <div class="nav_bar">
        <nav>
            <a href="home.php"><img src="../Images/default.png" alt="Befarm" width="50px" style="border-radius:50%"></a>
            <div class="nav-link" id="nav_link">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Market</a></li>
            <li><a href="#">Farm Technologies</a></li>
            <li><a href="#">Ask an Expert</a></li>
            <li><a href="../Includes/logout.inc.php">Log out</a></li> 
            </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </div>
    <section class="header">     
    </section>
    <!-- <section>
    <h1>Adapting to climate Change</h1>
    <div class="csc">
    <div class="cscitm">
    <h3></h3>
    </div>
    </div>
    </section>  -->
    <section class="traing">
    <h1>Services</h1>
    <div class="training">
    <div class="traing_type">
    <h3>Farm technology training</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio animi sapiente similique cum unde, facilis maxime, optio id saepe eaque molestiae! Voluptatum ad possimus accusamus cumque expedita iste at fuga!</p>  
    </div>
    <div class="traing_type">
    <h3>Farm Management training</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis porro alias inventore explicabo. Alias provident tenetur architecto officia reiciendis a ab vel, distinctio sit dolor, ea velit amet repellat eligendi?</p>  
    </div>
    <div class="traing_type">
    <h3>Cultivation training</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis porro alias inventore explicabo. Alias provident tenetur architecto officia reiciendis a ab vel, distinctio sit dolor, ea velit amet repellat eligendi?</p>  
    </div>
    </div>

    </section>
    <!-- footer -->
    <section class="footer">
    
    <div class="ftr">
    <address style="align-self:flex-start;">
            &copy Befarm
    </address>
        <div class="ftritm">
            <a href="#"><i class="fab fa-twitter"></i> Be-farm </a>
            
        </div>
        <div class="ftritm">
            <a href="#"><i class="fab fa-facebook"></i> Be-farm  </a>
            
        </div>
        <div class="ftritm">
            <a href="mailto:befarm@gmail.com"><i class="fas fa-envelope-square"></i> Mail Us </a>
        </div>
       
    </div>
    </section>
    <!-- // javascript code for showing and closing the menu for small screnn devices -->
    <script>
    var nav_link=document.getElementById("nav_link");
    function showMenu(){
        nav_link.style.right='0';
    }
    function hideMenu(){
        nav_link.style.right='-200px';
    }

    </script>
</body>
</html>