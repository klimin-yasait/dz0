<?php

function show_something($testConstanta, $user_name)
{
    if ($testConstanta == $user_name) {
        echo 'Hi';
    } else {
        echo 'Введенные данные не верны!';
    }
}

;