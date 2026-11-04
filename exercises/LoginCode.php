<?php

// ============================================================
// EXERCISE - LOGIN ACCESS
// PHP Mastery - Educational examples
// ============================================================

// ------------------------------------------------------------
// 01. USER ACCESS CHECK
// Verify authentication, account status and ban status.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. USER ACCESS CHECK ==========' . PHP_EOL;

$isAuthenticated = true;
$isActive = true;
$isBanned = true;

if ($isAuthenticated && $isActive && !$isBanned) {
    echo 'Access granted';
} else {
    echo 'Access denied';
}
