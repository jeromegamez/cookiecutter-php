#!/usr/bin/env bash

set -euo pipefail

composer install --no-interaction

bootstrap_tools="${COOKIECUTTER_BOOTSTRAP_TOOLS:-{{ cookiecutter.bootstrap_tools | lower }}}"
bootstrap_tools="$(printf '%s' "$bootstrap_tools" | tr '[:upper:]' '[:lower:]')"

if [[ "$bootstrap_tools" == "1" || "$bootstrap_tools" == "true" || "$bootstrap_tools" == "yes" || "$bootstrap_tools" == "on" ]]; then
    ./tools/phive install
    ./tools/composer --working-dir=tools/.phpstan install --no-interaction
    ./tools/composer --working-dir=tools/.rector install --no-interaction
    ln -snf phpunit tools/phpunit.phar
    ln -snf .phpstan/vendor/bin/phpstan tools/phpstan
fi

git init
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
