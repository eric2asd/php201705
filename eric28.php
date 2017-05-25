<?php

//$data = file("eric.txt");
//foreach ($data as $line){
//    echo "{$line}<br>";
//}
//$data = file_get_contents("eric.txt");
//echo $data;
$data = file("Book1.csv");
?>
<table width="100%" border="1">
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>f1</th>
        <th>f2</th>
    </tr>
    <?php
    foreach ($data as $line) {
        $fields = explode(',',$line);
        echo '<tr>';
        foreach ($fields as $field)
            echo "<td>{$field}</td>";
        echo '</tr>';
    }

    ?>


</table>


