<?php
function validate($number, $digit) {
  if(gettype($number) == 'integer' && gettype($digit) == 'integer') {
    $count = 0;
    $numbers = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($numbers as $number) {
      if ($number == $digit) {
        $count++;
      }
    }
    return $count;
  } else {
    return "please enter correct numbers";
  }
};
$res = validate(593217381, 3);
echo $res;

/* если вводить число больше 9 знаков срабатывает else, как сделать так, чтоб
значение 'integer' было больше?*/
