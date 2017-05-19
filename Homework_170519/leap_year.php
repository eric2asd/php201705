<?php
$y = $_GET["year"];
if (isset($y)) {
    if ($y % 4 == 0) {
        if ($y % 100 == 0) {
            if ($y % 400 == 0) {
                $result = "{$y}年是閏年";
            } else {
                $result = "{$y}年不是閏年";
            }
        } else {
            $result = "{$y}年是閏年";
        }
    } else {
        $result = "{$y}年不是閏年";
    }
}

?>

<form>
輸入年份：
    <input type="text" name="year"/>
    <input type="submit" value="查詢"/>
    <br>
    <?php echo $result ?>
</form>