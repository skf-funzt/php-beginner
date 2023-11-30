<?php
  echo $GLOBALS['z'];
  echo $z;

  $x = 75;
  $y = 25;

  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

  echo $z;

  // Some other part of the program

  $GLOBALS['z'] = 1337;

  echo $z;
?>