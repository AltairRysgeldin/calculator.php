<!DOCTYPE html>
<html>
<head>
    <title>Простой калькулятор</title>
</head>
<body>
    <h2>Простой калькулятор</h2>
    <form method="post" action="/calculator.php">
        <input type="text" name="num1" placeholder="Число 1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <input type="text" name="num2" placeholder="Число 2">
        <input type="submit" name="calculate" value="Рассчитать">
    </form>
    <p>Результат: <?php echo calculate(); ?></p>
</body>
</html>