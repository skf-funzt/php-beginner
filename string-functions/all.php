<?php
  echo "<pre>";
  $str = "    Look mom! No hands!    ";

  echo "\n\n", $str, "\n\n";

  echo "strlen: ", strlen($str), "\n";
  echo "str_word_count: ", str_word_count($str), "\n";
  echo "strrev: ", strrev($str), "\n";
  echo "strpos: ", strpos($str, "World"), "\n";
  echo "str_replace: ", str_replace("World", "Everyone", $str), "\n";
  echo "strtolower: ", strtolower($str), "\n";
  echo "strtoupper: ", strtoupper($str), "\n";
  echo "ucfirst: ", ucfirst($str), "\n";
  echo "ucwords: ", ucwords($str), "\n";
  echo "trim: ", trim($str), "\n";
  echo "strstr: ", strstr($str, "How"), "\n";
  echo "strstr: ", strstr($str, "How", true), "\n";

  echo "</pre>";
?>
