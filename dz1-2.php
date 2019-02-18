<?php

define("TOTAL", 80);
define("FELT_TIP_PEN", 23);
define("PENCIL", 40);

echo 'Дана задача: На школьной выставке ' . TOTAL . ' рисунков ' . FELT_TIP_PEN . ' из них выполнены
фломастерами, ' . PENCIL . ' карандашами, а остальные — красками. Сколько рисунков,
выполненные красками, на школьной выставке? <br>';

$result = (TOTAL - FELT_TIP_PEN - PENCIL);

echo 'Решение: ' . TOTAL . ' - ' . FELT_TIP_PEN . ' - ' . PENCIL . ' = ' . $result;