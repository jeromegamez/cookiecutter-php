# Contributing to {{ cookiecutter.project_name }}

## Welcome

We look forward to your contributions. You can help by:

- [Reporting a bug](https://github.com/{{ cookiecutter.composer_package_name }}/issues/new/choose)
- [Proposing an enhancement](https://github.com/{{ cookiecutter.composer_package_name }}/issues/new/choose)
- [Opening a pull request](https://github.com/{{ cookiecutter.composer_package_name }}/pulls)

## Code of Conduct

Please note that this project is released with a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). By participating in this project, you agree to abide by its terms.

## License of Contributions

When you submit code changes, your submissions are understood to be under the same [MIT License](../LICENSE) that covers this project.

## Workflow for Pull Requests

1. Fork the repository.
2. Create a branch from `main`.
3. Install tools and dependencies:

```shell
composer setup
```

4. Implement your change and add or update tests.
5. Install the BC checker and run the full local checks with PHP 8.5:

```shell
composer tools:bc:install
composer test:all
```

6. Open a pull request.

## Coding Guidelines

Use the repository tooling to enforce coding standards:

```shell
composer lint
composer lint:fix
```

Please make sure your pull request does not introduce style violations.

## Static Analysis

Run static analysis locally before opening a pull request:

```shell
composer analyze
```

## Additional Checks

Run only unit tests:

```shell
composer test:unit
```

Install and run backward compatibility checks with PHP 8.5
(repositories without tags are skipped):

```shell
composer tools:bc:install
composer test:bc
```

The BC checker is installed separately from `composer setup` because its locked
dependencies do not support PHP 8.6. Update it with `composer tools:bc:update`
under PHP 8.5. CI installs the same lockfile.

## PhpStorm Setup

In PhpStorm, configure Test Frameworks and quality tools with project-relative paths:

1. `Settings` -> `PHP` -> `Quality Tools` -> `PHPStan`
   `PHPStan path`: `$PROJECT_DIR$/tools/phpstan`
   `Configuration file`: `$PROJECT_DIR$/phpstan.neon.dist`
2. `Settings` -> `PHP` -> `Quality Tools` -> `PHP CS Fixer`
   `PHP CS Fixer path`: `$PROJECT_DIR$/tools/php-cs-fixer`
   `Ruleset`: `$PROJECT_DIR$/.php-cs-fixer.dist.php`
3. `Settings` -> `PHP` -> `Test Frameworks` -> `PHPUnit local`
   `Path to phpunit.phar`: `$PROJECT_DIR$/tools/phpunit`
   `Default configuration file`: `$PROJECT_DIR$/phpunit.dist.xml`

## CI Coverage and Codecov

The `code-coverage` job in `.github/workflows/ci.yml`:

- Caches PHPUnit static-analysis cache
- Warms the coverage cache
- Collects `build/test-results.xml` and `build/code-coverage.xml`

Optional Codecov upload steps are included in `.github/workflows/ci.yml` but commented out.
To enable Codecov:

1. Uncomment the two `Upload ... to Codecov.io` steps in `.github/workflows/ci.yml`.
2. Add a `CODECOV_TOKEN` repository secret.
