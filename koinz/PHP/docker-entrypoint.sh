#!/bin/sh

composer install

# symfony server:ca:install

exec "$@"
