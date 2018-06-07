0<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 05.06.2018
 * Time: 17:00
 */
//task1
$name='Алина';
$age='100';
echo 'меня зовут '.$name.PHP_EOL;
echo 'мне '.$age.' лет'.PHP_EOL;
echo '"!|\/\'"/'.PHP_EOL;

//task2
const TOTAL_PIC=80;
const MARKER_PIC=23;
const PENCIL_PIC=40;
echo 'Всего рисунков '.TOTAL_PIC.'.'.' выполнены фломастерами '.MARKER_PIC.'.'.' выполнены карандашами '
    .PENCIL_PIC.'.';
echo ' Вычтем из общего кол-ва рисунков сумму рисунков каранадашами и фломастерами,ответ: рисунков красками '
    .(TOTAL_PIC-(MARKER_PIC+PENCIL_PIC).PHP_EOL);

//task3
$age=35;
if (18<=$age && $age<=65) {
    echo "Вам еще работать и работать".PHP_EOL;
} elseif ($age > 65) {
    echo "Вам пора на пенсию".PHP_EOL;
} elseif ($age>=1 && $age<=17) {
    echo "Вам еще рано работать".PHP_EOL;
} else {
    echo "неизвестный возраст".PHP_EOL;
}

//task4
$day=3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день".PHP_EOL;
        break;
    case 6:
    case 7:
        echo "Это выходной день".PHP_EOL;
        break;
    default:
        echo "Неизвестный день".PHP_EOL;
}

//task5
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];
$opel = [
    "model" => "Corsa",
    "speed" => 125,
    "doors" => 5,
    "year" => "2011",
];
$toyota = [
    "model" => "Corolla",
    "speed" => 100,
    "doors" => 3,
    "year" => "2001",
];
$cars= [$bmw,$opel,$toyota];
echo 'CAR toyota'.PHP_EOL;
foreach ($toyota as $value) {
    echo $value.' ';
}
echo PHP_EOL.'CAR bmw'.PHP_EOL;
foreach ($bmw as $value) {
    echo $value.' ';
}
echo PHP_EOL.'CAR opel'.PHP_EOL;
foreach ($opel as $value) {
    echo $value.' ';
}
//task6
echo '<table border="2px">';
for ($a=1; $a<=10; $a++) {
    echo '<tr>';
    for ($b=1; $b<=10; $b++) {
        echo '<td>';
        if ($a % 2 == 0 && $b % 2 == 0) {
            echo '('.$a * $b . ')' ;
        } elseif ($a % 2 == 1 && $b % 2 == 1) {
            echo '[' . $a * $b . ']';
        } else {
            echo $a * $b ;
        }
        echo '</td>'. ' ';
    }

    echo '</td>'. PHP_EOL;

}
echo '</table>';
