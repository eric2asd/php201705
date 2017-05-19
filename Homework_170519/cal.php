<?php
if (isset($_GET["x"])) {
    $x = $_GET["x"];
    $y = $_GET["y"];
    $cal = $_GET["cal"];
    $r = 0;
    $a = 0;
    if($cal==0){
        $r = $x + $y;
    }else if($cal==1){
        $r = $x - $y;
    }else if($cal==2){
        $r = $x * $y;
    }else if($cal==3){
        $r = $x / $y;
        $a = $x % $y;
    }

//
}

?>

<!--<form action="eric04.php">-->
<form>
    <input type="text" name="x" id="x" value="<?php echo $x ?>"/>
    <select name="cal">
        <option value="0">+</option>
        <option value="1">-</option>
        <option value="2">x</option>
        <option value="3">/</option>
    </select>
    <input type="text" name="y" id="y" value="<?php echo $y ?>"/>
    <!--    <input type="button" value="=" onclick="cal()">-->
    <!--    <span id="result"></span>-->
    <input type="submit" value="=">
    <?php
    if($cal==3)
        echo floor($r).'......'.$a;
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
