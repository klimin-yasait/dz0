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

<?php

require_once("src/functions.php");

$myArray = array(
    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    "Aenean commodo ligula eget dolor. Aenean massa.",
    "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
    "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
    "Nulla consequat massa quis enim.",
    "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
    "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
    "Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.",
    "Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.",
    "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,"
);
$myBool = FALSE;
//task1($myArray, $myBool);

$a = '+';
$b = rand(0, 9);
$c = rand(0, 9);
$d = 2.3;
$e = rand(0, 9);
$f = rand(0, 9);

//task2($a, $b, $c, $d, $e, $f);

$y = rand(1, 8);
$x = rand(1, 8);

//task3($y, $x);

//task4();

$first = "Карл у Клары украл Кораллы";
$second = "Две бутылки лимонада";

//task5($first, $second);

$myfile = 'some.txt';
file_put_contents($myfile, 'Какой-нибудь текст');

//task6($myfile);

$smpl_xml=simplexml_load_file('data.xml');

task7($smpl_xml);

task8($smpl_xml);

task9($smpl_xml);

task10($smpl_xml);


?>

</body>
</html>