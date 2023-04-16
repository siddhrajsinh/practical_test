<?php

function findSumOfTargetNumberIndex($numbers, $target)
{
    $n = count($numbers);
    $result = [];

    for ($i = 0; $i < (1 << $n); $i++) {
        $indices = [];
        $sum = 0;
        for ($j = 0; $j < $n; $j++) {
            if (($i & (1 << $j)) > 0) {
                $indices[] = $j;
                $sum += $numbers[$j];
            }
        }
        if ($sum == $target && count($indices) > 1) {
            $result[] = $indices;
        }
    }

    return $result;
}

$numbers = [2, 3, 10, 9, 20, 7, 15, 4, 8];
$target = 9;
echo "<b>Program 1 </b><br/>";
echo "<b>Result: </b></br><pre>";
print_r(findSumOfTargetNumberIndex($numbers, $target));
echo "</pre>";

?>
