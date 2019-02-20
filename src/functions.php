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

}


