<?php

        if(isset($_POST["login"])){
                $username = $_POST["email"];
                $pass = $_POST["pwd"];

                require_once "dbconn.php";
                require_once "method.php";

            expertsignin($conn,$username,$pass);
        }
        else{
            header("location: ../php/expert-signin.php");
            exit();
        }

