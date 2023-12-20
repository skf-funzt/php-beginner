<?php
// Set timeout period in seconds
ini_set('session.gc_maxlifetime', 3); // seconds

// Start a new session
session_start();

// Check if timeout variable is set
if(isset($_SESSION['timeout'])) {
  // Calculate session lifetime
  $sessionLifetime = time() - $_SESSION['timeout'];
  
  // Check if session has timed out
  if($sessionLifetime > ini_get('session.gc_maxlifetime')) {
    // Destroy session
    session_destroy();
    echo "Your session has timed out. Please log in again.";
  } else {
    echo "Your session is still active.";
  }
} else {
  echo "Starting new session.";
}

// Update timeout variable with current time
$_SESSION['timeout'] = time();