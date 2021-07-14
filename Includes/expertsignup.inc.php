<?php

if(isset($_POST["register"])){
    $fname = $_POST['full_Name'];
    $email =$_POST['email_Address'];
    $pass = $_POST['pwd']; 
    $repeatpwd=$_POST['cpwd'];
    $phone_number = $_POST['phone'];
    $County = $_POST['county'];

    require_once 'dbconn.php';
    require_once 'method.php';

    if(pwdmatch($pass,$repeatpwd)){
        header("location: ../php/expert-signup.php?error=passworddon'tmatch");
        exit();
    }
    expertreg($conn,$fname,$email,$pass,$phone_number,$County);
}
else{
    header("Location: ../php/expert-signup.php");
    die;
}