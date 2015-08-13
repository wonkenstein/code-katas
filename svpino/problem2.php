<?php
/**
 * Write a function that combines two lists by alternatingly taking elements.
 * For example: given the two lists [a, b, c] and [1, 2, 3],
 * the function should return [a, 1, b, 2, c, 3].
 */


function combineLists($list1, $list2) {

  $result = array();

  foreach ($list1 as $i => $v1) {
    $result[] = $v1;

    if (!empty($list2[$i])) {
      $result[] = $list2[$i];
    }
  }

  // append all of list2 if list2>list1
  $list2Count = count($list2);
  if ($i < ($list2Count-1)) {
    $i++;
    for ($i; $i<$list2Count; $i++) {
      $result[] = $list2[$i];
    }
  }

  return $result;
}

function combineLists2($list1, $list2) {

  $list1Count = count($list1);
  $list2Count = count($list2);
  $longerListCount = ($list1Count > $list2Count) ? $list1Count : $list2Count;

  $result = array();

  for ($i=0; $i<$longerListCount; $i++) {

    if (!empty($list1[$i])) {
      $result[] = $list1[$i];
    }

    if (!empty($list2[$i])) {
      $result[] = $list2[$i];
    }
  }

  return $result;
}


function displayResults($list1, $list2) {

  printf("combineLists [%s] [%s]\n",
    implode(',', $list1),
    implode(',', $list2)
  );

  printf("Result = [%s]\n",
    implode(',', combineLists($list1, $list2))
  );

  printf("Result2 = [%s]\n",
    implode(',', combineLists2($list1, $list2))
  );
}

/////////////////////
// main
$list1 = array(a,b,c);
$list2 = array(1,2,3);
displayResults($list1, $list2);

$list1 = array(a,b,c,d,e);
$list2 = array(1,2,3);
displayResults($list1, $list2);

$list1 = array(a,b,c);
$list2 = array(1,2,3,4,5);
displayResults($list1, $list2);
