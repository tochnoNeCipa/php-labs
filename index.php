<?php
require_once __DIR__ . '/inc/lib.inc.php';
require_once __DIR__ . '/inc/data.inc.php';

// Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim((string)($_GET['id'] ?? ''))));
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
    <meta charset="utf-8" />
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div id="header">
        <!-- Верхняя часть страницы -->
        <?php include __DIR__ . '/inc/top.inc.php'; ?>
        <!-- Верхняя часть страницы -->
    </div>
    <div id="content">
        <!-- Заголовок -->
        <h1><?= htmlspecialchars($header, ENT_QUOTES, 'UTF-8') ?></h1>
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <?php
        switch ($id) {
            case 'about':
                include __DIR__ . '/about.php';
                break;
            case 'contact':
                include __DIR__ . '/contact.php';
                break;
            case 'table':
                include __DIR__ . '/table.php';
                break;
            case 'calc':
                include __DIR__ . '/calc.php';
                break;
            default:
                include __DIR__ . '/inc/index.inc.php';
        }
        ?>
        <!-- Область основного контента -->
    </div>
    <div id="nav">
        <!-- Навигация -->
        <?php include __DIR__ . '/inc/menu.inc.php'; ?>
        <!-- Навигация -->
    </div>
    <div id="footer">
        <!-- Нижняя часть страницы -->
        <?php include __DIR__ . '/inc/bottom.inc.php'; ?>
        <!-- Нижняя часть страницы -->
    </div>
</body>
</html>
