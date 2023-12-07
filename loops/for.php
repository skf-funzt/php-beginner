<?php
print("<pre>");
$users = [
  "user1@example.com", 
  "user2@example.com", 
  "user3@example.com",
];

for ($i = 0; $i < count($users); $i++) {
  $user = $users[$i];
  // Simulate sending email
  echo "Email sent to: $user\n";
}

print("</pre>");
?>