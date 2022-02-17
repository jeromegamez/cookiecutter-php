#!/usr/bin/env bash

mkdir -p .build/{phpstan,psalm,phpunit}

composer update
composer clean

git init -b main
git add -A
git commit -m "Initial commit"
