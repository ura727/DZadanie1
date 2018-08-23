<?php

?>
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
        for ($i = 1; $i <= 9; $i++) {
            echo '<td>' . $i . '</td>';
        }
        ?>
    </tr>

    <?php
    for ($m = 1; $m <= 9; $m++) {
        echo '<tr>' . '<td>' . $m . '</td>';
        for ($p = 1; $p <= 9; $p++) {
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