<?php
$row = rand(3, 10);
$cols = rand(3, 10);
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo "<table border='1' cellspacing='5' cellpadding='5'>";
for ($tr = 1; $tr <= $row; $tr++) {
  echo "<tr>";
  for ($td = 1; $td <= $cols; $td++) {
    $number = rand();
    $color_num = array_rand($colors, 1);
    $color = $colors[$color_num];
    echo "<td style = 'background-color: {$color}'>" . $number . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
