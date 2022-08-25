<?php

/** @noinspection TransitiveDependenciesUsageInspection */
/** @noinspection DevelopmentDependenciesUsageInspection */

use Ergebnis\PhpCsFixer\Config\Factory;
use Beste\PhpCsFixer\Config\RuleSet\Php81;

$config = Factory::fromRuleSet(new Php81());

$config->getFinder()->in(__DIR__);

$config->setCacheFile(__DIR__ . '/.build/.php-cs-fixer.cache');

return $config;
