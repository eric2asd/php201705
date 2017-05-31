<?php
session_start();
$db = new mysqli('127.0.0.1', 'root', 'root', 'iii');
$_SESSION['db'] = $db;
if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $sql = "delete from member where id = {$delid}";
    $db->query($sql);
}

$sql = 'select * from member';
$rs = $db->query($sql);
?>

<a href="addMember.php">new</a>
<hr>
<table width="100%" border="1">
    <tr>
        <th>Id</th>
        <th>Account</th>
        <th>Password</th>
        <th>Real name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
    while ($row = $rs->fetch_object()) {
        echo '<tr>';
        echo "<td>{$row->id}</td> ";
        echo "<td>{$row->account}</td>";
        echo "<td>{$row->passwd}</td>";
        echo "<td>{$row->realname}</td>";
        echo "<td><a href='?delid={$row->id}'>Del</td>";
        echo "<td><a href='editMember.php?editid={$row->id}'>Edit</td>";
        echo "</tr>";
    }
    ?>

</table>