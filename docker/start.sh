#!/bin/sh

docker-sync start

docker-compose up -d

#docker-compose exec php-fpm-sfb-2 npm run watch-poll
