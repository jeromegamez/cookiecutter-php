#!/usr/bin/env bash

composer update

git init -b main
git add -A
git commit -m "Initialize project with jeromegamez/cookiecutter-php"
