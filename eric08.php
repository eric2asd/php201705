<?php

//$a=11;
//switch ($a){
//    case 1:
//        echo 'A';
//        break;
//    case '10':
//        echo 'B1';
//        break;
//    default:
//        echo 'D';
//    case 100:
//        echo 'C';
//        break;
//
//}

$month = rand(1, 12);
switch ($month) {
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        echo "{$month}月 31天";
        break;
    case 2:
        echo '2月 28天';
        break;
    case 4: case 6:case 9:case 11:
        echo "{$month}月 30天";
        break;
    default:
        echo '錯誤月份';
}