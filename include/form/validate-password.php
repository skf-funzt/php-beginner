<?php
// Validate the password
// Returns an array of errors
function validate_password(string $password, string $passwordVerify): array
{
  $errors = [];
  if (empty($password)) {
    $errors[] = "Password cannot be blank.";
  }
  if (empty($passwordVerify)) {
    $errors[] = "Password verification cannot be blank.";
  }
  if ($password !== $passwordVerify) {
    $errors[] = "Passwords do not match.";
  }
  // Check if the password is
  // - At least 8 characters long
  // - Contains at least one number
  // - Contains at least one special character
  // - Contains at least one uppercase letter
  // - Contains at least one lowercase letter
  // Example: Password1!
  $pattern = "/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])(?=.*[a-z]).{8,}$/";
  if (!preg_match($pattern, $password)) {
    $errors[] = "Password must be at least 8 characters long and contain at least one number, one special character, one uppercase letter and one lowercase letter.";
  }
  return $errors;
}
