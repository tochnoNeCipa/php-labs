<form action="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>" method="get">
    <?php if (isset($_GET['id'])): ?><input type="hidden" name="id" value="calc" /><?php endif; ?>
    <label>Число 1:</label><br />
    <input name="num1" type="text" /><br />
    <label>Оператор:</label><br />
    <input name="operator" type="text" /><br />
    <label>Число 2:</label><br />
    <input name="num2" type="text" /><br /><br />
    <input type="submit" value="Считать" />
</form>
