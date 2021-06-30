<?php
    $dbhost="localhost";
    $dbuser="root";
    $db_pass="";
    $db_name="be_farm";
    
    if(!$conn=mysqli_connect($dbhost,$dbuser,$db_pass,$db_name)){
        die("Connection Failed" .mysqli_connect_error()); 
    }