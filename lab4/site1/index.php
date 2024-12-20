<?php
// declare(strict_types=1);
include("inc/lib.inc.php");
include("inc/data.inc.php");
/*
  ЗАДАНИЕ 1
  - В папке сайта создайте папку под названием inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл php-блок с функцией getTable()
  - Перенесите в файл функцию getMenu()
  - Сохраните файл под именем lib.inc.php в папке inc
  - В файле table.php в блоке <!--Таблица --> (там, где ранее отрисовывалась таблица) отрисуйте таблицу умножения вызывая функцию getTable() с произвольными параметрами
  - В файле index.php в блоке <!--Меню --> (там, где ранее отрисовывалось меню) отрисуйте меню навигации вызвав функцию getMenu()с необходимыми параметрами
  - В текстовом редакторе создайте новый файл и создайте в нем php-блок
  - Перенесите в файл весь php-код, необходимый для работы функций getTable() и getMenu() (значения параметров функций)
  - Сохраните файл под именем data.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Верхняя часть страницы --> из файла index.php
  - Сохраните файл под именем top.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Навигация --> из файла index.php
  - Сохраните файл под именем menu.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Нижняя часть страницы --> из файла index.php
  - Сохраните файл под именем bottom.inc.php в папке inc
  - В текстовом редакторе создайте новый файл
  - Перенесите в файл всё, что находится внутри блока <!--Область основного контента --> из файла index.php
  - Сохраните файл под именем index.inc.php в папке inc


  ЗАДАНИЕ 2
  - В текстовом редакторе откройте файл index.php
  - В самом верху файла подключите файлы lib.inc.php и data.inc.php из папки inc
  - В блоке <!--Верхняя часть страницы --> подключите файл top.inc.php из папки inc
  - В блоке <!--Навигация --> подключите файл menu.inc.phpиз папки inc
  - В блоке <!--Область основного контента --> подключите файл index.inc.php из папки inc
  - В блоке <!--Нижняя часть страницы --> подключите файл bottom.inc.php из папки inc
  - Сохраните файл index.php
  - Посмотрите результат в браузере
  */
// Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$welcome = time();
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'] ?? '')));
switch ($id) {
  case 'about':
    $title = 'О сайте';
    $header = 'О нашем сайте';
    break;
  case 'contact':
    $title = 'Контакты';
    $header = 'Обратная связь';
    break;
  case 'table':
    $title = 'Таблица умножения';
    $header = 'Таблица умножения';
    break;
  case 'calc':
    $title = 'Он-лайн калькулятор';
    $header = 'Калькулятор';
    break;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Сайт нашей школы</title> -->
  <title><?= $title ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Верхняя часть страницы -->
    <!-- <img src="logo.png" width="130" height="80" alt="Наш логотип" class="logo">
    <span class="slogan">приходите к нам учиться</span> -->
    <?php include('inc/top.inc.php'); ?>
    <!-- Верхняя часть страницы -->
  </header>

  <section>
    <!-- Заголовок -->
    <!-- <h1>Добро пожаловать на наш сайт!</h1> -->
    <h1><?= $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    switch ($id) {
      case 'about':
        include 'about.php';
        break;
      case 'contact':
        include 'contact.php';
        break;
      case 'table':
        include 'table.php';
        break;
      case 'calc':
        include 'calc.php';
        break;
      default:
        include 'inc/index.inc.php';
    }
    ?>
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
    <!-- <h2>Навигация по сайту</h2> -->
    <!-- Меню -->
    <!-- <ul>
      <li><a href='index.php'>Домой</a></li>
      <li><a href='about.php'>О нас</a></li>
      <li><a href='contact.php'>Контакты</a></li>
      <li><a href='table.php'>Таблица умножения</a></li>
      <li><a href='calc.php'>Калькулятор</a></li>
    </ul> -->

    <?php include('inc/menu.inc.php'); ?>
    <?php getMenu($leftMenu); ?>
    <!-- Меню -->
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    <!-- &copy; Супер Мега Веб-мастер, 2000 &ndash; 20xx -->
    <?php include('inc/bottom.inc.php');?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>

</html>