<?php
class Bike{
    private $speed;
    function upSpeed($gear=1){
        $this ->speed = ($this->speed<1)?1:($this->speed)*1.2*$gear;
    }
    function downSpeed(){
        $this ->speed = ($this->speed<1)?0:($this->speed)*0.6;
    }
    function getSpeed(){
        return $this->speed;
    }
}

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

