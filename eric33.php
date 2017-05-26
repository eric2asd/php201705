<?php
include "eric_api.php";
$myBike = new Bike();
$urBike = new Bike();
for ($i=0;$i<rand(1,9);$i++)
    $myBike->upSpeed(rand(1,3));
for ($i=0;$i<rand(1,9);$i++)
    $urBike->upSpeed(rand(1,3));
for ($i=0;$i<rand(1,2);$i++)
    $myBike->downSpeed();
for ($i=0;$i<rand(1,2);$i++)
    $urBike->upSpeed();

echo "My speed:{$myBike->getSpeed()}<br>";
echo "Ur speed:{$urBike->getSpeed()}<br>";
echo "<hr>";

$myScooter = new Scooter();
$myScooter ->upSpeed();

echo "myScooter speed = {$myScooter->getSpeed()}";
