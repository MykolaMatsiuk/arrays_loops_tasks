<?php
$n = 1000;
$num = 0;
do {
  $n /= 2;
  $num++;
} while ($n > 50);
echo "{$n}<br>";
echo $num;
