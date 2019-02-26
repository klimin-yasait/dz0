<?php
require_once 'init.php';

getDbConnection();

function allDbActions($getEmail, $getName, $street, $home, $part, $appt, $floor, $comment, $thisUserId)
{
    $query = "INSERT INTO `orders`(`street`,`home`,`part`,`appt`,`floor`,`comment`,`user_id`) VALUES ('$street','$home','$part','$appt','$floor','$comment','$thisUserId')";
    $ret = getDbConnection()->query($query);
    $thisOrder = $ret->fetchAll();

    $query = "SELECT `id` FROM `orders` WHERE user_id = '$thisUserId' ORDER BY id DESC LIMIT 1";
    $ret = getDbConnection()->query($query);
    $thisOrderId = $ret->fetchAll();
    $thisOrderId = $thisOrderId[0]['id'];

    $query = "SELECT COUNT(*) FROM `orders` WHERE `user_id`='$thisUserId'";
    $ret = getDbConnection()->query($query);
    $count = $ret->fetchAll();
    $count = $count[0][0];

    if ($count == 1) {
        $orederNumMessage = "Спасибо - это Ваш первый заказ";
    } else {
        $orederNumMessage = "Спасибо! Это уже $count заказ";
    }

    mailThis($getEmail, $getName, $thisOrderId, $street, $home, $part, $appt, $floor, $comment, $count, $orederNumMessage);
}

function mailThis($getEmail, $getName, $thisOrderId, $street, $home, $part, $appt, $floor, $comment, $count, $orederNumMessage)
{

    /* получатели */
    $to = "getName <$getEmail>" . ", ";
    $to .= "Admin <avklimin@yandex.ru>";

    /* тема/subject */
    $subject = "Заказ бургера № $thisOrderId";

    /* сообщение */
    $message = '
<html>
<head>
 <title>' . $getName . ', спасибо за Ваш заказ, ему присвоен № ' . $thisOrderId . '</title>
</head>
<body>
<h1>Заказ № ' . $thisOrderId . '</h1>
<p>Ваш заказ будет доставлен по адресу</p>
<table border=1>
 <tr>
<th>Улица</th><th>Дом</th><th>Корпус</th><th>Квартира</th><th>Этаж</th><th>Комментарий</th>
 </tr>
 <tr>
<td>' . $street . '</td><td>' . $home . '</td><td>' . $part . '</td><td>' . $appt . '</td><td>' . $floor . '</td><td>' . $comment . '</td>
 </tr>
</table>
<p>DarkBeefBurger за 500 рублей, 1 шт</p>
<p>' . $orederNumMessage . '</p>
</body>
</html>
';

    /* Для отправки HTML-почты устанавливаем шапку Content-type. */
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    /* дополнительные шапки */
    $headers .= "From: Бургерная <avklimin@yandex.ru>\r\n";

    /* и теперь отправим из */
    mail($to, $subject, $message, $headers);
}