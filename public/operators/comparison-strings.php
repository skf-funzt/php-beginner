<?php
$string1 = "apple";
$string2 = "banana";

// Print both strings
echo "String 1: $string1\n";
echo "<br>";
echo "String 2: $string2\n";
echo "<br>";

// Equal to
echo "Equal to:\n";
if ($string1 == $string2) {
  echo "The strings are equal.";
} else {
  echo "The strings are not equal.";
}

echo "<br>";

// Not equal to
echo "Not equal to:\n";
if ($string1 != $string2) {
  echo "The strings are not equal.";
} else {
  echo "The strings are equal.";
}

echo "<br>";

// Greater than
echo "Greater than:\n";
if ($string1 > $string2) {
  echo "The first string is greater than the second string.";
} else {
  echo "The first string is not greater than the second string.";
}

echo "<br>";

// Less than
echo "Less than:\n";
if ($string1 < $string2) {
  echo "The first string is less than the second string.";
} else {
  echo "The first string is not less than the second string.";
}

echo "<br>";

// Greater than or equal to
echo "Greater than or equal to:\n";
if ($string1 >= $string2) {
  echo "The first string is greater than or equal to the second string.";
} else {
  echo "The first string is not greater than or equal to the second string.";
}

echo "<br>";

// Less than or equal to
echo "Less than or equal to:\n";
if ($string1 <= $string2) {
  echo "The first string is less than or equal to the second string.";
} else {
  echo "The first string is not less than or equal to the second string.";
}
?>
