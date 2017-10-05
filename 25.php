<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
  $arr[$i] = rand(1, 100);
  $max = max($arr);
  $min = min($arr);
}
foreach ($arr as $key => $value) {
  if ($value == $max) {
    $id_max = $key;
  } elseif ($value == $min) {
    $id_min = $key;
  }
};
print_r($arr);
echo "<br>";
$buf = $arr[$id_max];
$arr[$id_max] = $arr[$id_min];
$arr[$id_min] = $buf;
print_r($arr);
