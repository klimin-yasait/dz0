<?php

echo '<table border=1>';

for ($i = 1; $i <= 10; $i++) {

    $k = $i;
    $l = 1;
    $m = 2;

    echo '<tr>';

    while ($l <= 10) {
        if (($i % 2) == 0 & ($l % 2) == 0) {
            echo '<td>(' . $l++ * $i . ')</td>';
            $m++;
        } elseif (($i % 2) != 0 & ($l % 2) != 0) {
            echo '<td>[' . $l++ * $i . ']</td>';
            $m++;
        } else {
            echo '<td>' . $l++ * $i . '</td>';
            $m++;
        }
    }

    echo '</tr>';

};
echo '</table>';
