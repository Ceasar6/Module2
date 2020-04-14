<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td> Inventment Amount:</td>
            <td><input type="text" name="inventmentAmount" placeholder="0">
            </td>
        </tr>
        <tr>
            <td>Yearly Interest Rate:</td>
            <td><input type="text" name="yearlyInterestRate" placeholder="0">
            </td>
        </tr>
        <tr>
            <td> Number of Years:
            </td>
            <td><input type="text" name="numberOfYears" placeholder="0">
            </td>
        </tr>
    </table>

    <input type="submit" name="Tính">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["inventmentAmount"];
    $rate = $_POST["yearlyInterestRate"] / 100;
    $year = $_POST["numberOfYears"];
    $rateSum = 0;

    for ($num = 0; $num <= $year; $num++) {
        $rateSum = $amount + ($amount * $rate);
        $amount = $rateSum;
    }
    echo $rateSum;
}
?>

</body>
</html>
