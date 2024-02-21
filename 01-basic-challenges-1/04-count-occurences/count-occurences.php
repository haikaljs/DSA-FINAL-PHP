<?php
// Solution 1
function countOccurrences($str, $char) {
  // Declare a variable to store the number of occurrences
  $count = 0;

  // Loop through the string
  for ($i = 0; $i < strlen($str); $i++) {
    // If the current character is the same as the character we're looking for, increment the count
    if ($str[$i] === $char) {
      $count++;
    }
  }

  // Return the number of occurrences
  return $count;
}

// Solution 2
function countOccurrences2($str, $char) {
  // Split the string on the character and return the length of the resulting array minus 1
  return count(explode($char, $str)) - 1;
}

// Testing the functions
echo countOccurrences("hello world", "o"); // Output: 2
?>
