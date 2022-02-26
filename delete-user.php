<?php 

require_once 'Inserto.php';

if(isset($_GET['id'])){
    $emaili = $_GET['id'];
}
$useri = new Inserto;
$useri->delete($emaili);
?>