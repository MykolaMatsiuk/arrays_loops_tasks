<?php
function sum($a) {
  if (gettype($a) == 'integer') {
    $numbers = preg_split('//', $a, -1, PREG_SPLIT_NO_EMPTY);
    $result = 0;
    foreach ($numbers as $number) {
      $result += $number;
    }
  } else {
    $result = 'enter correct number';
  }
  return $result;
}
$res = sum(123);
echo $res;
