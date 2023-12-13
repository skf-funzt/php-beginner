<?php
print("<pre>");
$studentGrades = [
  "John" => 85,
  "Jane" => 90,
  "Bob" => 78,
  "Alice" => 92
];

foreach ($studentGrades as $student => $grade) {
  if ($grade >= 80) {
    echo "$student passed the semester with grade $grade\n";
  } else {
    echo "$student failed the semester\n";
  }
}

print("</pre>");
?>