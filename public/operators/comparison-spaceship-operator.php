<?php
print("<pre>");
$a = 5;
$b = 10;

// Comparing numbers
print("Comparing numbers\n");
echo '$a <=> $b: ', $a <=> $b , "\n"; // Output: -1 (left operand is less than the right operand)
echo '$b <=> $a: ', $b <=> $a , "\n"; // Output: 1 (left operand is greater than the right operand)
echo '$a <=> $a: ', $a <=> $a , "\n"; // Output: 0 (left operand is equal to the right operand)

// Comparing strings
print("Comparing strings\n");
$str1 = "apple";
$str2 = "banana";

echo '$str1 <=> $str2: ', $str1 <=> $str2 , "\n"; // Output: -1 (left operand is less than the right operand)
echo '$str2 <=> $str1: ', $str2 <=> $str1 , "\n"; // Output: 1 (left operand is greater than the right operand)
echo '$str1 <=> $str1: ', $str1 <=> $str1 , "\n"; // Output: 0 (left operand is equal to the right operand)

// Comparing arrays
print("Comparing arrays\n");
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

echo '$arr1 <=> $arr2: ', $arr1 <=> $arr2 , "\n"; // Output: -1 (left operand is less than the right operand)
echo '$arr2 <=> $arr1: ', $arr2 <=> $arr1 , "\n"; // Output: 1 (left operand is greater than the right operand)
echo '$arr1 <=> $arr1: ', $arr1 <=> $arr1 , "\n"; // Output: 0 (left operand is equal to the right operand)

print("</pre>");
?>
