FROM php:7.3-apache

RUN apt-get update
RUN apt-get -y install \
  curl \
  iputils-ping \
  net-tools \
  git \
  zip \
  unzip \
  wget \
  curl \
  vim \
  libpng-dev \
  libzip-dev
RUN curl --silent --show-error https://getcomposer.org/installer | php && mv composer.phar /usr/bin/composer \
  && composer global require hirak/prestissimo


RUN docker-php-ext-install gd zip pdo pdo_mysql
RUN a2enmod rewrite

EXPOSE 80
EXPOSE 443

