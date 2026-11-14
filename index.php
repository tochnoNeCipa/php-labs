
<?php
require_once __DIR__ . '/inc/lib.inc.php';
require_once __DIR__ . '/inc/data.inc.php';

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
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
</head>

<body style="margin:0; font-family:Arial, sans-serif; border-top:2px solid #2A4F6F;">

    <div id="header" style="padding:10px 20px; border-bottom:1px dotted #B2BCC6;">
        <!-- Верхняя часть страницы -->
        <?php include __DIR__ . '/inc/top.inc.php'; ?>
    </div>

    <div id="nav" style="position:absolute; top:85px; left:20px; width:210px;">
        <!-- Навигация -->
        <?php include __DIR__ . '/inc/menu.inc.php'; ?>
    </div>

    <div id="content" style="margin:30px 30px 30px 260px; min-height:400px; line-height:1.6;">

        <!-- Заголовок -->
        <h1 style="font-size:24px; font-weight:normal;">
            <?= htmlspecialchars($header, ENT_QUOTES, 'UTF-8') ?>
        </h1>

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
    </div>

    <div id="footer" style="clear:both; text-align:center; border-top:1px dotted #B2BCC6; padding:15px; color:#2A4F6F;">
        <!-- Нижняя часть страницы -->
        <?php include __DIR__ . '/inc/bottom.inc.php'; ?>
    </div>

</body>
</html>
