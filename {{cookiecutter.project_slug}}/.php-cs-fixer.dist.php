<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setParallelConfig(
        PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect()
    )
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS2.0' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls',
        ],
        'no_unused_imports' => true,
        'php_unit_internal_class' => [
            'types' => ['abstract', 'final', 'normal'],
        ],
        'trim_array_spaces' => true,
    ])
    ->setFinder($finder);
