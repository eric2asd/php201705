<?php
//$db = mysqli_connect('127.0.0.1',
//    'root','root','iii') or die('server busy');

$db = new mysqli('127.0.0.1',
    'root', 'root', 'iii') or die('server busy');
$sql = 'insert into member (account,passwd,realname) values ("eric","123456","Eric")';
$sql = 'select * from member';
$result = $db->query($sql);
//$row = $result->fetch_object();
//echo $row->id . "<br>";
//echo $row->account . "<br>";
//echo $row->passwd . "<br>";
//echo '<hr>';
//$row = $result->fetch_object();
//echo $row->id . "<br>";
//echo $row->account . "<br>";
//echo $row->passwd . "<br>";
while($row = $result->fetch_object()){
    echo "{$row->id}:{$row->account}:{$row->passwd} <br>";
}