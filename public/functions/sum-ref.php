<?php
  function sum(&$num1, &$num2) {
    $num1 += 10;
    $num2 += 20;
    return $num1 + $num2;
  }

  $a = 5;
  $b = 10;
  $result = sum($a, $b);

  print("<pre>");
  echo "Result: " . $result . "\n";
  echo "Value of a: " . $a . "\n";
  echo "Value of b: " . $b . "\n";
  print("</pre>");
?>
