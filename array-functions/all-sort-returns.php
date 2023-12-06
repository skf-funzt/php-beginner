<?php
  echo "<pre>";
  $arr = array(1, 2, 3, 4, 5, 6);
  echo  "sort: ", sort($arr), "\n";
  echo "rsort: ", rsort($arr), "\n";
  echo "asort: ", asort($arr), "\n";
  echo "ksort: ", ksort($arr), "\n";
  echo "arsort: ", arsort($arr), "\n";
  echo "krsort: ", krsort($arr), "\n";

  $arr = array(
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
  );

  echo "sort: ", sort($arr), "\n";
  echo "rsort: ", rsort($arr), "\n";
  echo "asort: ", asort($arr), "\n";
  echo "ksort: ", ksort($arr), "\n";
  echo "arsort: ", arsort($arr), "\n";
  echo "krsort: ", krsort($arr), "\n";
  echo "</pre>";
?>