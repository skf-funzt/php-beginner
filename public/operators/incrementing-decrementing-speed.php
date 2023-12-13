<?php
print("<pre>");
const iterations = 9999999;
const runs = 20;
$totalPreIncrementTime = 0;
$totalPostIncrementTime = 0;
$preIncrementTimes = [];
$postIncrementTimes = [];

print("Iterations: " . iterations . "\n");
print("Runs: " . runs . "\n\n");

for ($run = 1; $run <= runs; $run++) {
  $start = microtime(true);

  // Pre-increment operator
  for ($i = 0; $i < iterations; ++$i) {
    // Do nothing
  }

  $end = microtime(true);
  $preIncrementTime = $end - $start;
  $totalPreIncrementTime += $preIncrementTime;
  $preIncrementTimes[] = $preIncrementTime;

  $start = microtime(true);

  // Post-increment operator
  for ($i = 0; $i < iterations; $i++) {
    // Do nothing
  }

  $end = microtime(true);
  $postIncrementTime = $end - $start;
  $totalPostIncrementTime += $postIncrementTime;
  $postIncrementTimes[] = $postIncrementTime;

  echo "Run " . $run . ":\n";
  echo "Time taken for pre-increment: " . $preIncrementTime . " seconds\n";
  echo "Time taken for post-increment: " . $postIncrementTime . " seconds\n\n";
}

$averagePreIncrementTime = $totalPreIncrementTime / runs;
$averagePostIncrementTime = $totalPostIncrementTime / runs;

$preIncrementVariance = 0;
foreach ($preIncrementTimes as $time) {
  $preIncrementVariance += pow($time - $averagePreIncrementTime, 2);
}
$preIncrementVariance /= runs;

$postIncrementVariance = 0;
foreach ($postIncrementTimes as $time) {
  $postIncrementVariance += pow($time - $averagePostIncrementTime, 2);
}
$postIncrementVariance /= runs;

echo "Average time taken for pre-increment: " . $averagePreIncrementTime . " seconds\n";
echo "Average time taken for post-increment: " . $averagePostIncrementTime . " seconds\n";
echo "Variance for pre-increment: " . $preIncrementVariance . "\n";
echo "Variance for post-increment: " . $postIncrementVariance . "\n";

print("</pre>");
?>