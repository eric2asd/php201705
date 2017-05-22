<?php
$a=array(1,2,3);
$b[]=$a;// $b[0] => array(1,2,3)
$b[]=array(1,2);
echo count($b);