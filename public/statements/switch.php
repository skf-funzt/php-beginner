<?php
// Initialize the schedule
$schedule = '';

if (isset($_POST['dayOfWeek'])) {
  // Get the selected day of the week
  $dayOfWeek = $_POST['dayOfWeek'];

  // Use a switch statement to set the schedule based 
  // on the day of the week
  switch ($dayOfWeek) {
    case 'Monday':
    case 'Tuesday':
    case 'Thursday':
      $schedule = '10:00 AM - 6:00 PM';
      break;
    case 'Wednesday':
    case 'Friday':
      $schedule = '9:00 AM - 5:00 PM';
      break;
    case 'Saturday':
    case 'Sunday':
      $schedule = 'Closed';
      break;
    default:
      $schedule = 'Invalid day';
      break;
  }
}
?>

<form method="post">
  <label for="dayOfWeek">Select a day:</label>
  <select name="dayOfWeek" id="dayOfWeek">
    <option value="">
      --Please choose an option--
    </option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
  <input type="submit" value="Submit">
</form>

<?php
if (!empty($schedule)) {
  // Display the schedule
  echo "The opening times for $dayOfWeek is: $schedule";
}
?>