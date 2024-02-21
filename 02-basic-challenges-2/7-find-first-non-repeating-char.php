<?php
// Solution 1
function findFirstNonRepeatingCharacter($str) {
  $charCount = [];

  // Count the occurrences of each character
  for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    $charCount[$char] = ($charCount[$char] ?? 0) + 1;
  }

  // Find the first non-repeating character
  for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if ($charCount[$char] === 1) {
      return $char;
    }
  }

  // If no non-repeating character is found, return null
  return null;
}

// Solution 2
function findFirstNonRepeatingCharacter2($str) {
  // Create a new associative array to store character counts
  $charCount = [];

  // Loop through the string
  for ($i = 0; $i < strlen($str); $i++) {
    // Get the current character
    $char = $str[$i];
    // If the character is already in the array, increment the count, otherwise set the count to 1
    $charCount[$char] = ($charCount[$char] ?? 0) + 1;
  }

  // Loop through the string
  for ($i = 0; $i < strlen($str); $i++) {
    // Get the current character
    $char = $str[$i];
    // If the count of the current character is 1, return the current character
    if ($charCount[$char] === 1) {
      return $char;
    }
  }

  // If no characters are repeated, return null
  return null;
}

// Testing the functions
$str1 = "total";
$str2 = "teeter";
$str3 = "stats";
echo findFirstNonRepeatingCharacter($str1) . "\n"; // Output: o
echo findFirstNonRepeatingCharacter($str2) . "\n"; // Output: r
echo findFirstNonRepeatingCharacter($str3) . "\n"; // Output: a
?>
