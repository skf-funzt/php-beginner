<?php
  echo("<pre>");
  $array = ["Apple", "Banana", "Cherry"];

  array_push($array, "Date");
  print("array_push\n");
  print_r($array); 

  $lastElement = array_pop($array);
  print("array_pop\n"); 
  print_r($array); 
  echo $lastElement; 

  $firstElement = array_shift($array);
  print("array_shift\n");
  print_r($array); 
  echo $firstElement; 

  array_unshift($array, "Elderberry");
  print("array_unshift\n");
  print_r($array); 

  array_splice($array, 1, 0, "Fig");
  print("array_splice\n");
  print_r($array); 

  $filledArray = array_fill(0, 5, "Grape");
  print("array_fill\n");
  print_r($filledArray); 

  echo("</pre>");
?>