<?php
declare(strict_types= 1);
// session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$cols = abs((int) $_POST['cols']);
	$rows = abs((int) $_POST['rows']);
	$color = trim(strip_tags($_POST['color']));

  // $_SESSION['cols'] = $cols;
  // $_SESSION['rows'] = $rows;
  // $_SESSION['color'] = $color;
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : '#ffff00';
?>
   <!-- Область основного контента -->
    <form action='<?=$_SERVER['REQUEST_URI']?>' method="POST">
      <label>Количество колонок: </label>
      <br>
      <input name='cols' type='text' value=''>
      <br>
      <label>Количество строк: </label>
      <br>
      <input name='rows' type='text' value=''>
      <br>
      <label>Цвет: </label>
      <br>
      <input name='color' type='color' value='#ff0000' list="listColors">
	<datalist id="listColors">
		<option>#ff0000</option>/>
		<option>#00ff00</option>
		<option>#0000ff</option>
	</datalist>
      <br>
      <br>
      <input type='submit' value='Создать'>
    </form>
    <br>
    <!-- Таблица -->
     <!-- drawTable($cols, $rows, $color); -->
    <!-- <table border='1' width='200'>
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>12</td>
        <td>15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>8</td>
        <td>12</td>
        <td>16</td>
        <td>10</td>
      </tr>
      <tr>
        <td>5</td>
        <td>10</td>
        <td>15</td>
        <td>20</td>
        <td>25</td>
      </tr>
    </table> -->
    <!-- Таблица -->
    <!-- Область основного контента -->