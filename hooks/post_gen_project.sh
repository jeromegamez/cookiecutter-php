#!/usr/bin/env bash

set -euo pipefail

composer update -W --no-interaction --no-progress

git init
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
