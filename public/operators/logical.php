<?php
print("<pre>");

// Logical AND operator (&&)
$conditionTrue = true;
$conditionFalse = false;
$result1 = $conditionTrue && $conditionFalse;
echo "Logical AND: " . var_export($result1, true) . "\n";

// Logical OR operator (||)
$result2 = $conditionTrue || $conditionFalse;
echo "Logical OR: " . var_export($result2, true) . "\n";

// Logical NOT operator (!)
$result3 = !$conditionTrue;
echo "Logical NOT: " . var_export($result3, true) . "\n";

// Logical XOR operator (exclusive OR) (xor)
$result4 = $conditionTrue xor $conditionFalse;
echo "Logical XOR: " . var_export($result4, true) . "\n";

print("</pre>");
?>
