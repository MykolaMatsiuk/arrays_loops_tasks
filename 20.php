<?php
$arr = [];
for ($i = 0; $i < 20; $i++) {
  $arr[$i] = 'x';
};
for ($i = 0; $i < sizeof($arr); $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "{$arr[$j] }";
  }
  echo "<br>";
}
