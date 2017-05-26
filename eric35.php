<?php
include 'eric_api.php';
session_start();
$memberObj=new member('A123456789');
$cartObj = new cart($memberObj);
$var1 = 10;
$_SESSION['cart']=$cartObj;
$_SESSION['var1']=$var1;
$var1++;
//echo $cartObj ->getMember() -> twID -> getTWID();
//echo '<hr>';
//echo $memberObj->twID->getTWID();
$cartObj ->addItem('P001',3);
$cartObj ->addItem('P002',5);
$list = $cartObj->getList();
foreach ($list as $pid =>$qty){
    echo "{$pid} : {$qty} <br>";
}
?>
<hr>
<a href="eric36.php">NEXT</a>
