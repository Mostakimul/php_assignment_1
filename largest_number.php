<?php
$num1 = 57;
$num2 = 23;
$num3 = 80;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

echo "The largest number is $largest";
?>
