<?php
// Solution 1
function areAllCharactersUnique($str) {
  // Create an array to keep track of characters
  $charSet = [];

  // Loop through the string
  for ($i = 0; $i < strlen($str); $i++) {
    // Get the current character
    $char = $str[$i];
    // If the character is already in the array, return false
    if (in_array($char, $charSet)) {
      return false;
    }
    // Add the current character to the array
    $charSet[] = $char;
  }

  // If no characters are repeated, return true
  return true;
}

// Solution 2
function areAllCharactersUnique2($str) {
  // Create an empty array to keep track of characters
  $charCount = [];

  // Loop through the string
  for ($i = 0; $i < strlen($str); $i++) {
    // Get the current character
    $char = $str[$i];
    // If the character is already in the array, return false
    if (isset($charCount[$char])) {
      return false;
    }
    // Add the current character to the array
    $charCount[$char] = true;
  }

  // If no characters are repeated, return true
  return true;
}

// Testing the functions
$str1 = "abcdefg";
$str2 = "hello";
$str3 = "world";
echo areAllCharactersUnique($str1) ? "True\n" : "False\n"; // Output: True
echo areAllCharactersUnique($str2) ? "True\n" : "False\n"; // Output: False
echo areAllCharactersUnique($str3) ? "True\n" : "False\n"; // Output: False
?>
