<?php
// Solution 1 - Using the spread operator
function findMaxNumber($arr) {
  // Using the spread operator (...) to pass array elements as arguments to the max function
  return max(...$arr);
}

// Solution 2
function findMaxNumber2($arr) {
  // Declare a variable to store the maximum number. Initialize it to the first element in the array
  $max = $arr[0];

  // Loop through the array starting from the second element
  for ($i = 1; $i < count($arr); $i++) {
    // If the current element is greater than the maximum number, update the maximum number
    if ($arr[$i] > $max) {
      $max = $arr[$i];
    }
  }

  // Return the maximum number
  return $max;
}

// Testing the functions
$arr = [5, 3, 9, 2, 8];
echo findMaxNumber($arr); // Output: 9
?>
