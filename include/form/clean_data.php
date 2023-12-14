<?php
function clean_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function get_cleaned_post(array $post): array {
  $cleaned_post = array();
  foreach($post as $key => $value) {
    $cleaned_post[$key] = clean_data($value);
  }
  return $cleaned_post;
}
