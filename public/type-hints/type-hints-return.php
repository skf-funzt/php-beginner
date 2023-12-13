<?php
  function addNumbers(int $a, int $b): int {
    return $a + $b;
  }

  $result = addNumbers(5, 10);
  echo "The result is: " . $result;

  print("<br>");

  function returnAsArray(int $a, int $b): int {
    return [$a, $b];
  }

  $result = returnAsArray(5, 10);
  echo "The result is: " . $result;
?>