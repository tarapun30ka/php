<?php
// Инициализация переменной $age, если форма была отправлена
$age = null;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['age'])) {
$age = (int)$_POST['age']; // Преобразуем введенное значение в целое число
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Конструкции if-elseif-else</title>
</head>
<body>
<h1>Конструкции if-elseif-else</h1>

<form method="POST">
<label for="age">Введите ваш возраст: </label>
<input type="number" name="age" id="age" required>
<button type="submit">Отправить</button>
</form>

<?php
// Проверка, если возраст был передан
if ($age !== null) {
if ($age >= 18 && $age <= 59) {
echo '<p>Вам ещё работать и работать.</p>';
} elseif ($age > 59) {
echo '<p>Вам пора на пенсию.</p>';
} elseif ($age >= 1 && $age <= 17) {
echo '<p>Вам ещё рано работать.</p>';
} else {
echo '<p>Неизвестный возраст.</p>';
}
}   
?>
</body>
</html>