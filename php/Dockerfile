FROM php:8.1-fpm
RUN apt-get update && apt-get install -y \
    curl \
    wget \
    git \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpq-dev \
	libpng-dev \
	libonig-dev \
	libzip-dev \
	libmcrypt-dev \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo pdo_pgsql zip gd\
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD php.ini /usr/local/etc/php.ini
ADD xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
WORKDIR /var/www