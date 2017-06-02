<?php
include "sqlEric.php";
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "SELECT * FROM member";
$stmt = $pdo->prepare($sql);
$stmt ->execute();
echo "<table>";
while($row=$stmt->fetchObject()){


}
echo "</table>";