<?php

/** @noinspection DevelopmentDependenciesUsageInspection */

use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php80());

$config->getFinder()->in(__DIR__);

return $config;
