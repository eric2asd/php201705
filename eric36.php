<?php
include 'eric_api.php';
session_start();
if(!isset($_SESSION['cart'])) header('Location: eric35.php');
$cartObj = $_SESSION['cart'];
$var1 = $_SESSION['var1'];
echo 'Page2<hr>';
echo $var1."<br>";
$cartObj ->addItem('P001',3);
$cartObj ->addItem('P002',5);
$list = $cartObj->getList();
foreach ($list as $pid =>$qty){
    echo "{$pid} : {$qty} <br>";
}
?>
<a href="logout.php">Logout</a>
