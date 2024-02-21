<?php
function countVowels($str) {
  // Declare a variable to store the formatted string
  $formattedStr = strtolower($str);
  // Declare a variable to store the number of vowels
  $count = 0;

  // Loop through the string
  for ($i = 0; $i < strlen($formattedStr); $i++) {
    // Declare a variable to store the current character
    $char = $formattedStr[$i];

    // If the current character is a vowel, increment the count
    if ($char === 'a' || $char === 'e' || $char === 'i' || $char === 'o' || $char === 'u') {
      $count++;
    }
  }

  // Return the number of vowels
  return $count;
}

// Testing the function
echo countVowels("Hello World"); // Output: 3
?>
