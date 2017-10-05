<?php
$days_arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = date('l');
foreach ($days_arr as $day_arr) {
  if ($day_arr == $day) {
    ?><i><?=$day_arr?>&nbsp;</i><?php
  } else {
    echo "{$day_arr} ";
  }
}
