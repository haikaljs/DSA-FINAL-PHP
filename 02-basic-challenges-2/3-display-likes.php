<?php
function displayLikes($names) {
  // Get the length of the array
  $length = count($names);

  // Return the appropriate string based on the length of the array
  if ($length === 0) {
    return 'no one likes this';
  } else if ($length === 1) {
    return $names[0] . ' likes this';
  } else if ($length === 2) {
    return $names[0] . ' and ' . $names[1] . ' like this';
  } else if ($length === 3) {
    return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
  } else {
    return $names[0] . ', ' . $names[1] . ' and ' . ($length - 2) . ' others like this';
  }
}

// Testing the function
$names1 = [];
$names2 = ['John'];
$names3 = ['John', 'Jane'];
$names4 = ['John', 'Jane', 'Doe'];
$names5 = ['John', 'Jane', 'Doe', 'Mary', 'James'];

echo displayLikes($names1) . "\n"; // Output: no one likes this
echo displayLikes($names2) . "\n"; // Output: John likes this
echo displayLikes($names3) . "\n"; // Output: John and Jane like this
echo displayLikes($names4) . "\n"; // Output: John, Jane and Doe like this
echo displayLikes($names5) . "\n"; // Output: John, Jane and 3 others like this
?>
