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

$bmw = array(
    "model" => "x5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
);
$toyota = array(
    "model" => "camry",
    "speed" => "100",
    "doors" => "4",
    "year" => "2014"
);
$opel = array(
    "model" => "corsa",
    "speed" => "80",
    "doors" => "4",
    "year" => "2012"
);

$cars = array_merge_recursive($bmw, $toyota, $opel);

$length = count($cars);
for ($i = 0; $i < $length - 1; $i++) {
    if ($i == 0) {
        echo "CAR BMW<br>";
    } elseif ($i == 1) {
        echo "CAR TOYOTA<br>";
    } elseif ($i == 2) {
        echo "CAR OPEL<br>";
    }
    foreach ($cars as $car => $features) {
        echo "$car - $features[$i], ";
    }
    echo "<br>";
}
?>

</body>
</html>