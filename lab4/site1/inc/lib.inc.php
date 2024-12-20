<?php
declare(strict_types=1);
function drawTable(int $cols = 7, int $rows = 7, string $color = 'orange'): int
{
	static $count = 0;
	$count++;
	$table = '<table border="1" width="200">';
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
	$table .= '</table>';
	echo $table;
	return $count;
}

function getMenu(array $menu, bool $vertical = true): void
{
    echo '<ul class="menu">';
    if ($vertical) {
        foreach ($menu as $item) {
            echo '<li><a href=\'' . $item['href'] . '\'>' . $item['link'] . '</a></li>';
        }
    } else {
        foreach ($menu as $item) {
            echo '<li style="display:inline;margin-right:15px;"><a href="' . $item['href'] . '">' . $item['link'] . '</a></li>';
        }
    }
    echo '</ul>';
}