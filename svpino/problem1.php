<?php
/**
 * Write three functions that compute the sum of the numbers in a given list
 * using a for-loop, a while-loop, and recursion.
 */

function sumForLoop($list) {
  $length = count($list);

  $sum = 0;
  for ($i=0; $i<$length; $i++) {
    $sum += $list[$i];
  }
  return $sum;
}


function sumWhileLoop($list) {
  $length = count($list);
  $sum = 0;
  $i=0;

  while ($i<$length) {
    $sum += $list[$i];
    $i++;
  }

  return $sum;
}


function sumRecursion($list) {

  if (count($list)) {
    $p = array_pop($list);
    return $p + sumRecursion($list);
  }

  return 0;
}

/////////////////////
// main
$list = array(2,3,5,8,6,1); // = 24

echo 'sumForLoop=', sumForLoop($list), "\n";
echo 'sumWhileLoop=', sumWhileLoop($list), "\n";
echo 'sumRecursion=', sumRecursion($list), "\n";
