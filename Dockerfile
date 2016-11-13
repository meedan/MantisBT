FROM php:5.6-apache
MAINTAINER Karim Ratib <karim@meedan.com>

RUN set -xe \
    && apt-get update \
    && apt-get install -y libpng12-dev libjpeg-dev libpq-dev libxml2-dev \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install mysqli pdo_mysql gd soap \
    && rm -rf /var/lib/apt/lists/*

RUN set -xe \
    && ln -sf /usr/share/zoneinfo/America/Vancouver /etc/localtime \
    && echo 'date.timezone = "America/Vancouver"' > /usr/local/etc/php/php.ini

COPY ./ /var/www/html
