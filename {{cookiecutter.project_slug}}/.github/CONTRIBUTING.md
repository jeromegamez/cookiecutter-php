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
5. Run the full local checks:

```shell
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

Run backward compatibility checks (Docker required):

```shell
composer test:bc
```

Run mutation tests:

```shell
composer test:mutation
```

Mutation testing in GitHub Actions is opt-in via `.github/workflows/mutation.yml` and runs only on `workflow_dispatch`.
You can tighten quality gates and enable dashboard publishing by configuring:

1. Repository variables:
   `INFECTION_MIN_MSI` and `INFECTION_MIN_COVERED_MSI` (defaults are `0` if unset).
2. Repository secret:
   `INFECTION_DASHBOARD_API_KEY` (or `STRYKER_DASHBOARD_API_KEY`) for Stryker Dashboard uploads.
3. `infection.json5.dist`:
   Uncomment and configure the `logs.stryker` logger (`badge` or `report`, not both).

Infection configuration in this template follows the recommended split:
commit `infection.json5.dist`, and use local `infection.json5` overrides (already ignored in `.gitignore`) when needed.

To inspect which files Infection will mutate (based on `source.directories` and `source.excludes`), run:

```shell
tools/infection config:list-sources
```

## PhpStorm Setup

In PhpStorm, configure quality tools with project-relative paths:

1. `Settings` -> `PHP` -> `Quality Tools` -> `PHPStan`
   `PHPStan path`: `$PROJECT_DIR$/tools/phpstan`
   `Configuration file`: `$PROJECT_DIR$/phpstan.neon.dist`
2. `Settings` -> `PHP` -> `Quality Tools` -> `PHP CS Fixer`
   `PHP CS Fixer path`: `$PROJECT_DIR$/tools/php-cs-fixer`
   `Ruleset`: `$PROJECT_DIR$/.php-cs-fixer.dist.php`

## CI Coverage and Codecov

The `code-coverage` job in `.github/workflows/ci.yml`:

- Caches PHPUnit static-analysis cache
- Warms the coverage cache
- Collects `build/test-results.xml` and `build/code-coverage.xml`

Optional Codecov upload steps are included in `.github/workflows/ci.yml` but commented out.
To enable Codecov:

1. Uncomment the two `Upload ... to Codecov.io` steps in `.github/workflows/ci.yml`.
2. Add a `CODECOV_TOKEN` repository secret.
