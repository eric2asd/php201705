<?php
if (isset($_GET["x"])) {
    $x = $_GET["x"];
    $y = $_GET["y"];
    $cal = $_GET["cal"];

    if ($cal == 0) {
        $r = $x + $y;
        $s0 = 'selected ="selected"';
    } else if ($cal == 1) {
        $r = $x - $y;
        $s1 = 'selected ="selected"';
    } else if ($cal == 2) {
        $r = $x * $y;
        $s2 = 'selected ="selected"';
    } else if ($cal == 3) {
        if ($y == 0) {
            $r = '除數不能為零';
        } else {
            $r = $x / $y;
            $a = $x % $y;
        }
            $s3 = 'selected ="selected"';

    }
//
}

?>

<!--<form action="eric04.php">-->
<form>
    <input type="text" name="x" id="x" value="<?php echo $x ?>"/>
    <select name="cal">
        <option value="0" <?php echo $s0 ?>>+</option>
        <option value="1" <?php echo $s1 ?>>-</option>
        <option value="2" <?php echo $s2 ?>>x</option>
        <option value="3" <?php echo $s3 ?>>/</option>
    </select>
    <input type="text" name="y" id="y" value="<?php echo $y ?>"/>
    <!--    <input type="button" value="=" onclick="cal()">-->
    <!--    <span id="result"></span>-->
    <input type="submit" value="=">
    <?php
    if ($cal == 3)
        if($y == 0){
        echo $r;
        }else{
        echo floor($r) . '......' . $a;
        }
    else
        echo $r;

    ?>
</form>


<!--<script>-->
<!--    function cal(){-->
<!--        var x =document.getElementById("x");-->
<!--        var y =document.getElementById("y");-->
<!--        var r = parseInt(x.value) + parseInt(y.value);-->
<!--        var result= document.getElementById("result");-->
<!--        result.innerHTML=r;-->
<!---->
<!--    }-->
<!--</script>-->
