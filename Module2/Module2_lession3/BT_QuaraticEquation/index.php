<?php
include "QuadraticEquation.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="index.php">
    <table>
        <tr>
            <td>a: <input type="number" name="a" value="<?php echo $a ?>"></td>
        </tr>
        <tr>
            <td>b: <input type="number" name="b" value="<?php echo $b ?>"></td>
        </tr>
        <tr>
            <td>c: <input type="number" name="c" value="<?php echo $c ?>"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
    <?php
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    $quadraticEquation->getDiscriminant();
    echo $quadraticEquation->root();
    ?>
</form>

</body>
</html>