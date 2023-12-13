<?php

function sum($num1, $num2) {
  return $num1 + $num2;
}

function multiply($num1, $num2) {
  return $num1 * $num2;
}

function square($num) {
  return $num * $num;
}

function isEven($num) {
  return $num % 2 == 0;
}

echo "<pre>";
echo "Sum of 5 and 3 is: " . sum(5, 3) . "\n";
echo "Product of 4 and 2 is: " . multiply(4, 2) . "\n";
echo "Square of 6 is: " . square(6) . "\n";
echo "Is 10 even? " . (isEven(10) ? "Yes" : "No") . "\n";
echo "</pre>";
?>
