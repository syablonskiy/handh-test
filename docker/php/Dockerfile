FROM php:7.2-fpm

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update \
        && apt-get install -y zlib1g-dev git zip \
        && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

COPY . /app
WORKDIR /app

RUN composer install --prefer-source --no-interaction
