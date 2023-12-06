<?php
  ini_set('ignore_repeated_errors', 1); // Ignore repeated errors

  // This will cause a notice error
  for ($i = 0; $i < 5; $i++) {
      echo $undefinedVariable;
  }
?>