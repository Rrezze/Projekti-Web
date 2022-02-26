<?php
session_start();
require 'inserto.php';

if(isset($_POST['btn'])){
    $email = $_POST['emaill'];
    $password = $_POST['passi'];
    
    if(validateEmptyData($email,$password)){
        header("location:register.php");
    }
    else if(validateData($email,$password)){
        if($_SESSION['roli']==1){
            header("location:dashboard.php");
        }else{
            header("location:index.php");
        }
    }
    else{
        header("location:register.php");
    }
}
function validateEmptyData($email,$password){
    if(empty($email) || empty($password)){
        return true;
    }
    else{
        return false;
    }
}
function validateData($email,$password){
    $useri = new Inserto;
    $allUsers = $useri->readData();
    foreach($allUsers as $useret){
        if($useret['email'] == $email && $useret['upassword'] == $password){
            $_SESSION['roli'] = $useret['roli'];
            $_SESSION['aktiv']=true;
            return true;
        }
    }
    return false;
}
?>