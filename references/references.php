<?php
  $x = 1337;
  $y = &$x;
  $z = $x;
  echo "x: ", $x, "<br>";
  echo "y: ", $y, "<br>";
  echo "z: ", $z, "<br>";
  print('<br>');
  $x = 42;
  echo "x: ", $x, "<br>";
  echo "y: ", $y, "<br>";
  echo "z: ", $z, "<br>";
?>