<?php
  print("\"Let's include that here\",\n"
    . "was the last thing he said.\n");
  include "this-file-does-not-exist.php";
  print("But in the end, it didn't matter.\n");
  require "this-file-does-not-exist.php";
  print("Because no one will know, how it ended.\n");
?>