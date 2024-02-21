<?php
function fizzBuzzArray($num) {
  // Create an empty array to store the results
  $arr = [];

  // Loop through the numbers from 1 to the number passed in
  for ($i = 1; $i <= $num; $i++) {
    // If the number is divisible by 3 and 5, add 'FizzBuzz' to the array
    if ($i % 3 === 0 && $i % 5 === 0) {
      $arr[] = 'FizzBuzz';
    // If the number is divisible by 3, add 'Fizz' to the array
    } else if ($i % 3 === 0) {
      $arr[] = 'Fizz';
    // If the number is divisible by 5, add 'Buzz' to the array
    } else if ($i % 5 === 0) {
      $arr[] = 'Buzz';
    } else {
      // Otherwise, add the number to the array
      $arr[] = $i;
    }
  }

  return $arr;
}

// Testing the function
print_r(fizzBuzzArray(15)); // Output: [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"]
?>
