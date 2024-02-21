<?php
// Solution 1
function isPalindrome($str) {
  // Remove all non-alphanumeric characters and convert the string to lowercase
  $formattedStr = preg_replace('/[^a-z0-9]/', '', strtolower($str));
  // Reverse the string
  $reversedStr = strrev($formattedStr);
  // Return whether the formatted string is equal to the reversed string
  return $formattedStr === $reversedStr;
}

// Solution 2
function isPalindrome2($str) {
  // Remove all non-alphanumeric characters and convert the string to lowercase
  $formattedStr = removeNonAlphanumeric(strtolower($str));

  // Reverse the string
  $reversedStr = strrev($formattedStr);

  // Return whether the formatted string is equal to the reversed string
  return $formattedStr === $reversedStr;
}

// Helper functions
function removeNonAlphanumeric($str) {
  // Remove all non-alphanumeric characters using regular expression
  return preg_replace('/[^a-z0-9]/', '', $str);
}

// Testing the functions
echo isPalindrome("A man, a plan, a canal, Panama"); // Output: true
?>
