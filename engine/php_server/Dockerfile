FROM php:7.1-apache

RUN apt-get update \
&& apt-get install -y \
libpng-dev \
aptitude \
libfreetype6-dev \
libjpeg62-turbo-dev \
libmcrypt-dev \
libbz2-dev \
libgmp-dev \
libzip-dev \
libc-client-dev \
libkrb5-dev \
libpspell-dev \
libmagickwand-dev \
nodejs \
libxslt-dev --no-install-recommends \
npm \
&& npm install express express-session mysql \
&& rm -r /var/lib/apt/lists/* \
&& apt-get upgrade -y
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ \
--with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) \
mysqli exif mbstring zip dba bz2 calendar bcmath gettext gmp intl pdo pdo_mysql pspell gd \
imap iconv mcrypt soap sockets sysvmsg sysvsem sysvshm wddx xmlrpc xsl
RUN pecl install imagick && docker-php-ext-enable imagick
RUN pecl install -o -f redis \
&& rm -rf /tmp/pear \
&& docker-php-ext-enable redis
RUN a2enmod rewrite