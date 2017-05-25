<?php
$img = imagecreatefromjpeg('./pokemon.jpg');
$blue = imagecolorallocate($img , 0,0,255);
imagettftext ( $img , 24 ,-30  , 0 , 50
    ,$blue,"fireflysung.ttf", "皮卡丘" );

header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);