<?php

declare(strict_types=1);

// ============================================================
// LESSON 02 - GRADING CONDITIONS
// PHP Mastery - Educational examples
// ============================================================
// ------------------------------------------------------------
// 01. IF / ELSEIF / ELSE
// Validate a score and select its grade.
// ------------------------------------------------------------
echo PHP_EOL . '========== 01. IF / ELSEIF / ELSE ==========' . PHP_EOL;

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
