<?php
if(isset($_GET["x"])){
$x = $_GET["x"];
$y = $_GET["y"];
$r= $x + $y ;
//echo "$x + $y= $r";
}

?>

<!--<form action="eric04.php">-->
<form>
    <input type="text" name="x" id="x" value="<?php echo $x ?>"/>
    <select>
        <option name="+" value="+">+</option>
        <option name="-" value="-">-</option>
        <option name="*" value="*">x</option>
        <option name="/" value="/">/</option>
    </select>
    <input type="text" name="y" id="y" value="<?php echo $y ?>"/>
<!--    <input type="button" value="=" onclick="cal()">-->
<!--    <span id="result"></span>-->
    <input type="submit" value="=" >
    <?php
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
