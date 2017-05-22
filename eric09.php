<?php
//for($i=0;$i<10;$i++){
//    echo $i.'<br>';
//}
$i=0;
for(test1();$i<15;test2()){
    echo $i++.'<br>';
}

function test1(){
    echo 'eric<br>';
}
function test2(){
    echo '--------<br>';
}