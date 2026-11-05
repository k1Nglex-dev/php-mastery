<?php

declare(strict_types=1);


// ========================================
// PHP MASTERY — PRACTICAL ASSESSMENT 01
// Exercise 1: User Registration Validator
// ========================================

// 1. User information
$name = 'Alex';
$age = '22';
$email = 'alex@example.com';
$isActive = true;
$result = true;

// 2. Validate age
$validatedAge = 0;
if (is_numeric($age)) {
    $validatedAge = $age;
}
// 3. Convert age to integer
if ($validatedAge >= 18 && $validatedAge < 120) {
    $validatedAge = (int) $validatedAge;
}
// 4. Validate email
$validatedEmail = filter_var($email, FILTER_VALIDATE_EMAIL);


// 5. Validate account status
if ($isActive) {
    $status = 'Activ';
} else {
    $status = 'Inactive';
}



// 6. Display user information
echo 'Name: ' . $name . PHP_EOL;
echo 'Age: ' . $validatedAge . PHP_EOL;
echo 'Email: ' . $validatedEmail . PHP_EOL;
echo 'Status: ' . $status . PHP_EOL;
if ($result === true) {
    echo 'Registration: Approved' . PHP_EOL;
} else {
    echo 'Registration: Rejected' . PHP_EOL;
}



// 7. Approve or reject registration
