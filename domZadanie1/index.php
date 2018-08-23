<?php
echo 'Домашнее задание 1</br>';

echo 'Задание #1</br>';

$name = 'Юрий';
$age = "39";
echo "\"Меня зовут:$name.\"";
echo "</br>";
echo "\"Мой возраст:$age лет.\"";
echo "</br>";
echo "\"!|\/'\"\\";
echo "</br>";

echo 'Задание #2</br>';

define('TOTAL_DRAWINGS', '80');
define('DRAWING_WITH_FELT_TIP_PEN', '23');
define('PENCIL_DRAWING', '40');
$paint = (TOTAL_DRAWINGS - DRAWING_WITH_FELT_TIP_PEN - PENCIL_DRAWING);
define('PAINT_DRAWING', "$paint");
echo 'Всего на выставке: ' . TOTAL_DRAWINGS . ' рисунков.</br>';
echo 'Выполнены фломастерами: ' . DRAWING_WITH_FELT_TIP_PEN . ' рисунка.</br>';
echo 'Выполнены карандашами: ' . PENCIL_DRAWING . ' рисунков.</br>';
echo 'Сколько рисунков выполнены красками ?</br>';
echo 'Решение: ' . TOTAL_DRAWINGS . ' - ' . DRAWING_WITH_FELT_TIP_PEN . ' - ' . PENCIL_DRAWING . ' = ' . PAINT_DRAWING . '</br>';
echo 'Ответ: ' . PAINT_DRAWING . ' рисунков выполнены красками.';
echo '</br>';

echo 'Задание #3</br>';

$age = rand(0, 110);
echo 'Возраст: ' . $age . '</br>';
if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    echo 'Вам еще рано работь';
} else {
    echo 'Неизвестный возраст';
};


echo '</br>';

echo 'Задание #4</br>';


$day = rand(1, 10);
echo "Сегодня .$day. день</br>";
switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo 'Это рабочий день';
        break;
    case ($day == 6 && $day == 7):
        echo 'Это выходной день';
        break;
    default:
        echo 'Не известный день';
}

echo '</br>';



echo 'Задание #5</br>';


$bmv = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'RAV-4',
    'speed' => 110,
    'doors' => 5,
    'year' => '2016'
];

$opel = [
    'model' => 'MOKO',
    'speed' => 130,
    'doors' => 3,
    'year' => '2014'
];

$cars = [
    'CAR BMV' => $bmv,
    'CAR TOYOTA' => $toyota,
    'CAR OPEL' => $opel,
];


foreach ($bmv as $key => $value){
    echo '<div style="border: 1px solid; padding: 20px; margin: 10px; float: left;">';
    echo $key . '</br>';
    foreach ($value as $v){
        echo $v . ' ';
    }
    echo '</div>';
}

echo '</br>';




