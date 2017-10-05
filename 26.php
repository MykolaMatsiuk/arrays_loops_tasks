<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
  $arr[$i] = rand(1, 100);
}

print_r($arr);
echo "<br><br>";

$result = 0;
foreach ($arr as $key => $value) {
  if ($key % 2 == 0 && $value > 0) {
    $even[] = $value;
    $result = array_product($even);
  } else {
    $odd[] = $value;
    echo $value . "<br>";
  }
}
