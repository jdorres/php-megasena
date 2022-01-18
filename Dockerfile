FROM php:8.1-fpm

RUN apt-get update && apt-get install -y curl \ 
    vim \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    openssl \
    git

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

WORKDIR /opt/project