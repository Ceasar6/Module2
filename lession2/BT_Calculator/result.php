
<?php
include 'function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_REQUEST["firstOperand"];
    $secondNumber = $_REQUEST["secondOperand"];
    $operator = $_REQUEST["operator"];

    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");


    switch ($operator) {
        case ADDITION:
            try {
                $result = sum($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case SUBTRACTION:
            try {
                $result = sub($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case MULTIPLICATION:
            try {
                $result = multi($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
        case DIVISION:

            try {
                $result = div($firstNumber, $secondNumber);
                printResult($firstNumber, $secondNumber, $operator, $result);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
            break;
    }

}
?>