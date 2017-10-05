<?php
$days_arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$weekend1 = 'Saturday';
$weekend2 = 'Sunday';
foreach ($days_arr as $day) {
  if ($day == $weekend1 || $day == $weekend2) {
    ?><strong><?=$day?>&nbsp;</strong><?php
  } else {
    echo "{$day} ";
  }
}

/* хотел написать вот такой код:
$days_arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$weekend = ['Saturday', 'Sunday'];
foreach ($days_arr as $day) {
  foreach ($weekend as $day1) {
    if ($day == $day1) {
      ?><strong><?=$day?>&nbsp;</strong><?php
    } else {
      echo "{$day} ";
    }
  }
}
но выводит повторно все дни, может Вы подскажите как этот код довести до ума, спасибо заранее
*/
