FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    libxslt-dev \
    libmcrypt-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    gd \
    intl \
    xsl

RUN pecl install mcrypt redis && \
    docker-php-ext-enable mcrypt redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . /var/www

RUN composer install --optimize-autoloader --no-dev

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

RUN php artisan optimize:clear && \
    php artisan optimize && \
    php artisan storage:link

EXPOSE 8000

CMD ["php-fpm"]
