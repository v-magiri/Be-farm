<?php

        if(isset($_POST["login"])){
                $username = $_POST["email"];
                $pass = $_POST["pwd"];

                require_once "dbconn.php";
                require_once "method.php";

            signin($conn,$username,$pass);
        }
        else{
            header("location: ../pages/signin.php");
            exit();
        }

