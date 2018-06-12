<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 09.06.2018
 * Time: 20:25
 */

require('homework2_functions.php');
toCalculate('+', 7, 8, 25, -1, 0);
//task 3.1
task3(8, 4);

//task 4.1
echo date('d.m.Y H:i').PHP_EOL;

//task 4.2
$timestamp = strtotime('24-02-2016');
echo $timestamp.PHP_EOL;

// 5.1
$str="Карл у Клары украл Кораллы";
$letter="К";
$new_str= str_replace($letter, ' ', $str);
echo $new_str.PHP_EOL;
//task 5.2
$str="Две бутылки лимонада";
$substr="Две";
$new_str= str_replace($substr, 'Три', $str);
echo $new_str.PHP_EOL;

//task6.1
$text="Hallo again!";
$fp = fopen("test.txt", "w");
fwrite($fp, $text);
task6('test.txt');
