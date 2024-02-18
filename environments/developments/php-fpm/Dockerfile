FROM php:8.2.16-fpm

RUN apt -y update && apt -y upgrade

RUN apt install unzip

# Composer
COPY --from=composer:2.7.1 /usr/bin/composer /usr/bin/composer

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

WORKDIR /app
