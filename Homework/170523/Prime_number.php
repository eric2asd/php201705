<table width="100%" border="1">
    <tr>
        <?php
        $total = 100;
        for ($i = 1; $i <= $total; $i++) {
            $n[$i] = $i;
        }

        for ($i = 1; $i <= $total; $i++) {
            if ($i % 10 == 1) {
                echo '<tr>';
            }
            if (prime_number($i))
                echo "<td style='background-color: yellow'>{$n[$i]}</td>";
            else
                echo "<td>{$n[$i]}</td>";
            if ($i % 10 == 0) {
                echo '</tr>';
            }
        }


        function prime_number(int $num)
        {
            $prime = false;
            if ($num == 2 || $num == 3) {
                $prime = true;
            } elseif ($num % 2 == 0) {

            } else {
                for ($i = 3; $i <= (int)($num / 2); $i += 2) {
                    if ($num % $i == 0) {
                        $prime = false;
                        break;
                    }
                    $prime = true;
                }
            }
            return $prime;
        }

        ?>


    </tr>


</table>
