# Cookiecutter PHP

[Cookiecutter] template to kickstart new PHP projects.

## Features

* Automated [Composer] Setup
* Testing and linting setup with [PHPStan], [PHPUnit], [Rector], [PHP CS Fixer], [Roave BC Check], and [Composer Normalize] (`composer test:all`)
* Ready-to-go GitHub Actions

## Quickstart

[Install Cookiecutter][Cookiecutter Installation Docs]:

```shell
$ pip install -U cookiecutter
# Or, on a mac with Homebrew
$ brew install cookiecutter
```

Generate a new PHP project:

```shell
$ cookiecutter gh:jeromegamez/cookiecutter-php
```

## Manual template checks

Use `ant` to generate test projects locally (non-interactive):

```shell
$ ant -f build.xml generate-test-project
$ ant -f build.xml generate-test-project-fixture
```

Generated output:

* `tests/generated/my-library` (from `generate-test-project`, using defaults from `cookiecutter.json`)
* `tests/generated/example-tools-library` (from `generate-test-project-fixture`, using explicit fixture values)

Each target cleans `tests/generated` before generating output.

## Demo

[![asciicast](https://asciinema.org/a/385151.svg)](https://asciinema.org/a/385151)

## User config

If you use this (or other) Cookiecutters a lot, you can override the defaults by having
a `.cookiecutterrc` file in your home directory:

```yml
default_context:
    full_name: "My full name"
    email: "me@example.com"
    github_username: "mygithubusername"
    github_repository_owner: "mygithubusername-or-org"
abbreviations:
    php: https://github.com/jeromegamez/cookiecutter-php
```

`github_repository_owner` defaults to `github_username` and can be used when the repository lives under an organization while sponsor/funding metadata should still use your personal username.

You can find more information at https://cookiecutter.readthedocs.io/en/latest/advanced/user_config.html

[Composer]: https://getcomposer.org/
[Cookiecutter]: https://github.com/cookiecutter/cookiecutter/
[Cookiecutter Installation Docs]: https://cookiecutter.readthedocs.io/en/latest/installation.html
[PHPStan]: https://phpstan.org/
[PHPUnit]: https://phpunit.de/
[Rector]: https://getrector.com/
[PHP CS Fixer]: https://cs.symfony.com/
[Roave BC Check]: https://github.com/Roave/BackwardCompatibilityCheck
[Composer Normalize]: https://github.com/ergebnis/composer-normalize
