<?php
include "../../sql.php";

    if(isset($_GET['account'])){
        $db = new pdo($dsn,$user,$passwd,$opt);
        $account = $_GET['account'];
        $passwd = $_GET['passwd'];
        $realname = $_GET['realname'];
        $sql ="insert into member (account,passwd,realname) values (?,?,?)";
        $db->prepare($sql)->execute([$account,$passwd,$realname]);
        header("Location:database.php");
    }

?>

<form>
    <table border="1" >
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <th>Real name</th>
            <td><input type="text" name="realname"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="create"></td>
        </tr>
    </table>
</form>