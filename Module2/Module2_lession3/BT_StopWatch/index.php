<?php
include "Stopwatch.php";
$stopwatch=new Stopwatch();
$start=$stopwatch->start();
$array=[];
for ($i=0;$i<20000;$i++){
    array_push($array,rand(1,100));
}

for ($x = 0; $x < count($array); $x++) {
    for ($y = (count($array) - 1); $y > $x; $y--) {
        if ($array[$x] > $array[$y]) {
            $temp = $array[$y];
            $array[$y] = $array[$x];
            $array[$x] = $temp;
        }
    }
}
$stop=$stopwatch->stop();

echo $stopwatch->getElapsedTime();
