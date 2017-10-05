<?php
$arr = [];
for ($i = 0; $i < 12; $i++) {
  $arr[$i] = 'x';
};

for ($j = 0; $j < count($arr); $j++) {
  for ($k = 0; $k < $j; $k++) {
    if ($j % 2 == 0) {
      echo "{$arr[$k]} ";
    }
  }
  echo "<br>";
}
