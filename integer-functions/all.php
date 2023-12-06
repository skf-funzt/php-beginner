<?php
  echo "<pre>";
  // abs()
  $number = -10;
  $absoluteValue = abs($number);
  echo "Absolute value of $number is $absoluteValue\n";

  // pow()
  $base = 2;
  $exponent = 3;
  $result = pow($base, $exponent);
  echo "$base raised to the power of $exponent is $result\n";

  // sqrt()
  $number = 16;
  $squareRoot = sqrt($number);
  echo "Square root of $number is $squareRoot\n";

  // round()
  $number = 3.7;
  $roundedNumber = round($number);
  echo "Rounded value of $number is $roundedNumber\n";

  // rand()
  $randomNumber = rand(1, 10);
  echo "Random number between 1 and 10 is $randomNumber\n";

  // min()
  $numbers = [5, 2, 8, 1, 9];
  $minimumValue = min($numbers);
  echo "Minimum value in the list is $minimumValue\n";

  // max()
  $numbers = [5, 2, 8, 1, 9];
  $maximumValue = max($numbers);
  echo "Maximum value in the list is $maximumValue\n";

  // floor()
  $number = 3.7;
  $floorValue = floor($number);
  echo "Floor value of $number is $floorValue\n";

  // ceil()
  $number = 3.2;
  $ceilValue = ceil($number);
  echo "Ceiling value of $number is $ceilValue\n";

  echo "</pre>";
?>
