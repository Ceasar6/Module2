<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Use Method</title>
</head>
<body>
<h2>Use Method</h2>
<?php
$intNumber = [1,2,3,4,5,6,7,8,9,10,11,12];
function findMinArr($array)
{
    $min = [0];
    $index = 0;
    $length = count($array);
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
            $index = $i;
        }
    }
    return $index;
}

echo "Result: ".findMinArr($intNumber);

?>

</body>
</html>
