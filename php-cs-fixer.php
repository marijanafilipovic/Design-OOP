<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src') // Adjust path as needed
    ->name('*.php');

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);
