<?php
// Solution 1
function validateEmail($email) {
    // Create a regular expression to match the email format
    $emailRegex = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';
    // Return whether the email matches the regular expression
    return preg_match($emailRegex, $email);
}

// Solution 2
function validateEmail2($email) {
    // Check if the email contains the "@" symbol
    if (strpos($email, '@') === false) {
        return false;
    }

    // Split the email into the local part and domain
    list($localPart, $domain) = explode('@', $email);

    // Check if the local part and domain meet the minimum length requirements
    if (strlen($localPart) === 0 || strlen($domain) < 3) {
        return false;
    }

    // Check if the domain extension consists of at least two characters
    $domainExtension = explode('.', $domain);
    if (count($domainExtension) < 2 || strlen($domainExtension[1]) < 2) {
        return false;
    }

    // If all checks pass, return true
    return true;
}

// Example usage:
$email1 = "example@example.com";
$email2 = "invalid.email@domain";
var_dump(validateEmail($email1)); // Output: bool(true)
var_dump(validateEmail($email2)); // Output: bool(false)
?>
