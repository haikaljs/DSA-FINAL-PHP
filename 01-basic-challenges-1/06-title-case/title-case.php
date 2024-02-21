<?php
// Solution 1 - Using a for loop
function titleCase($str) {
  // Split the string into an array of words
  $words = explode(' ', strtolower($str));

  // Loop through the array of words
  for ($i = 0; $i < count($words); $i++) {
    // Capitalize the first letter of each word
    $words[$i] = ucfirst($words[$i]);
  }

  // Join the array of words into a string and return it
  return implode(' ', $words);
}

// Solution 2 - Using a regular expression
function titleCas2($str) {
  // Replace the first letter of each word with its uppercase equivalent
  return preg_replace_callback('/\b\w/', function($match) {
    return strtoupper($match[0]);
  }, strtolower($str));
}

// Testing the functions
echo titleCase("the quick brown fox"); // Output: The Quick Brown Fox
?>
