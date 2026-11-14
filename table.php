<?php
if (!function_exists('drawTable')) {
    require_once __DIR__ . '/inc/lib.inc.php';
}
$cols = 10;
$rows = 10;
$color = 'yellow';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cols = abs((int)($_POST['cols'] ?? 10));
    $rows = abs((int)($_POST['rows'] ?? 10));
    $color = trim(strip_tags((string)($_POST['color'] ?? 'yellow')));
}
$cols = $cols ?: 10;
$rows = $rows ?: 10;
$color = $color ?: 'yellow';
$cols = min($cols, 10);
$rows = min($rows, 10);
// Разрешаем безопасные имена цветов и шестнадцатеричные CSS-цвета
if (!preg_match('/^(?:[a-zA-Z]{3,20}|#[0-9a-fA-F]{3}|#[0-9a-fA-F]{6})$/', $color)) {
    $color = 'yellow';
}
?>
<form action="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>" method="POST">
    <label>Количество колонок:</label><br />
    <input name="cols" type="number" min="1" max="10" value="<?= $cols ?>" /><br />
    <label>Количество строк:</label><br />
    <input name="rows" type="number" min="1" max="10" value="<?= $rows ?>" /><br />
    <label>Цвет:</label><br />
    <input name="color" type="text" value="<?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?>" /><br /><br />
    <input type="submit" value="Создать" />
</form>
<!-- Таблица -->
<?php drawTable($cols, $rows, $color); ?>
<!-- Таблица -->
