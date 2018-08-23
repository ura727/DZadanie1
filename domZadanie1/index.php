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


$bmv = ['model_1' => 'X5', 'speed_1' => 120, 'doors_1' => 5, 'year_1' => '2015'];

$toyota = ['model_2' => 'RAV-4', 'speed_2' => 110, 'doors_2' => 5, 'year_2' => '2016'];

$opel = ['model_3' => 'MOKO', 'speed_3' => 130, 'doors_3' => 3, 'year_3' => '2014'];

$CAR = $bmv + $toyota + $opel;

echo 'CAR BMV</br>';
foreach ($bmv as $value){
    echo $value. ' ';
}
echo '</br>CAR Toyota</br>';
foreach ($toyota as $value){
    echo $value. ' ';
}
echo '</br>CAR Opel</br>';
foreach ($opel as $value){
    echo $value. ' ';
}
echo '</br>';


echo 'Задание #6</br>';


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица умножения</title>
    <style>
        td{
            bottom: 1px;
            padding: 15px;
            text-align: center;
        }

        table{
            border: 0px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td></td>

        <?php
        for ($i = 1; $i < 10; $i++) {
            echo '<td>' . $i . '</td>';
        }
        ?>
    </tr>

    <?php
    for ($m = 1; $m < 10; $m++) {
        echo '<tr>' . '<td>' . $m . '</td>';
        for ($p = 1; $p < 10; $p++) {
            if (($m % 2 == 0) && ($p % 2 == 0)) {
                echo '<td> (' . $m * $p . ') </td>';

            } elseif (($m % 2 != 0) && ($p % 2 != 0)) {
                echo '<td> [' . $m * $p . '] </td>';
            } else echo '<td>' . $m * $p . '</td>';
        }
    }
        ?>
    </tr>
</table>
</body>
</html>

?>
