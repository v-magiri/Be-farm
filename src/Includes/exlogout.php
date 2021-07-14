<?php
     

     session_start();
     session_unset();
     session_destroy();

     header("location:../php/expert-signin.php");
     exit();