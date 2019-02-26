<?php
session_start();
require_once 'init.php';

getDbConnection();

$getName = $_POST["name"];
$getPhone = $_POST["phone"];
$getEmail = $_POST["email"];

$street = $_POST["street"];
$home = $_POST["home"];
$part = $_POST["part"];
$appt = $_POST["appt"];
$floor = $_POST["floor"];
$comment = $_POST["comment"];

$query = "SELECT * FROM `users` WHERE email = '$getEmail'";
$ret = getDbConnection()->query($query);
$thisUser = $ret->fetchAll();

$thisUserId = $thisUser[0]['id'];

$query = "SELECT * FROM `orders` WHERE user_id = '$thisUserId'";
$ret = getDbConnection()->query($query);
$userOrders = $ret->fetchAll();

// тут я простенькую авторизацию как бы сделал)))
if ($getName == 'admin' & $getEmail == 'sam@ty.admin') {

    $query = "SELECT * FROM `users`";
    $ret = getDbConnection()->query($query);
    $allUsers = $ret->fetchAll();
    foreach ($allUsers as $oneUser) {
        echo "<pre>";
        print_r($oneUser);
    }
    echo "<hr>";
    $query = "SELECT * FROM `orders`";
    $ret = getDbConnection()->query($query);
    $allOrders = $ret->fetchAll();
    foreach ($allOrders as $oneOrder) {
        echo "<pre>";
        print_r($oneOrder);
    }
    echo "<hr>";
} else {
    if ($userOrders) {
        // Если такой пользователь существует, принимаем от него заказ

        $_SESSION['user_id'] = $userOrders[0]['user_id'];
        allDbActions($getEmail, $getName, $street, $home, $part, $appt, $floor, $comment, $thisUserId);

        echo "<ul class='thank-you'><li class='thank-you-title'>Спасибо за заказ!</li><li class='thank-you-link'><a href='index.php'>вернуться на главную</a></li>";

    } else {
        // Иначе создаем нового пользователя и принимаем от него заказ

        $query = "INSERT INTO `users`(`name`,`phone`,`email`) VALUES ('$getName', '$getPhone', '$getEmail')";
        $ret = getDbConnection()->query($query);
        $thisUser = $ret->fetchAll();

        $query = "SELECT * FROM `users` WHERE email = '$getEmail'";
        $ret = getDbConnection()->query($query);
        $thisUser = $ret->fetchAll();
        $thisUserId = $thisUser[0]['id'];

        allDbActions($getEmail, $getName, $street, $home, $part, $appt, $floor, $comment, $thisUserId);

        echo "<ul class='thank-you'><li class='thank-you-title'>Вы зарегистрированы, спасибо за заказ!</li><li class='thank-you-link'><a href='index.php'>вернуться на главную</a></li>";
    }
}