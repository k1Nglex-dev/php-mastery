<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/module-00-assessment')
    ->in(__DIR__ . '/module-01-fundamentals')
    ->in(__DIR__ . '/tests')
    ->name('*.php');

return (new Config())
    ->setRiskyAllowed(false)
    ->setLineEnding("\n")
    ->setRules([
        '@PER-CS' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'no_unused_imports' => true,
        'single_quote' => true,
        'trailing_comma_in_multiline' => true,
    ])
    ->setFinder($finder);
