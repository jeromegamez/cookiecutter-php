# {{ cookiecutter.project_name }}

{{ cookiecutter.project_short_description }}

<!--
[![Current version](https://img.shields.io/packagist/v/{{ cookiecutter.composer_package_name }}.svg?logo=composer)](https://packagist.org/packages/{{ cookiecutter.composer_package_name }})
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/{{ cookiecutter.composer_package_name }})](https://packagist.org/packages/{{ cookiecutter.composer_package_name }})
[![Monthly Downloads](https://img.shields.io/packagist/dm/{{ cookiecutter.composer_package_name }}.svg)](https://packagist.org/packages/{{ cookiecutter.composer_package_name }}/stats)
[![Total Downloads](https://img.shields.io/packagist/dt/{{ cookiecutter.composer_package_name }}.svg)](https://packagist.org/packages/{{ cookiecutter.composer_package_name }}/stats)
[![Tests](https://github.com/{{ cookiecutter.composer_package_name }}/actions/workflows/tests.yml/badge.svg)](https://github.com/{{ cookiecutter.composer_package_name }}/actions/workflows/tests.yml)
-->

## Installation

```shell
composer require {{ cookiecutter.composer_package_name }}
```

## Running checks

```shell
ant -emacs setup
tools/composer test:all
```

`ant setup` installs PHAR tools with Phive, installs `tools/.phpstan` and `tools/.rector` dependencies, and creates `tools/phpunit.phar` and `tools/phpstan` symlinks.
Run all lint/check/test scripts via Composer (either `tools/composer ...` or a globally installed `composer ...`).

The full check suite includes:

- PHPUnit tests
- PHPStan static analysis
- Composer Dependency Analyser checks
- Composer Require Checker checks
- Composer Normalize check
- Backward Compatibility check
- Rector dry-run
- PHP CS Fixer check

To run only linting tools (Rector + PHP CS Fixer + Composer Normalize):

```shell
tools/composer lint
```

To apply automatic lint fixes:

```shell
tools/composer lint:fix
```

To run only Composer manifest normalization checks:

```shell
tools/composer lint:composer
tools/composer lint:composer:fix
```

To run dependency boundary checks directly:

```shell
tools/composer test:dependencies
tools/composer test:require-checker
```

To run the backward-compatibility check (recommended after fetching tags):

```shell
tools/composer test:bc
```

`test:bc` runs the check in Docker (`nyholm/roave-bc-check`), so Docker must be available.

To run mutation testing:

```shell
tools/composer test:mutation
```
