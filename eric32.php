<?php
$imgSrc = imagecreatefromjpeg(
    "./imgh400.jpg" );
$imgDst = imagecreate(200, 200);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
if ($imgSW>$imgSH){
    $imgDW = 200;
    $imgDH = $imgSH * 200 / $imgSW;
    $dstY=(200-$imgSH)/2;
    $dstX=0;
}else{
    $imgDH = 200;
    $imgDW = $imgSW * 200 / $imgSH;
    $dstX=(200-$imgSW)/2;
    $dstY=0;
}
imagecopyresized (
    $imgDst , $imgSrc,
    $dstX , $dstY,
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
// 3
header('Content-Type: image/jpeg');
imagejpeg($imgDst);
// 4
imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );