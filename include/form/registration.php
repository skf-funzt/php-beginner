<?php
include_once('validate-email.php');
include_once('validate-password.php');
include_once('clean_data.php');

// Validate the form
// Returns an array of errors where every element is a clear error message
function validate(array $post): array
{
  // Clean the post data
  $post = get_cleaned_post($post);

  $errors = [];

  if (empty($post['name'])) {
    $errors[] = "Name cannot be blank.";
  }
  
  $errors = array_merge($errors, validate_password($post['pwd'], $post['pwd-verify']));

  $errors = array_merge($errors, validate_email($post['email']));

  return $errors;
}

// Create the error template as a HTML formatted string
//! Note: Can be done inline, to keep the template in one place
function create_error_template($errors): string
{
  $html = "<div id='message'>";

  foreach ($errors as $error) {
    $html .= "<p class='error'>{$error}</p>";
  }

  $html .= "</div>";
  return $html;
}

// Create the success template as a HTML formatted string
//! Note: Can be done inline, to keep the template in one place
function create_sucess_template($name): string
{
  $html = "<div id='message'>";
  $html .= "<p class='sucess'>Welcome {$name}!</p>";
  $html .= "</div>";
  return $html;
}
