
<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/signupform.css" type="text/css">
        <title>Be-Farm Registration</title>
    </head>
    <body>
                    <div class="Header">
                        <img src="../Images/default.png" width="100px" height="100px" alt="Be-farm logo" style="border-radius:50%;">
                        <h3 text-align="center">Sign up</h3><br>
                    </div>
                    <section class="form">
                        <div class="reg_container">
                            <div class="row">                 
                                <div class="col-reg">
                                    <form method="post" action="../Includes/expertsignup.inc.php">
                                        <label for="fname">Full Name:</label><br>
                                        <input type="text" id="fname" name="full_Name" required placeholder="John Doe"> <br>                      
                                        <label for="email">Email Address:</label><br>
                                        <input type="email" id="email" name="email_Address" required  placeholder="someone@example.com"><br>
                                        <label for="pwd">Password:</label><br>
                                        <input type="password" id="pwd" name="pwd" required><br>
                                        <label type="cpwd">Confirm Password:</label><br>
                                        <input type="password" id="cpwd" required name="cpwd"><br>
                                        <label for="phone">Phone Number:</label><br>
                                        <input type="text" id="phone" name="phone" required><br>
                                        <label for="County">Location:</label><br>
                                        <select type="text" id="county" name="county" required>
                                            <option value="Nyeri">Nyeri</option>
                                            <option value="Nyandarua">Nyandarua</option>
                                            <option value="Kiambu">Kiambu</option>
                                            <option value="Kirinyanga">Kirinyanga</option>
                                            <option value="Nairobi">Nairobi</option>
                                            <option value="Nakuru">Nakuru</option>
                                            <option value="Muranga">Muranga</option>
                                            <option value="Meru">Meru</option>
                                            <option value="Embu">Embu</option>
                                            <option value="Machakos">Machakos</option>
                                            <option value="Tharaka-nithi">Tharakanithi</option>
                                            <option value="Kisii">Kisii</option>
                                            <option value="Kisumu">Kisumu</option>
                                        </select><br><br>
                                        <p>Already have an Account?<a href="expert-signin.php">Sign in</a></p><br>
                                        <button type="submit" name="register" class="submit">Signup</button>
                                    </form>
                                </div>
                            
                                <?php
                                    if(isset($_GET["error"])){
                                        if($_GET["error"] == "passworddon'tmatch"){
                                            echo "<p>Passwords don't match</p>";
                                        }
                                        else if ($_GET["error"]== "stmtfailed"){
                                                echo "<p>Please try again</p>";
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