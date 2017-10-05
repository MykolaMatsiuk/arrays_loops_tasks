<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($arr as $value) {
  $count++;
  if ($count % 3 == 0) {
    echo "{$value}<br>";
  } else {
    echo "{$value}, ";
  }
}
