<?php
// Solution 1
function removeDuplicates($arr) {
  // Declare an empty array to store the unique values
  $uniqueArr = [];

  // Loop through the array that was passed in
  foreach ($arr as $element) {
    // If the current element is not in the unique array, add it
    if (!in_array($element, $uniqueArr)) {
      $uniqueArr[] = $element;
    }
  }

  // Return the unique array
  return $uniqueArr;
}

// Solution 2
function removeDuplicates2($arr) {
  // Use the array_unique function to remove duplicates
  return array_values(array_unique($arr));
}

// Testing the functions
$arr = [1, 2, 2, 3, 4, 4, 5];
print_r(removeDuplicates($arr)); // Output: [1, 2, 3, 4, 5]
?>
