<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

*/
$val = 0;
$num = 600851475143;
for ($i = 2; $i <= $num; $i++) {
  if ($num % $i==0)
  {
    for ($j = 2; $i % $j; $j++) {
      while($num % $i==0)
      {
        $val = $i;
        $num = $num / $i;
      }
    }
  }
}
echo $val;
?>
