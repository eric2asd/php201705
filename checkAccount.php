<?php
include "sqlEric.php";
session_start();
if (!isset($_REQUEST['account'])) header("Location: loginv2.php");

$pdo = new pdo($dsn,$user,$passwd,$opt);
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$sql = "SELECT * FROM member WHERE account=?";
$stmt = $pdo->prepare($sql);
$stmt ->execute([$account]);

if($stmt->rowCount()>0){
    $memberObj =$stmt->fetchObject();
    $dbpasswd = $memberObj->passwd ;
    if(password_verify($passwd,$dbpasswd)){
        $_SESSION['member'] = $memberObj;
        header("Location: mainv2.php");
    }else{
        //password error
        header("Location: loginv2.php");
    }
}else{
    //no account
    header("Location: loginv2.php");
}