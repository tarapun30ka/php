<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функция swap</title>
</head>

<body>
    <h1>Функция swap</h1>
    <?php
    /**
 * Функция для обмена значениями двух переменных.
 *
 * @param int $a Первая переменная, значение которой нужно поменять.
 * @param int $b Вторая переменная, значение которой нужно поменять.
 *
 * @return void
 */
        function swap(int &$a, int &$b): void
        {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
        echo '<h3>Пример работы функции swap</h3>';
        $a = 5;
        $b = 8;
        swap($a, $b);
        var_export( 5 === $b ); // true
        echo '<br>';
        var_export( 8 === $a ); // true
    ?>
</body>

</html>