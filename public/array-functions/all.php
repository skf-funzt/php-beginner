<?php
  echo "<pre>";
  
  $arr = array(1, 2, 3, 4, 5, 6);

  echo("\ncount:\n"), count($arr);
  echo("\narray_merge:\n"); print_r(array_merge($arr, array(7, 8, 9, 10))); echo("\n");
  echo("\narray_search:\n"), array_search(5, $arr);
  echo("\narray_keys:\n"); print_r(array_keys($arr)); echo("\n");
  echo("\narray_values:\n"); print_r(array_values($arr)); echo("\n");
  echo("\narray_unique:\n"); print_r(array_unique(array_merge($arr, array(1, 2, 3, 4, 5)))); echo("\n");
  echo("\narray_reverse:\n"); print_r(array_reverse($arr)); echo("\n");
  echo("\narray_rand:\n"), array_rand($arr);
  echo("\narray_slice:\n"), print_r(array_slice($arr, 2, 4));
  echo("\narray_sum:\n"), array_sum($arr);

  echo("</pre>");
?>