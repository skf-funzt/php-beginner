<?php
print("<pre>");

// Pre-increment operator
$x = 15;
echo "Pre-increment operator:\n";
echo "Original value of x: " . $x . "\n";
echo "After pre-increment: " . ++$x . "\n";
echo "Final value of x: " . $x . "\n\n";

// Post-increment operator
$y = 10;
echo "Post-increment operator:\n";
echo "Original value of y: " . $y . "\n";
echo "After post-increment: " . $y++ . "\n";
echo "Final value of y: " . $y . "\n\n";

// Pre-decrement operator
$a = 15;
echo "Pre-decrement operator:\n";
echo "Original value of a: " . $a . "\n";
echo "After pre-decrement: " . --$a . "\n";
echo "Final value of a: " . $a . "\n\n";

// Post-decrement operator
$b = 20;
echo "Post-decrement operator:\n";
echo "Original value of b: " . $b . "\n";
echo "After post-decrement: " . $b-- . "\n";
echo "Final value of b: " . $b . "\n";

print("</pre>");
?>
