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
    }
    return $array_string;
}


$newarray=array('one','two','three');
echo PHP_EOL.printString($newarray, true);

$somearray=array('cat','dog','frog');
echo PHP_EOL.printString($somearray, false);

//task2

function toCalculate($arithmetic_sign, $num1 = 0, $num2 = 0)
{
    $args = func_get_args();
    switch ($arithmetic_sign) {
        case ('-'):
            $minus = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    $minus = $minus - $args[$i + 1];
                    if ($i != 1) {
                        echo "-";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $minus;
            break;
        case ('/'):
            $divide = $args[1];
            foreach ($args as $i => $value) {
                if ($i != 0) {
                    if ($i < count($args) - 1) {
                        $divide = $divide / $args[$i + 1];
                        // echo $args[$i+1];
                    }


                    // echo $args[$i+1];
                    if ($i != 1) {
                        echo "/";
                    }
                    echo $args[$i];
                }
            }
            echo '=';
            echo $divide;
            break;
    }
}





toCalculate('/', 2, 3, 4, 5);
//task3
