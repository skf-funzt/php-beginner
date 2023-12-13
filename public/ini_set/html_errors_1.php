<?php
  ini_set('html_errors', 1);
  echo $a;
  throw new Exception('This is an exception');
?>