FROM php:8.0.24RC1-fpm-bullseye

ENV TZ Asia/Tokyo

RUN apt update && \
apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.3 /usr/bin/composer /usr/bin/composer

WORKDIR /app
