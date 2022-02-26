<?php
session_start();
$_SESSION['aktiv']=false;
session_destroy();
header("location:register.php");
?>