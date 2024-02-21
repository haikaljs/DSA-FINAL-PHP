<?php
// Solution 1
function formatPhoneNumber($numbers) {
  // Get the first 3 numbers and join them together
  $areaCode = implode('', array_slice($numbers, 0, 3));
  // Get the next 3 numbers and join them together
  $prefix = implode('', array_slice($numbers, 3, 3));
  // Get the last 4 numbers and join them together
  $lineNumber = implode('', array_slice($numbers, 6));

  // Return the formatted phone number
  return "($areaCode) $prefix-$lineNumber";
}

// Solution 2
function formatPhoneNumber2($numbers) {
  // Join all the numbers together
  $formatted = implode('', $numbers);
  // Return the formatted phone number
  return "({$formatted[0]}{$formatted[1]}{$formatted[2]}) {$formatted[3]}{$formatted[4]}{$formatted[5]}-{$formatted[6]}{$formatted[7]}{$formatted[8]}{$formatted[9]}";
}

// Solution 3
// Arrow function with implicit return
$formatPhoneNumber = function ($numbers) {
  return "({$numbers[0]}{$numbers[1]}{$numbers[2]}) {$numbers[3]}{$numbers[4]}{$numbers[5]}-{$numbers[6]}{$numbers[7]}{$numbers[8]}{$numbers[9]}";
};

// Example usage:
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
echo formatPhoneNumber($numbers) . "\n";
?>
