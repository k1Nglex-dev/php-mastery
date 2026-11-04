<?php

declare(strict_types=1);

$orders = [
    [
        'id' => 1,
        'customer' => 'Alex',
        'status' => 'confirmed',
        'items' => [
            ['name' => 'Laptop', 'quantity' => 1, 'price' => 3500],
            ['name' => 'Mouse', 'quantity' => 2, 'price' => 100],
        ],
    ],
    [
        'id' => 2,
        'customer' => 'Maria',
        'status' => 'pending',
        'items' => [
            ['name' => 'Monitor', 'quantity' => 2, 'price' => 1200],
        ],
    ],
    [
        'id' => 3,
        'customer' => 'Andrei',
        'status' => 'confirmed',
        'items' => [
            ['name' => 'Keyboard', 'quantity' => 3, 'price' => 250],
        ],
    ],
];

function calculateOrderTotal(array $order): int
{
    $total = 0;
    foreach ($order['items'] as $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return $total;
}

$totalRevenue = 0;
$confirmedCount = 0;
$pendingCount = 0;

foreach ($orders as $order) {
    if ($order['status'] === 'confirmed') {
        $orderTotal = calculateOrderTotal($order);
        $totalRevenue += $orderTotal;
        $confirmedCount++;
        echo 'Comanda ' . $order['id'] . ' - ' . $order['customer'] . PHP_EOL;
        echo 'Total: ' . $orderTotal . PHP_EOL;
        echo PHP_EOL;
    } elseif ($order['status'] === 'pending') {
        $pendingCount++;
    }
}

echo 'Venit total: ' . $totalRevenue . PHP_EOL;
echo 'Comenzi confirmate: ' . $confirmedCount . PHP_EOL;
echo 'Comenzi in asteptare: ' . $pendingCount . PHP_EOL;
