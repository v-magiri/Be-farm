<?php
     

     session_start();
     session_unset();
     session_destroy();

     header("location:../pages/expert-signin.php");
     exit();