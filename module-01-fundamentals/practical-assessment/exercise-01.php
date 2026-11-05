<?php

declare(strict_types=1);


// ========================================
// PHP MASTERY — PRACTICAL ASSESSMENT
// Exercise 01: User Registration Validator
// ========================================

// 1. User information
$name = 'Alex';
$age = '22';
$email = 'alex@example.com';
$isActive = true;
$validatedAge = null;

// 2. Validate age
$ageIsNumeric = filter_var($age, FILTER_VALIDATE_INT);

// 3. Convert age to integer
if ($ageIsNumeric) {
    $validatedAge = (int) $age;
}

// 4. Validate age range
$ageIsInRange = $validatedAge >= 18 && $validatedAge <= 120;


// 5. Validate email
$emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

// 6. Validate account status
$accountIsValid  = $isActive === true;

// 7. Determine registration result
$isAccepted = $ageIsInRange && $emailIsValid && $accountIsValid;

// 8. Display output
if ($isAccepted) {
    echo 'Name: ' . $name . PHP_EOL;
    echo 'Age: ' . $age . PHP_EOL;
    echo 'Email: ' . $email . PHP_EOL;
    echo 'Status: Active' . PHP_EOL;
    echo 'Registration: Approved' . PHP_EOL;
} else {
    echo 'Registration: Rejected' . PHP_EOL;
}
