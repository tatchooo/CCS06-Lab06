<?php
for ($year = 4; $year <= 2024; $year++) {
  if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) { // checks if the year is a leap year
    echo $year . "<br>";
  }
}
?>
