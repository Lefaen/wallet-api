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
    cron  \
    && docker-php-ext-install -j$(nproc) iconv mbstring pdo pdo_pgsql zip gd\
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD php.ini /usr/local/etc/php.ini
ADD xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
ADD crontab /etc/cron.d/crontab
RUN chmod 0644 /etc/cron.d/crontab \
    && crontab /etc/cron.d/crontab \
    && touch /var/log/cron.log
WORKDIR /var/www