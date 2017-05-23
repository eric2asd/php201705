<?php
$n=4;
$endn=$n-1;
for($i=0;$i<$n;$i++) $r[]=$i;

for($i=$endn;$i>=0;$i--){
$rand=rand(0,$i);
$temp=$r[$i];
$r[$i]=$r[$rand];
$r[$rand]=$temp;
echo $r[$i].'<br>';
}
//$rand=rand(0,4);
//$temp=$r[4];
//$r[4]=$r[$rand];
//$r[$rand]=$temp;
//echo $r[4].'<br>';
//
//$rand=rand(0,3);
//$temp=$r[3];
//$r[3]=$r[$rand];
//$r[$rand]=$temp;
//echo $r[3].'<br>';
//
//$rand=rand(0,2);
//$temp=$r[2];
//$r[2]=$r[$rand];
//$r[$rand]=$temp;
//echo $r[2].'<br>';
//
//$rand=rand(0,1);
//$temp=$r[1];
//$r[1]=$r[$rand];
//$r[$rand]=$temp;
//
//echo $r[1].'<br>';
//echo $r[0];

