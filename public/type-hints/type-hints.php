<?php
  function addNumbers(int $a, int $b): int {
    return $a + $b;
  }

  $result = addNumbers(5, 10);
  echo "The result is: " . $result;

  echo "<br>";

  $result = addNumbers(5.5, 10.5);
  echo "The result is: " . $result;

  echo "<br>";

  $result = addNumbers([5.5], 10.5);
  echo "The result is: " . $result;


?>