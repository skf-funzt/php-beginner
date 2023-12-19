<?php
// Validate the email
// Returns an array of errors
function validate_email(string $email): array
{
  $errors = [];
  if (empty($email)) {
    $errors[] = "Email cannot be blank.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is not valid.";
  }
  return $errors;
}