
<table width="100%" border="1" >
    <tr>
        <?php
            for ($i=1;$i<=100;$i++){
                $n[$i]=$i;
            }

            for($i=1;$i<=100;$i++){
                if($i%10==1){
                    echo '<tr>';
                }
                echo "<td>{$n[$i]}</td>";
                if($i%10==0){
                    echo '</tr>';
                }
            }


        function prime_number(int $num){
                $prime=false;
                if($num==2||$num==3){
                    $prime=true;
                }else if ()
        }
            ?>


    </tr>


</table>
