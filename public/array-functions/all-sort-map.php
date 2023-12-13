<?php
  echo "<pre>";
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  asort($arr2); echo("asort:\n"); print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  ksort($arr2); echo("ksort:\n"); print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  arsort($arr2); echo("arsort:\n"); print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  krsort($arr2); echo("krsort:\n"); print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  sort($arr2); echo("sort:\n"); print_r($arr2);
  
  $arr2 = array("red" => "cherry","green" => "apple","yellow" => "banana",);
  rsort($arr2); echo("rsort:\n"); print_r($arr2);
  
  echo "</pre>";
?>