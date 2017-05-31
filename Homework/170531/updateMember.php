<?php
session_start();
include "../../sql.php";
if (!isset($_SESSION['id'])) header('Location: eric38.php');
$db = new pdo($dsn,$user,$passwd,$opt);
$id = $_SESSION['id'];
$account = $_GET['account'];
$passwd = $_GET['passwd'];
$realname = $_GET['realname'];
$sql = "update member set account=?,passwd=?,realname=? where id=?";
$db->prepare($sql)->execute([$account,$passwd,$realname,$id]);
header("Location: database.php");