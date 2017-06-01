<?php
include "sql2.php";
session_start();
if(!$_SESSION['member']) header('Location: login.php');

$memberObj=$_SESSION['member'];
$sql = "select * from mountain";
$pdo = new pdo($dsn,$user,$passwd,$opt);
$rs = $pdo->prepare($sql);
$rs ->execute();
?>
Hello <?php echo $memberObj->realname; ?>
<br>
<hr>
<table width="100%" border="1">
    <tr>
        <th>number</th>
        <th>Name</th>
        <th>level</th>
        <th>manager</th>
        <th>entrance</th>
    </tr>
    <?php
    while ($row = $rs->fetchObject()) {
        echo '<tr>';
        echo "<td>{$row->mnumber}</td> ";
        echo "<td>{$row->mname}</td>";
        echo "<td>{$row->mlevel}</td>";
        echo "<td>{$row->manager}</td>";
        echo "<td>{$row->entra}</td>";
        echo "</tr>";
    }
    ?>

</table>

<a href="logout.php">logout</a>
