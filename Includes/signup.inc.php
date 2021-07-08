<?php

if(isset($_POST["register"])){
    $fname = $_POST['full_Name'];
    $email =$_POST['email_Address'];
    $pass = $_POST['pwd']; 
    $repeatpwd=$_POST['cpwd'];
    $phone_number = $_POST['phone'];
    $FarmerCategory = $_POST['farmerCat'];
    $County = $_POST['county'];

    require_once 'dbconn.php';
    require_once 'method.php';

    if(pwdmatch($pass,$repeatpwd)){
        header("location: ../Includes/signup.php?error=passworddon'tmatch");
        exit();
    }
    signup($conn,$fname,$email,$pass,$phone_number,$FarmerCategory,$County);
}
else{
    header("Location: ../php/signup.php");
    die;
}