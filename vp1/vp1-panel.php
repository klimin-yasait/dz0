<?php
require_once 'init.php';

getDbConnection();

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