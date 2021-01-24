#!/usr/bin/env bash

mkdir -p .build/{phpstan,psalm,phpunit}

composer update

git init

git add -A

git commit -m "Initial commit"
