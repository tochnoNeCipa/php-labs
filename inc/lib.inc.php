<?php
function drawTable($cols, $rows, $color) {
    $cols = max(1, min(10, (int)$cols));
    $rows = max(1, min(10, (int)$rows));
    $color = htmlspecialchars($color, ENT_QUOTES, 'UTF-8');
    echo '<table border="1" cellpadding="10" cellspacing="0">';
    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $cols; $j++) {
            $number = $i * $j;
            if ($i === 1 || $j === 1) {
                echo '<th style="background-color: ' . $color . '; text-align: center;">' . $number . '</th>';
            } else {
                echo '<td>' . $number . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

function drawMenu($menu, $vertical = true) {
    echo $vertical ? '<ul>' : '<ul style="display: flex; gap: 20px; list-style: none;">';
    foreach ($menu as $item) {
        echo '<li><a href="' . htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($item['link'], ENT_QUOTES, 'UTF-8') . '</a></li>';
    }
    echo '</ul>';
}
