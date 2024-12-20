<?php
declare(strict_types=1);
/*
   ЗАДАНИЕ 1
   - Присвойте переменной $now значение метки времени актуальной даты(сегодня)
   - Присвойте переменной $birthday значение метки времени Вашего дня рождения
   - Создайте переменную $hour
   - С помощью функции getdate() присвойте переменной $hour текущий час
   */
$now = time();
$birthday = mktime(8, 30, 0, 4, 22, (int)date('Y'));
$hour = getdate($now)['hours'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>

<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	// echo $now . '<br>';
	// echo $birthday . '<br>';
	// echo $hour . '<br>';
	/*
	   ЗАДАНИЕ 2
	   - Используя управляющую конструкцию if – elseif - else присвойте 
		 переменной $welcome значение, изходя из следующих условий
		 если число в переменной $hour попадает в диапазон:
		 * от 0 до 6 - 'Доброй ночи'
		 * от 6 (включительно) до 12 - 'Доброе утро'
		 * от 12 (включительно) до 18 - 'Добрый день'
		 * от 18 (включительно) до 23 - 'Добрый вечер'
		 * Если число в переменной $hour не попадает ни в один из вышеперечисленных
		   диапазонов, то присвойте переменной $welcome значение 'Доброй ночи'
	   - Выведите $welcome на отдельной строке
	   - Установите локаль ru_RU.UTF-8
	   - С помощью функции datefmt_format() на отдельной строке выведите 
		 текущую дату, месяц, год, день недели и время,
		 например, "Сегодня 1 сентября 2018 года, суббота 09:30:00" 
	   - На отдельной строке выведите фразу "До моего дня рождения осталось "
	   - Выведите количество дней, часов, минут и секунд оставшееся до Вашего дня рождения
	   */
	if ($hour >= 0 && $hour < 6)
		$welcome = 'Доброй ночи';
	elseif ($hour >= 6 && $hour < 12)
		$welcome = 'Доброе утро';
	elseif ($hour >= 12 && $hour < 18)
		$welcome = 'Добрый день';
	elseif ($hour >= 18 && $hour < 23)
		$welcome = 'Добрый вечер';
	else $welcome = 'Доброй ночи';
	echo '<br>' . $welcome . '<br>';

	setlocale(LC_ALL, 'ru_RU.UTF-8');

	$fmt = datefmt_create(
		// 'ru_RU.UTF-8',
		null,
		IntlDateFormatter::FULL,
		IntlDateFormatter::FULL,
		'Europe/Moscow', // Часовой пояс
		IntlDateFormatter::GREGORIAN,
		'dd MMMM yyyy года, EEEE HH:mm:ss'
	);

	echo 'Сегодня ' . datefmt_format($fmt, $now) . '<br>';

	$birthdayItem = getdate($birthday);

	if($birthday < $now){
		$birthday = mktime(
			$birthdayItem['hours'], 
			$birthdayItem['minutes'], 
			$birthdayItem['seconds'], 
			$birthdayItem['mon'], 
			$birthdayItem['mday'], 
			(int)date('Y') + 1,
		);
	}
	
	$diff = $birthday - $now;

	$day = floor($diff / ((60 * 60 * 24)));
	$diff %= 60 * 60 * 24;
	$hours = floor($diff / (60 * 60));
	$diff %= 60 * 60;
	$minutes = floor($diff / 60);
	$seconds = $diff % 60;

	echo 'До моего дня рождения осталось: ' . $day . ' дней, ' . $hours .' часов, '. $minutes .' минут, '. $seconds . ' секунд';



	?>
</body>

</html>