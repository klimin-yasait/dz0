<?php

function task1($myArray, $myBool)
{
    foreach ($myArray as &$myArrayString) {
        if ($myBool == TRUE) {
            echo $myArrayString;
        } else {
            echo '<p>' . $myArrayString . '</p>';
        }
    }
    echo '<br><hr><br>';
}

;

/**
 *
 */
function task2()
{

    $numargs = func_num_args();
    $arg_list = func_get_args();

    $operators = '[+\/*\^%-]';
    $first_arg = $arg_list[0];

    for ($i = 1; $i < $numargs; $i++) {
        $el_is_num = is_numeric($arg_list[$i]);
        if ($el_is_num == false) {
            echo "Один из операндов не является цифрой!";
            die;
        }
    }

    for ($i = 2; $i < $numargs; $i++) {
        $is_math = strpos($operators, $first_arg);
        if ($arg_list[$i] == 0 & $is_math == 3) {
            echo "На 0 не делим!";
            die;
        } elseif ($arg_list[$i] == 0 & $is_math == 7) {
            echo "На 0 не делим!";
            die;
        } elseif ($is_math === false) {
            echo "Первый аргумент не является оператором!";
            die;
        }
    }

    for ($i = 1; $i < $numargs; $i++) {
        $current_arg = $arg_list[$i];
        if ($i > 1) {
            $el_is_num = is_numeric($arg_list[$i]);
            if ($el_is_num === true) {

                switch ($is_math) {
                    case 1:
                        if ($i != $numargs - 1) {
                            echo ' + ' . $current_arg;
                            $summ = $summ + $current_arg;
                        } else {
                            echo ' + ' . $current_arg . ' = ';
                            $summ = $summ + $current_arg;
                            echo $summ;
                        }
                        break;
                    case 3:
                        if ($i != $numargs - 1) {
                            echo ' / ' . $current_arg;
                            $summ = $summ / $current_arg;
                        } else {
                            echo ' / ' . $current_arg . ' = ';
                            $summ = $summ / $current_arg;
                            echo $summ;
                        }
                        break;
                    case 4:
                        if ($i != $numargs - 1) {
                            echo ' * ' . $current_arg;
                            $summ = $summ * $current_arg;
                        } else {
                            echo ' * ' . $current_arg . ' = ';
                            $summ = $summ * $current_arg;
                            echo $summ;
                        }
                        break;
                    case 6:
                        if ($i != $numargs - 1) {
                            echo ' ^ ' . $current_arg;
                            $summ = $summ ^ $current_arg;
                        } else {
                            echo ' ^ ' . $current_arg . ' = ';
                            $summ = $summ ^ $current_arg;
                            echo $summ;
                        }
                        break;
                    case 7:
                        if ($i != $numargs - 1) {
                            echo ' % ' . $current_arg;
                            $summ = $summ % $current_arg;
                        } else {
                            echo ' % ' . $current_arg . ' = ';
                            $summ = $summ % $current_arg;
                            echo $summ;
                        }
                        break;
                    case 8:
                        if ($i != $numargs - 1) {
                            echo ' - ' . $current_arg;
                            $summ = $summ - $current_arg;
                        } else {
                            echo ' - ' . $current_arg . ' = ';
                            $summ = $summ - $current_arg;
                            echo $summ;
                        }
                        break;
                }

            }
        } else {
            $summ = $arg_list[$i];
            echo $summ;
        }
    }
    echo '<br><hr><br>';
}

;

function task3($y, $x)
{
    $is_int_y = is_int($y);
    $is_int_x = is_int($x);

    if ($is_int_y == true & $is_int_x == true) {
        echo '<table border=1>';
        for ($tr = 1; $tr <= $y; $tr++) {
            echo '<tr>';
            for ($td = 1; $td <= $x; $td++) {
                echo '<td>' . $tr * $td . '</td>';
            }
        }
        echo '</tr></table>';
    } else {
        echo "Введены не целые числа";
    }
    echo '<br><hr><br>';
}

;

function task4()
{
    echo date("d.m.Y H:i");
    echo '<br>';
    $date = "02/24/2016 0:00:00";
    $unixDate = strtotime($date);
    echo $unixDate;
    echo '<br><hr><br>';
}

;

function task5($first, $second)
{
    $first_out = str_replace('К', 'к', $first);
    echo $first_out . '<br>';
    $second_out = str_replace('Две', 'Три', $second);
    echo $second_out;
    echo '<br><hr><br>';
}

;

function task6($file_to_read)
{
    $read_this = fopen($file_to_read, 'r') or die("не удалось открыть файл");
    while (!feof($read_this)) {
        $str = htmlentities(fgets($read_this));
        echo $str;
    }
    fclose($read_this);
    echo '<br><hr><br>';
}

;