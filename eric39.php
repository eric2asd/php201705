<?php
include "sql.php";
$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql="insert into member (account,passwd,realname) values (?,?,?)";
//$rs = $pdo ->query($sql);
//while ($row = $rs ->fetchObject()){
//    echo "{$row->id}:{$row->account}<br>";
//}
//$stmt = $pdo ->prepare($sql);
//$stmt ->execute();
$pdo->prepare($sql)->execute(['eric','1234','Ericasd']);