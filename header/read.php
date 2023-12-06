<?php
  echo "<pre>";
  // Print all old headers from the query parameter old_headers JSON encoded
  if (isset($_GET['old_headers'])) {
    $old_headers = json_decode($_GET['old_headers']);
    print("Old headers:\n");
    var_dump($old_headers);
  }
  // Print all current headers from the query parameter current_headers JSON encoded
  if (isset($_GET['current_headers'])) {
    $current_headers = json_decode($_GET['current_headers']);
    print("Current headers:\n");
    var_dump($current_headers);
  }
  // Print all HTTP headers
  var_dump(getallheaders());
  echo "</pre>";
?>