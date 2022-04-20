#!/bin/sh

set -e

chown -R www-data:www-data /var/www/html

if [ -z "$1" ]
then
    exec apache2-foreground
else
    exec "$@"
fi

#EOF
