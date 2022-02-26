<?php

$nameinput = $_POST['name'];
$lnameinput = $_POST['lastname'];
$inputi = $_POST['password2'];

$passWordregexi ="/^[A-Z]{1}[a-z]{2,}\d{3}$/";
$nameregexi = "/^[A-Z]{1}[a-z]{1,}$/";
$lnameregexi ="/^[A-Z]{1}[a-z]{1,}$/";

if(preg_match($nameregexi,$inputi) == false){
    header("location:register.php");
}else if(preg_match($lnameregexi,$lnameinput) == false){
    header("location:register.php");
}else if(preg_match($passWordregexi,$inputi) == false){
    header("location:register.php");
}else{
    header("location:index.php");
    }
?>