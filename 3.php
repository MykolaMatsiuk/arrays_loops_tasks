<?php
$array = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($array as $value) {
  $result += $value*$value;
};
echo $result;
