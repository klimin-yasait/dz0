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

$age = rand(0, 144);
if ($age >= 18 & $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age < 18 & $age >= 1) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}

?>

</body>
</html>