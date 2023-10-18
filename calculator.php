
<?php
function calculate() {
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    $result = "Деление на ноль невозможно";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Неверная операция";
                break;
        }

        return $result;
    }
}
?>