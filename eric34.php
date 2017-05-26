<?php
include 'eric_api.php';
$myBike = new Bike();
echo "<br>";
$myScooter = new Scooter();

if (TWID::checkId('A123456789') == 1) {
//if (TWID('A123456789') == 1) {
    $myId = new TWID('A123456789');
    $myId2 = new TWID('A123456789');
    $myId3 = new TWID('A123456789');
    $myId4 = new TWID('A123456789');
    echo ($myId->getGender()) ? 'male' : 'female';
}
echo TWID::$counter;