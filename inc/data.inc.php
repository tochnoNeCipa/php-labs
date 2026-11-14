<?php
date_default_timezone_set('Asia/Almaty');
$day = date('d');
$year = date('Y');
$months = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$mon = $months[(int)date('n')];
$hour = (int)date('H');
if ($hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour < 18) {
    $welcome = 'Добрый день';
} else {
    $welcome = 'Добрый вечер';
}
// Инициализация массива
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];
