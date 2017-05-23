<?php
function fx($x){
    $r = 2*$x + 1;
    return $r ;
}

function sayHi($who,$pre="Hi"){
    echo "{$pre},{$who}<br>";
}

function sayHello(){
    $names = func_get_args();
    foreach($names as $name){
        echo "Hello,{$name}<br>";
    }
}


function TWIdCheck($twid){
    $ret=0; //格式錯誤
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid)) {
        $n12s = substr($twid, 0, 1);
        // echo $n12s;
        $letter = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letter, $n12s) + 10;
        //echo $n12;
        $n1 = substr($n12, 0, 1);
        $n2 = substr($n12, 1, 1);
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);

        $sum = $n1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 + $n11;

        if ($sum % 10 == 0) {
            $ret=1;
        } else {
            $ret=-1;
        }

    }
    return $ret;
}

function Lotto(){
    $lottoballs=range(1,49);
    shuffle($lottoballs);
    for($i=0;$i<6;$i++){
        $lot[$i]=$lottoballs[$i];
    }
    sort($lot);
    return $lot;
}