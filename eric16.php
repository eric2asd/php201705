<?php
include 'eric_api.php';
echo fx(4) . '<br>';
sayHi("Eric");
sayHi("Brad","hello");

sayHello("eric","brad");
$number=Lotto();
foreach ($number as $n){
    echo $n.'<br>';
}
