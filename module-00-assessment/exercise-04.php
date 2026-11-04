<?php

declare(strict_types=1);

// ============================================================
// ASSESSMENT 04 - ORDERS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. SAMPLE ORDERS
// Orders with statuses and line items.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. SAMPLE ORDERS ==========' . PHP_EOL;

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

// ------------------------------------------------------------
// 02. ORDER TOTAL FUNCTION
// Sum quantity multiplied by price for every item.
// ------------------------------------------------------------
function calculateOrderTotal(array $order): int
{
    $total = 0;
    foreach ($order['items'] as $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return $total;
}

// ------------------------------------------------------------
// 03. REVENUE TRACKING
// Count confirmed and pending orders.
// ------------------------------------------------------------
echo PHP_EOL . '========== 03. REVENUE TRACKING ==========' . PHP_EOL;

$totalRevenue = 0;
$confirmedCount = 0;
$pendingCount = 0;

// ------------------------------------------------------------
// 04. PROCESS ORDERS
// Include only confirmed orders in revenue.
// ------------------------------------------------------------
echo PHP_EOL . '========== 04. PROCESS ORDERS ==========' . PHP_EOL;

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

// ------------------------------------------------------------
// 05. ORDER SUMMARY
// Display revenue and order counts.
// ------------------------------------------------------------
echo PHP_EOL . '========== 05. ORDER SUMMARY ==========' . PHP_EOL;

echo 'Venit total: ' . $totalRevenue . PHP_EOL;
echo 'Comenzi confirmate: ' . $confirmedCount . PHP_EOL;
echo 'Comenzi in asteptare: ' . $pendingCount . PHP_EOL;
