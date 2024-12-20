<?php
declare(strict_types=1);
use MyProject\Classes\User;
use MyProject\Classes\SuperUser;
// require(__DIR__.'/MyProject/Classes/User.php');

/**
 * Автозагрузчик классов.
 *
 * @param string $class Полное имя класса, включая пространство имен.
 *                      Например: "MyProject\Classes\User".
 * @return void
 */
function autoloader(string $class): void{
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)){
        require_once $file;
    }
}

/**
 * Регистрирует функцию автозагрузки.
 *
 * @param callback $autoloader Имя функции, которая будет вызываться для автозагрузки классов.
 * @return bool Возвращает true при успешной регистрации функции автозагрузки.
 */
spl_autoload_register(callback: 'autoloader');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Классы</title>
</head>
<body>
	<h1>Классы</h1>
<?php
//Задание 1
/* $user1 = new User();
$user1->name = 'user1';
$user1->login = 'loginUser1';
$user1->setPasswd('passwdUser1');

$user2 = new User();
$user2->name = 'user2';
$user2->login = 'loginUser2';
$user2->setPasswd('passwdUser2');


$user3 = new User();
$user3->name = 'user3';
$user3->login = 'loginUser3';
$user3->setPasswd('passwdUser3');*/

//Задание 2

$user1 = new User('user1', 'loginUser1', 'passwdUser1');
$user2 = new User('user2', 'loginUser2', 'passwdUser2');
$user3 = new User('user3', 'loginUser3', 'passwdUser3');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo(); 


$user = new SuperUser('user', 'loginUser', 'passwdUser', 'roleUser');

$user->showInfo();

unset($user1);
unset($user2);
unset($user3);
unset($user);


?>

</body>
</html>






