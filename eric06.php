<?php
//$score = rand(0, 100);
//echo $score . '<br>';
//if ($score >= 90) {
//    echo 'A';
//} else if ($score >= 80) {
//    echo 'B';
//} else if ($score >= 70) {
//    echo 'C';
//} else if ($score >= 60) {
//    echo 'D';
//} else {
//    echo 'E';
//}

$a = 10;
$b = 3;
if (--$a >= 10 && $b++ <= 3)
    echo "ex1：OK {$a}:{$b}";
else
    echo "ex1：XX {$a}:{$b}";
echo "<br>";
$c = 10;$d = 3;
if (--$c >= 10 & $d++ <= 3)
    echo "ex2：OK {$c}:{$d}";
else
    echo "ex2：XX {$c}:{$d}";




