FROM php:8.0.24RC1-fpm-bullseye

ENV TZ Asia/Tokyo

RUN apt update && \
apt install -y git unzip libzip-dev libicu-dev libonig-dev curl gnupg && \
docker-php-ext-install intl pdo_mysql zip bcmath && \
curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
apt install -y nodejs && \
npm install npm@latest -g

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.3 /usr/bin/composer /usr/bin/composer

WORKDIR /app
