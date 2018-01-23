<?php
/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/

function _hw($str)
{
  $len = intval(strlen($str));
  $a = $b = [];
  $c = ceil($len/2);
  for($i = 0; $i < $len; $i++)
  {
    if ($i < $c) {
      array_push($a, substr($str, $i, 1));
    }
    if ($i >= ($c % 2 == 0 ? $c - 1 : $c)) {
      array_push($b, substr($str, $i, 1));
    }
  }
  return intval(implode($a)) === intval(implode(array_reverse($b))) ? true : false;
}

$max = 999;
$min = 100;
$val = 0;
for ($i=$max; $i >= $min ; $i--) {
  for ($j=($i-1); $j >= $min ; $j--) {
    $temp = $i * $j;
    if (_hw($temp) > 0 && $temp > $val) {
      $val = $temp;
    }
  }
}
echo $val;
?>
