#!/bin/sh

docker-compose exec db-pig-allowance-book psql -U postgres --command="create database pig_allowance_book"

docker-compose exec db-pig-allowance-book psql -U postgres --command="CREATE ROLE webapp WITH LOGIN PASSWORD 'webapp'"

docker-compose exec db-pig-allowance-book psql -U postgres --command="create database pig_allowance_book_test"

docker-compose exec php-fpm-pig-allowance-book php artisan migrate

docker-compose exec php-fpm-pig-allowance-book php artisan db:seed

docker-compose exec php-fpm-pig-allowance-book php artisan passport:client --password --name=password-user

docker-compose exec php-fpm-pig-allowance-book php artisan passport:keys

docker-compose exec db-pig-allowance-book psql -U webapp -d pig_allowance_book --command="update oauth_clients SET secret='fIHnsRRbMC6aodkoI81lDwUtrJc1OTM6iaB72iDe' WHERE id=1"