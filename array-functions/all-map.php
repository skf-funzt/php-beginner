<?php
  echo "<pre>";
  $arr = array("red" => "cherry","green" => "apple","yellow" => "banana",);

  echo "count:\n", count($arr), "\n\n";
  echo "array_merge:\n", print_r(array_merge($arr, array(7, 8, 9, 10))), "\n\n";
  echo "array_search:\n", array_search("apple", $arr), "\n\n";
  echo "array_keys:\n", print_r(array_keys($arr)), "\n\n";
  echo "array_values:\n", print_r(array_values($arr)), "\n\n";
  echo "array_unique:\n", print_r(array_unique(array_merge($arr, array(1, 2, 3, 4, 5)))), "\n\n";
  echo "array_reverse:\n", print_r(array_reverse($arr)), "\n\n";
  echo "array_rand:\n", array_rand($arr), "\n\n";
  echo "array_slice:\n", print_r(array_slice($arr, 2, 4)), "\n\n";
  echo "array_sum:\n", array_sum($arr), "\n\n";
  echo "</pre>"
?>