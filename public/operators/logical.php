<?php
print("<pre>");

// Logical AND operator (&&)
$condition1 = true;
$condition2 = false;
$result1 = $condition1 && $condition2;
echo "Logical AND: " . var_export($result1, true) . "\n";

// Logical OR operator (||)
$result2 = $condition1 || $condition2;
echo "Logical OR: " . var_export($result2, true) . "\n";

// Logical NOT operator (!)
$result3 = !$condition1;
echo "Logical NOT: " . var_export($result3, true) . "\n";

// Logical XOR operator (exclusive OR) (xor)
$result4 = $condition1 xor $condition2;
echo "Logical XOR: " . var_export($result4, true) . "\n";

print("</pre>");
?>
