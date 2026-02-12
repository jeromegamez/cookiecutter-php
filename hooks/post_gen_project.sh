#!/usr/bin/env bash

set -euo pipefail

composer install --no-interaction
composer setup

git init
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
