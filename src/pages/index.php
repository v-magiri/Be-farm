<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/default.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Be-Farm</title>

</head>
<body>
    <nav class="nav_bar">
        <a href="index.php"><img src="../Images/profile.png"></a>
        <div class="navlink" id="nav_link">
        <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="userlogin.html"><i class="fa fa-user"></i> Login</a></li>
                <li><a href="userreg.html"><i class="fa fa-user-plus"></i> Register</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <section class="header">
        <div class="txt">
            <h1>Be-Farm</h1>
            <p>Supporting farmers to produce high yields thorugh the use of modern and
                 environmental friendly farming practices</p>
            <a href="userreg.html" class="btnstr">Get Started</a>
        </div>

    </section>
    <section class="serv">
        <h3 class="serv-header">Services</h3>
        <div class="row">
            <div class="servtype">
                <h3>Agricultural Training</h3>
                <p>We offer mobile training materials on good Agricultural practices</p>
            </div>
            <div class="servtype">
                <h3>Marketing</h3>
                <p>We support farmers access market for their produce </p>
            </div>
            <div class="servtype">
                <h3>Farm Technology</h3>
                <p>We support farmers access quality planting materials and planting </p>
            </div>
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