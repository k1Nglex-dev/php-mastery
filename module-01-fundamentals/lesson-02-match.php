<?php

declare(strict_types=1);

// ============================================================
// LESSON 02 - MATCH EXPRESSIONS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. ORDER STATUS
// Map order statuses to readable messages.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. ORDER STATUS ==========' . PHP_EOL;

$orderStatus = 'shipped';

$message = match ($orderStatus) {
    'pending' => 'Order pending',
    'processing' => 'Order processing',
    'shipped' => 'Order shipped',
    'delivered' => 'Order delivered',
    default => 'Unknown status',
};

echo $message . PHP_EOL;

// ------------------------------------------------------------
// 02. HTTP STATUS
// Group HTTP response codes by meaning.
// ------------------------------------------------------------
echo PHP_EOL . '========== 02. HTTP STATUS ==========' . PHP_EOL;

$httpStatus = 999;

$stsMsg = match ($httpStatus) {
    200 => 'Success',
    201 => 'Resource created',
    400, 422 => 'Client error',
    401, 403 => 'Access denied',
    404 => 'Not found',
    500, 503 => 'Server error',
    default => 'Unknown HTTP status',
};

echo $stsMsg . PHP_EOL;
