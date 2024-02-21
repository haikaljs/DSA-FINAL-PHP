<?php
// Solution 1
function reverseString($str) {
  // Split the string into an array of characters, reverse the array, and join the array into a string
  return implode('', array_reverse(str_split($str)));
}

// Solution 2
function reverseString2($str) {
  // Declare a variable to store the reversed string
  $reversed = '';

  // Loop through the string backwards
  for ($i = strlen($str) - 1; $i >= 0; $i--) {
    // Add each character to the reversed string
    $reversed .= $str[$i];
  }

  // Return the reversed string
  return $reversed;
}

// Testing the functions
echo reverseString("hello"); // Output: olleh
?>
