FROM php:7.4-fpm-alpine

WORKDIR /var/www

# update
RUN apk update
RUN apk upgrade

RUN apk add --no-cache openssl bash nodejs npm postgresql-dev
RUN docker-php-ext-install bcmath pdo pdo_pgsql

RUN apk add icu-dev postgresql-dev bzip2-dev libzip-dev libpng-dev jpeg-dev openldap-dev libxml2-dev oniguruma-dev net-snmp-dev git

# Enable dependencies
RUN docker-php-ext-install \
    bcmath \
    bz2 \
    ctype \
    exif \
    fileinfo \
    gd \
    intl \
    json \
    ldap \
    mbstring \
    mysqli \
    opcache \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    session \
    soap \
    sockets \
    snmp \
    tokenizer \
    xml \
    xmlrpc \
    zip

# GD JPEG
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd

# IMAP
RUN apk add imap-dev
RUN docker-php-ext-configure imap --with-imap --with-imap-ssl
RUN docker-php-ext-install imap

# ACPU
RUN apk add --update --no-cache --virtual .build-dependencies $PHPIZE_DEPS
RUN pecl install apcu
RUN docker-php-ext-enable apcu
RUN pecl clear-cache
RUN apk del .build-dependencies

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PERMISSIONS
RUN echo http://dl-2.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
RUN apk --no-cache add shadow && usermod -u 1000 www-data

COPY --chown=www-data:www-data . /var/www/

RUN composer install --working-dir=/var/www/app

USER www-data

EXPOSE 9000

ENTRYPOINT [ "php-fpm" ]
