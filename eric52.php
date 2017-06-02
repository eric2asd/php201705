<?php
include "sqlEric.php";
if (!isset($_GET['a'])) {
    echo "F1";
    die();
}
$account = $_GET['a'];
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "SELECT account FROM member WHERE account=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$account]);

if ($stmt->rowCount() > 0) {
    //exist
    echo "F2";
} else {
    //ok
    echo "OK";


}