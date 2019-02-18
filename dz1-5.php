<?php

$bmw = array(
    "model" => "x5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015",
);
$toyota = array(
    "model" => "camry",
    "speed" => "100",
    "doors" => "4",
    "year" => "2014",
);
$opel = array(
    "model" => "corsa",
    "speed" => "80",
    "doors" => "4",
    "year" => "2012",
);

$cars = array_merge_recursive($bmw, $toyota, $opel);
print_r($cars);

echo '<br><br>CAR BMW<br>' . $cars['model'][0] . ' ' . $cars['speed'][0] . ' ' . $cars['doors'][0] . ' ' . $cars['year'][0];
echo '<br><br>';
echo '<br>CAR TOYOTA<br>' . $cars['model'][1] . ' ' . $cars['speed'][1] . ' ' . $cars['doors'][1] . ' ' . $cars['year'][1];
echo '<br><br>';
echo '<br>CAR OPEL<br>' . $cars['model'][2] . ' ' . $cars['speed'][2] . ' ' . $cars['doors'][2] . ' ' . $cars['year'][2];
