<?php

declare(strict_types=1);

$orderStatus = 'shipped';

$message = match ($orderStatus) {
    'pending' => 'Order pending',
    'processing' => 'Order processing',
    'shipped' => 'Order shipped',
    'delivered' => 'Order delivered',
    default => 'Unknown status',
};

echo $message . PHP_EOL;

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
