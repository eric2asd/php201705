<?php
include "../../sql.php";
if (!isset($_GET['editid'])) header("Location: database.php");
$db = new pdo($dsn,$user,$passwd,$opt);
$editid = $_GET['editid'];
$_SESSION['id'] = $editid;
$sql = "select * from member where id=?";
$db = new pdo($dsn,$user,$passwd,$opt);
$rs = $db->prepare($sql);
$rs->execute([$editid]);
$editObj = $rs->fetchObject();
?>
<form action = 'updateMember.php'>
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"
                       value="<?php echo $editObj->account; ?>"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"
                       value="<?php echo $editObj->passwd; ?>"></td>
        </tr>
        <tr>
            <th>Real Name</th>
            <td><input type="text" name="realname"
                       value="<?php echo $editObj->realname; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="upddate"></td>
        </tr>
    </table>
</form>