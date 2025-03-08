FROM php:8.4-fpm-alpine

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN apk update
RUN apk add unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install