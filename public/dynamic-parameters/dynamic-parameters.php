<?php
  function sum(int ...$numbers) {
    $total = 0;
    foreach ($numbers as $number) {
      $total += $number;
    }
    return $total;
  }
  
  $result1 = sum(1, 2, 3);
  $result2 = sum(4.2, 5.2, 6.2, 7.2);
  
  print("<pre>");
  echo "Result 1: $result1\n";
  echo "Result 2: $result2\n";
  print("</pre>");
?>