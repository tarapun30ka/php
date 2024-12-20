<?php
declare(strict_types=1);
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $login и присвойте ей значение ' User '
	- Создайте строковую переменную $password и присвойте ей значение 'megaP@ssw0rd'
	- Создайте строковую переменную $name и присвойте ей значение 'иван'
	- Создайте строковую переменную $email и присвойте ей значение 'ivan@petrov.ru'
	- Создайте строковую переменную $code и присвойте ей значение '<?=$login?>'
	*/
    $login = ' User ';
    $password = 'megaP@ssw0rd';
    $name = 'иван';
    $email = 'ivan@petrov.ru';
    $code = '<?=$login?>'
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	/*
	ЗАДАНИЕ 2
	- Используя строковые функции, удалите пробельные символы в начале и конце переменной $login, а также сделайте все символы строчными (малыми)
	- Проверьте значение переменной $password на сложность: пароль должен содержать минимум одну заглавную латинскую букву, одну строчную и одну цифру, а длина должна быть не меньше 8 символов. Оформите полученный код в виде пользовательской функции.
	- Используя строковые функции, сделайте первый символ значения переменной $name прописной (большой)
	- Используя функцию фильтрации переменных проверьте корректность значения $email
	- Используя строковые функции выведите значение переменной $code в браузер в том же виде как она задана в коде
	*/
    $login = trim(strtolower($login));
    echo $login . '<br>';
    function isDifficultPasswd($password){
        return preg_match('/[A-Z]/', $password) &&
                preg_match('/[a-z]/', $password) &&
                preg_match('/[0-9]/', $password) && 
                strlen($password) >= 8;
    }
    if(isDifficultPasswd($password)) 
    echo 'Сложный пароль<br>';
    else echo 'Пароль нужно поменять';

    // $name = mb_strtoupper( mb_substr($name,0, 1) ) . mb_substr($name,1, strlen($name)-1);
    $name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    echo $name . '<br>';
    
    if(filter_var( $email, FILTER_VALIDATE_EMAIL )) 
    echo 'Значение $email: ' . $email . ' корректно<br>'; //if return false => empty str
    else echo 'Значение $email: ' . $email . ' не корректно<br>';
    // echo htmlentities($code);
    echo htmlspecialchars($code);
    
?>
</body>
</html>