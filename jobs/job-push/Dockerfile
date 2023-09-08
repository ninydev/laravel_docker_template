# Устанавливаем базовый образ PHP
FROM php:8.2-fpm

# Установка утилиты unzip
RUN apt-get update && apt-get install -y unzip


# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка дополнительных расширений PHP для Redis
RUN pecl install redis && docker-php-ext-enable redis
