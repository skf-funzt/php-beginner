<?php
print("<pre>");

$age = 25;
$canVote = ($age >= 18) ? 'Yes' : 'No';
echo $canVote;
echo "\n";

$username = null;
$loggedInUser = $username ?? 'Guest';
echo $loggedInUser;

print("</pre>");
?>
