<?php 

require_once 'ProduktetDatabase.php';

if(isset($_GET['id'])){
    $prod = $_GET['id'];
}
$pp = new ProduktetDatabase;
$pp->delete($prod);
?>