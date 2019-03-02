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
    <input type="text" name="km" placeholder="Километры" value="" maxlength="4">
    <input type="text" name="time" placeholder="Минуты" value="" maxlength="7">
    <input type="text" name="age" placeholder="Возраст (от 18 до 65 лет)" value="" maxlength="2">
    <div class="my-checkboxes">
        <input type="checkbox" name="gps" id="gps" value="15"><label for="gps">GPS </label>
        <input type="checkbox" name="driver" id="driver" value="100"><label for="driver">Доп. водитель </label>
    </div>
    <input type="submit" value="Отправить">
</form>

<?php

$km = $_POST["km"];
$time = $_POST["time"];
$age = $_POST["age"];
$gps = $_POST["gps"];
$driver = $_POST["driver"];
?>

<?php

include_once 'InterfaceTariff.php';
include_once 'TraitGps.php';
include_once 'TraitDriver.php';
include_once 'AbstractТariff.php';
include_once 'BaseTariff.php';
include_once 'HourTariff.php';
include_once 'DayTariff.php';
include_once 'StudentTariff.php';

$tariff = new BaseTariff();

if ($tariff instanceof BaseTariff){
    $tariff->isAge($age);
    $tariff->setGps($gps,$time);
    $tariff->getAge();
    $tariff->baseCalculate($km,$time);
    $tariff->getBaseCalculate();
}

$tariff2 = new HourTariff();

if ($tariff2 instanceof HourTariff){
    $tariff2->isAge($age);
    $tariff2->setGps($gps,$time);
    $tariff2->setDriver($driver);
    $tariff2->getAge();
    $tariff2->hourCalculate($time);
    $tariff2->getHourCalculate();
}

$tariff3 = new DayTariff();

if ($tariff3 instanceof DayTariff){
    $tariff3->isAge($age);
    $tariff3->setGps($gps,$time);
    $tariff3->setDriver($driver);
    $tariff3->getAge();
    $tariff3->dayCalculate($km,$time);
    $tariff3->getDayCalculate();
}

$tariff4 = new StudentTariff();

if ($tariff4 instanceof StudentTariff){
    $tariff4->isAge($age);
    $tariff4->setGps($gps,$time);
    $tariff4->getAge();
    $tariff4->studentCalculate($km,$time,$age);
    $tariff4->getStudentCalculate();
}


?>

<div class="tariff-grid">

    <div class="tarif-item tarif-item_attention">
        <?php
        echo $tariff->getAge();
        ?>
    </div>
    <div class="data-info">
        <ul class="data-info-list">
            <?php
            echo "<li class='data-info-list-item'>Км: $km</li><li class='data-info-list-item'>Мин: $time</li><li class='data-info-list-item'>Возраст (лет): $age</li>";
            if ($gps != 0){
                echo "<li class='data-info-list-item'>Заказан GPS</li>";
            }
            if ($driver != 0){
                echo "<li class='data-info-list-item'>Заказан Дополнительный водитель</li>";
            }
            ?>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф базовый</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">цена за 1 км = 10 рублей</li>
            <li class="tarif-item-option">цена за 1 минуту = 3 рубля</li>
            <li class="itog">
                <?php
                echo 'Стоимость поездки = ' . $tariff->getBaseCalculate() . ' рублей';
                ?>
            </li>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф почасовой</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">Цена за 1 км = 0</li>
            <li class="tarif-item-option">Цена за 60 минут = 200 рублей</li>
            <li class="tarif-item-option">Округление до 60 минут в большую сторону</li>
            <li class="itog">
                <?php
                echo 'Стоимость поездки = ' . $tariff2->getHourCalculate() . ' рублей';
                ?></li>
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
            <li class="itog">
                <?php
                echo 'Стоимость поездки = ' . $tariff3->getDayCalculate() . ' рублей';
                ?>
            </li>
        </ul>
    </div>
    <div class="tarif-item">
        <div class="tarif-item-title">Тариф студенческий</div>
        <ul class="tarif-item-options">
            <li class="tarif-item-option">цена за 1 км = 4 рубля</li>
            <li class="tarif-item-option">цена за 1 минуту = 1 рубль</li>
            <li class="tarif-item-option">Возраст водителя не может быть более 25 лет</li>
            <li class="itog">
                <?php
                echo 'Стоимость поездки = ' . $tariff4->getStudentCalculate() . ' рублей';
                ?>
            </li>
        </ul>
    </div>
</div>
<div class="right-column">
    <div class="some-info">Если стоимость по тарифу 0,<br> то выбрать его не получится</div>
<form action="index.php" method="post">
    <select name="tariff">
        <option value="tariff_0" selected>Выберите тариф</option>
        <?php
        if ($tariff->getBaseCalculate() != '0') {echo "<option value=\"tariff_1\">Базовый тариф</option>";}
        ?>
        <?php
        if ($tariff2->getHourCalculate() != '0') {echo "<option value=\"tariff_2\">Почасовой</option>";}
        ?>
        <?php
        if ($tariff3->getDayCalculate() != '0') {echo "<option value=\"tariff_3\">Суточный</option>";}
        ?>
        <?php
        if ($tariff4->getStudentCalculate() != '0') {echo "<option value=\"tariff_4\">Студенческий</option>";}
        ?>
    </select>
    <input type="submit" value="Выбрать">
</form>
</div>
</body>
</html>
