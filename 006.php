<?php
/*
The sum of the squares of the first ten natural numbers is,

12 + 22 + ... + 102 = 385
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)2 = 552 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
*/
$a = 0;
$b = 0;
for ($i=1; $i <= 100 ; $i++) {
  $a +=$i;
  $b += $i ** 2;
}
echo ($a ** 2 - $b);
?>
