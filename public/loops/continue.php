<pre>
<?php
  $fruits = ['apple', 'banana', 'orange', 'grape', 'kiwi'];

  foreach ($fruits as $fruit) {
    if ($fruit === 'orange') {
      continue; 
    }
    echo $fruit . PHP_EOL;
  }
?>
</pre>
