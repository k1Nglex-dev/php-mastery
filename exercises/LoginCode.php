<?php

$isAuthenticated = true;
$isActive = true;
$isBanned = true;

if ($isAuthenticated && $isActive && !$isBanned) {
    echo 'Access granted';
} else {
    echo 'Access denied';
}
