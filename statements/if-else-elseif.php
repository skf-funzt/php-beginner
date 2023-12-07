<?php
$score = isset($_POST['score']) ? $_POST['score'] : 15;

if (isset($_POST['increase'])) {
  $score += 10;
}

if (isset($_POST['decrease'])) {
  $score -= 10;
  if ($score < 0) $score = 0;
}
?>

<h2>Score Counter</h2>

<p>Click "Increase" to increase the score by 10, or "Decrease" to decrease the score by 10.</p>

<form method="post">
  <input 
    type="hidden" 
    name="score" 
    value="<?php echo $score; ?>"
  >
  <input 
    type="submit" 
    name="increase" 
    value="Increase"
  >
  <input 
    type="submit" 
    name="decrease" 
    value="Decrease"
  >
</form>

<p>Score: <?php echo $score; ?></p>

<?php
if ($score >= 90) {
  echo "Excellent!";
} elseif ($score >= 80) {
  echo "Good job!";
} elseif ($score >= 70) {
  echo "Not bad!";
} else {
  echo "You can do better!";
}
?>