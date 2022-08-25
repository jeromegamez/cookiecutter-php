#!/usr/bin/env bash

composer update -W
composer install-dev-tools

git init
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
