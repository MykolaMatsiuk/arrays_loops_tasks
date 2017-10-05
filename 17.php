<?php
$months_arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 
               'August', 'September', 'October', 'November', 'December'];
$month = 'October';
foreach ($months_arr as $value) : 
  if ($value == $month) {
    ?><strong><?=$value?>&nbsp;</strong><?php
  } else {
    echo "{$value} ";
  }
endforeach;
