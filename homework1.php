<?php
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
    .(TOTAL_PIC-(MARKER_PIC+PENCIL_PIC));

//task3
$age=67;
if (18<$age and $age<65) {
    echo "Вам еще работать и работать";
}
else if ($test < 91 && $test > 80)
{
    echo "Оценка 4";
}
