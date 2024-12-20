<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение.
*/
// const Pi = 3.1415;
define('Pi', 3.1415);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Проверьте, существует ли константа, которую Вы хотите использовать.
	- Выведите значение созданной константы.
	ЗАДАНИЕ 3
	- Используя предопределённые в ядре константы выведите текущую версию PHP.
	- Используя магические константы выведите директорию скрипта.
	*/
    echo 'Существует ли константа?<br>';
    if(defined('Pi')) {echo 'Константа Pi существует, ее значение: ', Pi; }
    else echo 'Такой константы не существует';

    echo '<br>' . 'Текущая версия PHP: ', PHP_VERSION;
    echo '<br>' . 'Директория скрипта: ', __DIR__;
    
	?>
</body>
</html>