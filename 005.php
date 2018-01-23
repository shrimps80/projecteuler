<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

$num = 2520;
while (true) {
  $temp = 1;
  for ($i=1; $i <=20 ; $i++) {
    if ($num % $i != 0)
    {
      $temp = 0;
      break;
    }
  }
  if ($temp == 0)
  {
    $num++;
  } else
  {
    echo $num;
    break;
  }
}
?>
