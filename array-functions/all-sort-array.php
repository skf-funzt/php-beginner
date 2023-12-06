<?php
  echo "<pre>";

  $arr = array(1, 4, 2, 5, 3, 6,); 
  print_r($arr);

  sort($arr); 
  echo("sort:\n"); print_r($arr);

  $arr = array(1, 4, 2, 5, 3, 6,);
  rsort($arr); 
  echo("rsort:\n"); print_r($arr);

  $arr = array(1, 4, 2, 5, 3, 6,);
  asort($arr); 
  echo("asort:\n"); print_r($arr);

  $arr = array(1, 4, 2, 5, 3, 6,);
  ksort($arr); 
  echo("ksort:\n"); print_r($arr);

  $arr = array(1, 4, 2, 5, 3, 6,);
  arsort($arr); 
  echo("arsort:\n"); print_r($arr);

  $arr = array(1, 4, 2, 5, 3, 6,);
  krsort($arr); 
  echo("krsort:\n"); print_r($arr);

  echo "</pre>";
?>