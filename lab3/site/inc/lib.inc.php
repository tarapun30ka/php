<?php
declare(strict_types=1);
/**
 * Функция для отрисовки таблицы умножения.
 *
 * @param int $cols Количество колонок в таблице
 * @param int $rows Количество строк в таблице
 * @param string $color Цвет фона для ячеек первых столбца и строки таблицы
 * @static $count Количество вызовов функции
 * @return int Возвращает количество вызовов функции
 */
function getTable(int $cols = 7, int $rows = 7, string $color = 'orange'): int
{
	static $count = 0;
	$count++;
	$table = '<table border="1" width="200"><tbody>';
	for ($i = 1; $i <= $cols; $i++) {
		$table .= '<tr>';
		for ($j = 1; $j <= $rows; $j++) {
			if ($i == 1 || $j == 1) {
				$table .= '<th style="background-color:' . $color . ';">' . $i * $j . '</th>';
			} else {
				$table .= '<td>' . $i * $j . '</td>';
			}
		}
		$table .= '</tr>';
	}
	$table .= '</tbody></table>';
	echo $table;
	return $count;
}

/**
 * Функция для отрисовки меню.
 *
 * @param array $menu Массив, содержащий элементы меню с ключами 'link' и 'href'.
 * @param bool $vertical Отображение меню или вертикально (по умолчанию true) или горизонтально.
 *
 * @return void
 */
function getMenu(array $menu, bool $vertical = true): void
{
    if($vertical) echo '<ul class="menu">';
    else echo '<ul class="menu vertical">';
        foreach ($menu as $item) {
            echo '<li><a href="' . $item['href'] . '">' . $item['link'] . '</a></li>';
        }
    echo '</ul>';
}