<?php
if(!isset($_GET['rate'])) exit;

$rate=$_GET['rate'];

$img = imagecreate(400,40);
$yellow = imagecolorallocate($img, 255, 255, 0);
$red = imagecolorallocate($img , 255,0,0);
$black = imagecolorallocate($img , 0,0,0);
//imagefill($img,0,0,$yellow);
imagefilledrectangle ( $img , 0 , 0, 400, 40 , $yellow);
imagefilledrectangle ( $img , 0 , 0, $rate*4, 40 , $red );
header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);
?>

