<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p><a href="#" onclick="history.back();">К оглавлению</a></p>

<?php

define("TOTAL", 80);
define("FELT_TIP_PEN", 23);
define("PENCIL", 40);

echo 'Дана задача: На школьной выставке ' . TOTAL . ' рисунков ' . FELT_TIP_PEN . ' из них выполнены
фломастерами, ' . PENCIL . ' карандашами, а остальные — красками. Сколько рисунков,
выполненные красками, на школьной выставке? <br>';

$result = (TOTAL - FELT_TIP_PEN - PENCIL);

echo 'Решение: ' . TOTAL . ' - ' . FELT_TIP_PEN . ' - ' . PENCIL . ' = ' . $result;
?>

</body>
</html>
