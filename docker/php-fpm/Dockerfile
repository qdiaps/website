FROM php:8.4-fpm-alpine

WORKDIR /var/www/html

COPY composer.json composer.lock ./
COPY ./docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN apk update
RUN apk add --update linux-headers
RUN apk add unzip git $PHPIZE_DEPS
RUN pecl install -o -f xdebug \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install