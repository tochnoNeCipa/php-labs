
<?php

function drawTable($cols, $rows, $color) {
    $cols = max(1, (int)$cols);
    $rows = max(1, (int)$rows);
    $color = htmlspecialchars($color, ENT_QUOTES, 'UTF-8');

    echo '<table border="1" cellpadding="10" cellspacing="0">';

    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';

        for ($j = 1; $j <= $cols; $j++) {
            $number = $i * $j;

            if ($i == 1 || $j == 1) {
                echo '<th style="background-color:' . $color . '; text-align:center;">'
                    . $number . '</th>';
            } else {
                echo '<td style="text-align:center;">' . $number . '</td>';
            }
        }

        echo '</tr>';
    }

    echo '</table>';
}

function drawMenu($menu, $vertical = true) {
    if ($vertical) {
        echo '<ul style="list-style:none; padding:0; margin:0;">';
    } else {
        echo '<ul style="display:flex; gap:20px; list-style:none; padding:0;">';
    }

    foreach ($menu as $item) {
        $href = htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8');
        $link = htmlspecialchars($item['link'], ENT_QUOTES, 'UTF-8');

        $style = $vertical
            ? 'padding:8px 0; border-bottom:1px dotted #B2BCC6;'
            : 'display:inline-block;';

        echo '<li style="' . $style . '">';
        echo '<a href="' . $href . '" style="color:#2A4F6F; text-decoration:none;">';
        echo $link;
        echo '</a>';
        echo '</li>';
    }

    echo '</ul>';
}

?>
