#!/usr/bin/env bash

set -euo pipefail

composer update --with-all-dependencies --no-interaction --no-progress

git init
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
