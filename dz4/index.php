<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<form action="index.php" method="post">
    <select name="tariff">
        <option value="tariff_1" selected>Базовый тариф</option>
        <option value="tariff_2">Почасовой</option>
        <option value="tariff_3">Суточный</option>
        <option value="tariff_4">Студенческий</option>
    </select>
    <input type="text" name="km" placeholder="Километры" value="">
    <input type="text" name="time" placeholder="Минуты" value="">
    <input type="text" name="age" placeholder="Возраст" value="">
    <input type="submit" value="Отправить">
</form>

<?php

$tariff = $_POST["tariff"];
$km = $_POST["km"];
$time = $_POST["time"];
$age = $_POST["age"];

?>

<div class="tariff-grid">

    <div class="tarif-item tarif-item_attention">
        <?php
        if ($age) {
            if ($age < 18 || $age > 65) {
                echo "<div class='allert-red'>Водитель не подходит по возрасту!</div>";
            } elseif ($age >= 18 || $age <= 65) {
                echo "<div class='allert-green'>Возрастной ценз пройден</div>";
            }
        } else {
            echo "<div class='allert-gray'>Возраст не был введен</div>";
        }
        ?>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф базовый</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">цена за 1 км = 10 рублей</li>
            <li class="tarif-item-option">цена за 1 минуту = 3 рубля</li>
            <li class="itog"><?php ?></li>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф почасовой</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">Цена за 1 км = 0</li>
            <li class="tarif-item-option">Цена за 60 минут = 200 рублей</li>
            <li class="tarif-item-option">Округление до 60 минут в большую сторону</li>
            <li class="itog"><?php ?></li>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф суточный</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">цена за 1 км = 1 рубль</li>
            <li class="tarif-item-option">цена за 24 часа = 1000 рублей</li>
            <li class="tarif-item-option">округление до 24 часов в большую сторону, но не менее 30 минут. Например 24
                часа 29 минут = 1 сутки. 23 часа 59 минут = 1 сутки. 24 часа 31 минута = 2 суток.
            </li>
            <li class="itog"><?php ?></li>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф студенческий</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">цена за 1 км = 4 рубля</li>
            <li class="tarif-item-option">цена за 1 минуту = 1 рубль</li>
            <li class="tarif-item-option">Возраст водителя не может быть более 25 лет</li>
            <li class="itog"><?php ?></li>
        </ul>
    </div>
</div>

<?php

include_once 'InterfaceTariff.php';
include_once 'AbstractТariff.php';
include_once 'BaseTariff.php';

$tariff = new BaseTariff();

$tariff->isAge($age);
$tariff->calculate($tariff,$km,$time,$age);

if ($tariff instanceof BaseTariff){
    $tariff->isAge($age);
    $tariff->calculate($tariff,$km,$time,$age);
    echo  $tariff->$ageVerification;
} else {
    echo  $tariff->$ageVerification;
}

?>

</body>
</html>
