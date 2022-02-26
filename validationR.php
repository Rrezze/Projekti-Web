<?php
session_start();
require 'dbData.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    
    if(validateEmptyData($email,$password)){
        header("location:register.php");
    }
    else if(validateData($firstname,$lastname,$password)){
        header("location:index.php");
    }
    else{
        header("location:login.php");
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
function validateData($firstname,$password){
    global $allUsers;
    foreach($allUsers as $user){
        if($user['firstname'] == $firstname && $user['password'] == $password && $user['lastname'] == $lastname){
            return true;
        }
    }
    return false;
}
?>
