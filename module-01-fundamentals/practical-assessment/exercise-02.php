<?php

declare(strict_types=1);

// PHP Mastery — Practical Assessment
// Exercise 02: Online Store Order Processor

$orderTotal = 250.00;
$isPremiumCustomer = true;
$paymentStatus = 'paid';
$discountPercentage = null;
$finalTotal = null;
$premiumStatus = null;
$orderStatus = null;

$isValidOrder = $orderTotal > 0 && $paymentStatus === 'paid';


if (!$isValidOrder) {
    $discountPercentage = 0;
} elseif ($isPremiumCustomer && $orderTotal >= 200) {
    $discountPercentage = 0.15;
} elseif ($isPremiumCustomer && $orderTotal < 200) {
    $discountPercentage = 0.10;
} elseif (!$isPremiumCustomer && $orderTotal >= 300) {
    $discountPercentage = 0.05;
} else {
    $discountPercentage = 0;
}


if ($isValidOrder) {
    $finalTotal = $orderTotal - ($orderTotal * $discountPercentage);
    $orderStatus = 'Valid';
} else {
    $discountPercentage = 0;
    $orderStatus = 'Invalid';
}

$shippingStatus = match ($paymentStatus) {
    'paid' => 'Ready for shipping',
    'pending' => 'Awaiting payment',
    'failed' => 'Payment failed',
    default => 'Unknown payment status',
};

if ($isPremiumCustomer) {
    $premiumStatus = 'Premium';
} else {
    $premiumStatus = 'Normal Account';
}

echo 'Shipping: ' . $shippingStatus . PHP_EOL;
if ($isValidOrder) {
    echo 'Order total: ' . $orderTotal . ' RON' . PHP_EOL;
    echo 'Customer: ' . $premiumStatus . PHP_EOL;
    echo 'Payment status: ' . $paymentStatus . PHP_EOL;
    echo 'Discount: ' . $discountPercentage * 100 . '%' . PHP_EOL;
    echo 'Final total: ' . $finalTotal . ' RON' . PHP_EOL;
    echo 'Order: ' . $orderStatus . PHP_EOL;
} else {
    echo 'Final total: N/A' . PHP_EOL;
    echo 'Order: Invalid' . PHP_EOL;
}
