<pre>
<?php
  function findNumber($numbers, $target) {
    foreach ($numbers as $number) {
      if ($number === $target) {
        return true; 
      }
    }
    return false; 
  }

  $numbers = [1, 2, 3, 4, 5];
  $target = 3;

  if (findNumber($numbers, $target)) {
    echo "Target number found!";
  } else {
    echo "Target number not found!";
  }
?>
</pre>
