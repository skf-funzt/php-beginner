<?php
print("<pre>");
$array1 = [1, 2, 3];
$array2 = [1, 2, 3];
$array3 = [1, 2, 4];

echo '$array1 == $array2: ', $array1 == $array2, "\n";
echo '$array1 == $array3: ', $array1 == $array3, "\n";

echo '$array1 === $array2: ', $array1 === $array2, "\n";
echo '$array1 === $array3: ', $array1 === $array3, "\n";

echo '$array1 != $array2: ', $array1 != $array2, "\n";
echo '$array1 != $array3: ', $array1 != $array3, "\n";

echo '$array1 <> $array2: ', $array1 <> $array2, "\n";
echo '$array1 <> $array3: ', $array1 <> $array3, "\n";

echo '$array1 !== $array2: ', $array1 !== $array2, "\n";
echo '$array1 !== $array3: ', $array1 !== $array3, "\n";

echo '$array1 < $array2: ', $array1 < $array2, "\n";
echo '$array1 < $array3: ', $array1 < $array3, "\n";

echo '$array1 > $array2: ', $array1 > $array2, "\n";
echo '$array1 > $array3: ', $array1 > $array3, "\n";

echo '$array1 <= $array2: ', $array1 <= $array2, "\n";
echo '$array1 <= $array3: ', $array1 <= $array3, "\n";

echo '$array1 >= $array2: ', $array1 >= $array2, "\n";
echo '$array1 >= $array3: ', $array1 >= $array3, "\n";

print("</pre>");
?>
