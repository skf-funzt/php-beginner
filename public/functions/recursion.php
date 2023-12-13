<?php

function countdown($num) {
  if ($num <= 0) {
    echo "Blastoff!";
  } else {
    echo $num . ", ";
    countdown($num - 1);
  }
}

$countdownNum = 5;
countdown($countdownNum);
?>
