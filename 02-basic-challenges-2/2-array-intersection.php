<?php
// Solution 1
function arrayIntersection($arr1, $arr2) {
  // Declare an empty array to store the intersection
  $intersection = [];

  // Loop through arr1
  foreach ($arr1 as $element) {
    // If the current element is in arr2 and not already in the intersection array, add it
    if (in_array($element, $arr2) && !in_array($element, $intersection)) {
      $intersection[] = $element;
    }
  }

  return $intersection;
}

// Solution 2
function arrayIntersection2($arr1, $arr2) {
  // Create a set from arr1
  $set1 = array_flip($arr1);
  // Declare an empty array to store the intersection
  $intersection = [];

  // Loop through arr2
  foreach ($arr2 as $num) {
    // If the current number is in set1, add it to the intersection array
    if (isset($set1[$num])) {
      $intersection[] = $num;
    }
  }

  return $intersection;
}

// Testing the functions
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
print_r(arrayIntersection($arr1, $arr2)); // Output: [3, 4, 5]
?>
