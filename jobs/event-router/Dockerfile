# Устанавливаем базовый образ PHP
FROM php:8.2-fpm

# Установка утилиты unzip
RUN apt-get update && apt-get install -y unzip

# Установка PostgreSQL клиента и расширения PDO для PostgreSQL
RUN apt-get update && apt-get install -y postgresql-client libpq-dev

# Устанавливаем необходимые расширения PHP, включая pdo_pgsql
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql

# Установка дополнительных расширений PHP для Redis
RUN pecl install redis && docker-php-ext-enable redis

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копирование и установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копирование и установка зависимостей PHP
COPY ./src /var/www/html
RUN composer install
