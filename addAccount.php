<?php
include "sqlEric.php";
if (!isset($_REQUEST['account'])) header("Location: addMemberV2.php");

$pdo = new pdo($dsn,$user,$passwd,$opt);
$account = $_REQUEST['account'];
$passwd = password_hash($_REQUEST['passwd'],PASSWORD_DEFAULT);
$rname = $_REQUEST['rname'];
$sql = "INSERT INTO member (account,passwd,rname) VALUES (?,?,?)";
$stmt = $pdo ->prepare($sql);
$stmt ->execute([$account,$passwd,$rname]);
header("Location: loginv2.php");