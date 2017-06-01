<?php
include "sql2.php";
$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql="insert into mountain (mnumber,mname,mlevel,manager,entra) values (?,?,?,?,?)";

$json = file_get_contents("http://data.coa.gov.tw/Service/OpenData/DataFileService.aspx?UnitId=102");
$root = json_decode($json);
//var_dump($root);
foreach ($root as $row){
    $mnumber = $row->number;
    $mname = $row->name;
    $mlevel = $row->level;
    $manager = $row->manager;
    $entra = $row->entrance;
    $pdo->prepare($sql)->execute([$mnumber,$mname,$mlevel,$manager,$entra]);
}










//$json = '{
//            "id":"123",
//            "name": "brad",
//            "lang": [
//                {"name":"Java",
//                 "level": "1"
//                },
//                {"name":"PHP",
//                 "level": "2"
//                },
//                {"name":"Android",
//                 "level": "3"
//                },
//                {"name":"iOS",
//                 "level": "4"
//                }
//            ]}';
//        $root = json_decode($json);
//        echo "{$root->lang[1]->name}:{$root->lang[1]->level}";