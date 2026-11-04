<?php

declare(strict_types=1);
$score = 120;

if ($score < 0 || $score > 100) {
    echo 'Invalid score';
} elseif ($score >= 90) {
    echo 'Excellent';
} elseif ($score >= 70) {
    echo 'Good';
} elseif ($score >= 50) {
    echo 'Passed';
} else {
    echo 'Failed';
}
