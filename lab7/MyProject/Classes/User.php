<?php
declare(strict_types=1);
namespace MyProject\Classes;
// require_once(__DIR__.'/SuperUser.php');
class User{
    public $name;
    public $login;
    private $password;

/*     function __construct(){
        $this->name = '';
        $this->login = '';
        $this->password = '';
    } */
   
    public function setPasswd(string $password): void{
        $this->password = $password;
    }

    public function getPasswd(): string{
        return $this->password;
    }

    function __construct(string $name, string $login, string $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    function __destruct(){
        echo "Пользователь $this->login удален<br>";
    }

    public function showInfo() : void {
        echo 'Имя: ' . $this->name . '<br>';
        echo 'Логин: ' . $this->login . '<br>';
        echo 'Пароль: ' . $this->password . '<br>';
    }
}