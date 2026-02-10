# Cookiecutter PHP

[Cookiecutter] template to kickstart new PHP projects.

## Features

* Automated [Composer] Setup
* Testing and linting setup with [PHPStan], [PHPUnit], [Rector], [PHP CS Fixer], [Composer Dependency Analyser], and [Composer Require Checker] (`composer test:all`)
* Optional advanced quality gates with [Roave BC Check], [Infection], and [Composer Normalize]
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

Optional: bootstrap PHAR tools immediately after generation:

```shell
$ COOKIECUTTER_BOOTSTRAP_TOOLS=1 cookiecutter gh:jeromegamez/cookiecutter-php
```

You can also set `bootstrap_tools` when prompted. By default it is `false`.

## Manual template checks

Use `ant` to generate test projects locally (non-interactive):

```shell
$ ant -f build.xml generate-test-project
$ ant -f build.xml generate-test-project-fixture
```

Generated output:

* `tests/generated/default/my-library` (uses defaults from `cookiecutter.json`)
* `tests/generated/fixture/example-tools-library` (uses explicit fixture values)

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
abbreviations:
    php: https://github.com/jeromegamez/cookiecutter-php
```

You can find more information at https://cookiecutter.readthedocs.io/en/latest/advanced/user_config.html

[Composer]: https://getcomposer.org/
[Cookiecutter]: https://github.com/cookiecutter/cookiecutter/
[Cookiecutter Installation Docs]: https://cookiecutter.readthedocs.io/en/latest/installation.html
[PHPStan]: https://phpstan.org/
[PHPUnit]: https://phpunit.de/
[Rector]: https://getrector.com/
[PHP CS Fixer]: https://cs.symfony.com/
[Composer Dependency Analyser]: https://github.com/shipmonk-rnd/composer-dependency-analyser
[Composer Require Checker]: https://github.com/maglnet/ComposerRequireChecker
[Roave BC Check]: https://github.com/Roave/BackwardCompatibilityCheck
[Infection]: https://infection.github.io/
[Composer Normalize]: https://github.com/ergebnis/composer-normalize
