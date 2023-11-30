<?php
  ini_set('html_errors', 0);
  echo $a;
  throw new Exception('This is an exception');
?>