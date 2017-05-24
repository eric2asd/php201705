<?php
date_default_timezone_set("Asia/Taipei");
$dirname = '.';
if (isset($_GET['dirname'])) {
    $dirname = $_GET['dirname'];
    if (isset($_GET['filename'])) {
        $delfile = $_GET['filename'];
        unlink("{$dirname}/{$delfile}");
    }
}

if (isset($_FILES['upload'])) {
    $upload = $_FILES['upload'];
//        var_dump($upload);
    foreach ($upload['error'] as $index => $error) {
        if ($error == 0) {
            copy($upload['tmp_name'][$index], "{$dirname}/{$upload['name'][$index]}");
        }
    }
}
?>
<form>
    <input type="text" name="dirname">
    <input type="submit" value="cddir"><br>
</form>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="upload[]"/><br>
    <input type="file" name="upload[]"/><br>
    <input type="file" name="upload[]"/><br>
    <input type="file" name="upload[]"/><br>
    <input type="submit" value="Uplaod"/>

</form>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
    </tr>
    <?php
    //$fp= opendir("d:\\test1");
    //if($fp){
    //    echo 'OK';
    //}else{
    //    echo 'XX';
    //}
    //echo realpath("./");

    $fp = @opendir($dirname) or die('XX');
    while ($file = readdir($fp)) {
        echo '<tr>';
        echo "<td>{$file}</td>";
        $type = "";
        if (is_dir("{$dirname}/{$file}")) {
            $type = "Dir";
        } elseif (is_file("{$dirname}/{$file}")) {
            $type = "File";
        }
        echo "<td>{$type}</td>";
        echo "<td>" . filesize("{$dirname}/{$file}") . "</td>";
        echo "<td>" . date('Y-m-d H:i:s', filemtime("{$dirname}/{$file}")) . "</td>";
        echo "<td><a onclick=\"return confirm('del?')\" href=" . "?dirname={$dirname}&filename={$file}" . ">Delete</a></td>";
        echo '</tr>';

    }
    ?>

</table><br>
