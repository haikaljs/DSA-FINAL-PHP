<?php
function findMissingNumber($arr) {
  // If the array is empty or undefined, return null
  if (!$arr || count($arr) === 0) {
    return null;
  }
  // Add 1 to the length of the array to account for the missing number
  $n = count($arr) + 1;
  // Calculate the expected sum of the numbers from 1 to n
  $expectedSum = ($n * ($n + 1)) / 2;
  // Calculate the actual sum of the numbers in the array
  $actualSum = array_sum($arr);
  // Return the difference between the expected sum and the actual sum
  return $expectedSum - $actualSum;
}

// Testing the function
$arr1 = [1, 2, 3, 4, 6];
$arr2 = [];
$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo findMissingNumber($arr1) . "\n"; // Output: 5
echo findMissingNumber($arr2) . "\n"; // Output: null
echo findMissingNumber($arr3) . "\n"; // Output: null
?>
