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
composer test:all
```

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
composer lint
```

To apply automatic lint fixes:

```shell
composer lint:fix
```

To run only Composer manifest normalization checks:

```shell
composer lint:composer
composer lint:composer:fix
```

To run dependency boundary checks directly:

```shell
composer test:dependencies
composer test:require-checker
```

To run the backward-compatibility check (recommended after fetching tags):

```shell
composer test:bc
```

To run mutation testing:

```shell
composer test:mutation
```
