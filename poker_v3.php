<?php

$poker = range(0, 51);
shuffle($poker);
//foreach ($poker as $card) {
//    echo $card . '<br>';
//}
//echo '<hr>';
foreach ($poker as $i => $value) {
    $player[$i % 4][(int)($i / 4)] = $value;
}
//foreach ($player as $i => $cards) {
//    echo "player{$i}<br>";
//    foreach ($player[$i] as $card) {
//        echo "{$card} <br>";
//    }
//    echo '<hr>';
//}
?>

<table border="1" width="100%">


    <?php
    $suit = array('<font color="black" size="5">&spadesuit;</font>',
        '<font color="red" size="5">&heartsuit;</font>',
        '<font color="red" size="5">&diamondsuit;</font>',
        '<font color="black" size="5">&clubsuit;</font>');
    $value = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach ($player as $i => $sb) {
        echo "<tr> <td>player{$i}</td>";
        sort($sb);
        foreach ($sb as $card) {
               echo "<td width='7%'>{$suit[(int)($card/13)]}{$value[$card%13]}</td>";
                  }
        }
        echo "</tr>";

    ?>
</table>
