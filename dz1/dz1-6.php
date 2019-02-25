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

echo '<table border=1>';

for ($tr = 1; $tr <= 10; $tr++) {

    echo '<tr>';

    for ($td = 1; $td <= 10; $td++) {
        if (($tr % 2) == 0 & ($td % 2) == 0) {
            echo '<td>(' . $tr * $td . ')</td>';
            $m++;
        } elseif (($tr % 2) != 0 & ($td % 2) != 0) {
            echo '<td>[' . $tr * $td . ']</td>';
            $m++;
        } else {
            echo '<td>' . $tr * $td . '</td>';
            $m++;
        }
    }

    echo '</tr>';

};
echo '</table>';

?>

</body>
</html>