<?php
//$n1=0=$n2=$n3=$n4$n5=$n6=0;
//
//for($i=0;$i<100;$i++){
//    $num=rand(1,6);
//    switch ($num){
//        case 1:$n1+=1;break;
//        case 2:$n2+=1;break;
//        case 3:$n3+=1;break;
//        case 4:$n4+=1;break;
//        case 5:
//            $n5+=1;
//            break;
//        case 6:
//            $n6+=1;
//            break;
//        default:
//    }
//}
//echo "point 1= {$n1}<br>";
//echo "point 2= {$n2}<br>";
//echo "point 3= {$n3}<br>";
//echo "point 4= {$n4}<br>";
//echo "point 5= {$n5}<br>";
//echo "point 6= {$n6}<br>";

$p = array(1 => 0, 0, 0, 0, 0, 0,);
for ($i = 0; $i < 100000; $i++) {
    $temp = rand(1,9);
    $p[$temp>=7?$temp-3:$temp]++;
}

for ($i = 1; $i <= 6; $i++)
    echo "point {$i}= {$p[$i]}<br>";

