<?php
// Solution 1
function findMissingLetter($arr) {
  // Create a string of the alphabet
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  // Find the index of the first letter in the array in the alphabet string
  $startIndex = strpos($alphabet, $arr[0]);

  // Loop through the array
  for ($i = 0; $i < count($arr); $i++) {
    // If the current letter in the array is not the same as the current letter in the alphabet string, return the current letter in the alphabet string
    if ($arr[$i] !== $alphabet[$startIndex + $i]) {
      return $alphabet[$startIndex + $i];
    }
  }

  // If no letter is missing, return an empty string
  return '';
}

// Solution 2
function findMissingLetter2($arr) {
  // Find the char code of the first letter in the array
  $start = ord($arr[0]);
  // Loop through the array
  for ($i = 1; $i < count($arr); $i++) {
    // Find the char code of the current letter in the array
    $current = ord($arr[$i]);
    // If the difference between the current char code and the start char code is greater than 1, return the letter that is missing
    if ($current - $start > 1) {
      // Convert the char code to a letter
      return chr($start + 1);
    }
    // Update the start char code
    $start = $current;
  }
  // If no letter is missing, return an empty string
  return '';
}

// Testing the functions
$arr1 = ['a', 'b', 'd', 'e'];
$arr2 = ['X', 'Z'];
echo findMissingLetter($arr1) . "\n"; // Output: c
echo findMissingLetter($arr2) . "\n"; // Output: Y
?>
