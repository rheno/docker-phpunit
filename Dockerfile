FROM php:latest

RUN apt-get update

RUN apt-get install -y git zip wget

RUN wget https://getcomposer.org/composer.phar && mv composer.phar /usr/local/bin/composer && chmod +x /usr/local/bin/composer

RUN pecl install xdebug

RUN docker-php-ext-enable xdebug
