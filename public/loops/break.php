<pre>
<?php

for ($i = 1; $i <= 10; $i++) {
  if ($i === 5) {
    break;
  }
  echo $i . " ";
}

echo "\n";

$num = 1;
while ($num <= 10) {
  if ($num === 7) {
    break;
  }
  echo $num . " ";
  $num++;
}

?>
</pre>
