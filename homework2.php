<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 09.06.2018
 * Time: 20:25
 */
//task1
function printString($strarr, $tojoinstr = false)
{
    foreach ($strarr as $value) {
        echo '<p>' . $value . '</p>';
    }
    if ($tojoinstr) {
        $array_string='';
        foreach ($strarr as $value) {
            $array_string=$array_string.$value;
        }
        return $array_string;
    }
}


$newarray=array('one','two','three');
echo PHP_EOL.printString($newarray, true);

$somearray=array('cat','dog','frog');
echo PHP_EOL.printString($somearray, false);

//task2

function toCalculate($arithmetic_sign, $num1 = 0, $num2 = 0)
{
    $args = func_get_args();
    $number_elements=count($args);
    echo $number_elements;
    $num_args = [0];
    foreach ($num_args as $i => $value) {
        while ($i<$number_elements-1) {
            $num_args[$i] = $args[$i + 1];
            echo $num_args[$i];
        }
    }
    foreach ($num_args as $i => $value) {
        echo $num_args[$i]."hi";
    }
    echo end($num_args).'bu';

    switch ($arithmetic_sign) {
        case ('-'):
            $sum = 0;
            foreach ($num_args as $i => $value) {
                $sum = $sum + $num_args[$i + 1];
            }
           // echo $num_args[0];
            foreach ($num_args as $i => $value) {
                if ($num_args[$i] != $num_args[0]) {
                    echo '-';
                }
                echo $num_args[$i];
            }
            echo '=';
            echo $num_args[0] - $sum;
            break;

        case ('/'):
            $result = $num_args[0];
            foreach ($args as $i => $value) {
                while ($num_args[$i + 1] != 0) {
                    $result = $result / $args[$i + 1];
                }
            }
            echo $num_args[0];
            foreach ($num_args as $i => $value) {
                if ($num_args[$i] != end($args)) {
                    echo '/';
                }
                echo '=';
                echo $result;
                break;
            }
    }
}

toCalculate('-', 2, 3, 4, 5);
