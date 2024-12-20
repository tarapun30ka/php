<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $name и присвойте ей значение содержащее Ваше имя, например 'Иван'(обязательно в одинарных кавычках!).
- Создайте переменную $age и присвойте ей значение содержащее Ваш возраст, например 20.
*/

    $name = 'Лера';
    $age = 21;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
	<h1>Переменные и вывод</h1>
    
    <p>Изолирование кода:</p>
    <p>Меня зовут: <?= $name?></p>
    <p>Мне <?= $age?> год</p>
    <p>Тип переменной $name: <?=var_dump($name);?></p>
    <p>Тип переменной $age: <?=var_dump($age);?></p>

	<?php
    // echo "Меня зовут: ", $name," ";
    // echo "Мне $age год ";
    // echo  gettype($name), " ";
    // echo gettype($age);

    // echo nl2br("\nИзмените код так, чтобы каждая фраза начиналась с новой строки\n");

    	/*
	ЗАДАНИЕ 2
	- Выведите с помощью echo фразу "Меня зовут: $name", например: 'Меня зовут: Иван'.
	- Выведите фразу "Мне $age лет", например: 'Мне 20 лет'.
	- Выведите информацию о типе переменных $name и $age.
	- Удалите переменные $name и $age.
	- Измените код так, чтобы каждая фраза начиналась с новой строки.
	- Изолируйте код PHP от HTML-разметки.
	*/

    echo 'Меня зовут: ' . $name . '<br>';
    echo 'Мне '. $age . ' год ' . '<br>';
    var_dump($name);
    echo '<br>';
    var_dump($age);



    // echo "Удаление переменных через unset()" . '<br>';
    unset( $age, $name );
       
    ?>
</body>
</html>

<!-- // echo nl2br("\nИзолирование кода PHP от HTML-разметки с помощью шаблона\n\n");



        // include 'newline.php';
        // echo nl2br($echo_attribute);
        // foreach($types as $type) {echo $type . '<br>';} -->