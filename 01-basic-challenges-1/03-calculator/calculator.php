<?php
// Solution 1
function calculator($num1, $num2, $operator) {
  // Declare a variable to store the result
  $result;

  // Use a switch statement to determine which operation to perform
  switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break; // Break out of the switch statement
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      $result = $num1 / $num2;
      break;
    default:
      // If the operator is not one of the above, throw an error
      throw new Exception('Invalid operator');
  }

  return $result;
}

// Solution 2
function calculator2($num1, $num2, $operator) {
  // Declare a variable to store the result
  $result;

  // Use if/else if/else statements to determine which operation to perform
  if ($operator === '+') {
    $result = $num1 + $num2;
  } else if ($operator === '-') {
    $result = $num1 - $num2;
  } else if ($operator === '*') {
    $result = $num1 * $num2;
  } else if ($operator === '/') {
    $result = $num1 / $num2;
  } else {
    // If the operator is not one of the above, throw an error
    throw new Exception('Invalid operator');
  }

  return $result;
}

// Testing the function
try {
  echo calculator(5, 3, '+'); // Output: 8
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
