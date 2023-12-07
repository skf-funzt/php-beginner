<?php
print("<pre>");
echo "While Loop:\n";
$count = 5;
while ($count-- >= 0) {
  echo "Count is: $count\n";
  $count--;
}

echo "\nDo-While Loop:\n";
$count = 5;
do {
  echo "Count is: $count\n";
  $count--;
} while ($count-- >= 0);

echo "</pre>";
?>