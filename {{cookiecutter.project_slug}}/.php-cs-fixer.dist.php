<?php

declare(strict_types=1);

use Beste\PhpCsFixer\Config\Factory;
use Beste\PhpCsFixer\Config\RuleSet\Php83;

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (Factory::fromRuleSet(new Php83()))
    ->setRiskyAllowed(true)
    ->setFinder($finder);
