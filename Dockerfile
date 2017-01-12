FROM php:5-apache
MAINTAINER Stipe Kotarac "stipe@kotarac.net"

RUN apt-get -y update
RUN apt-get -y install libssl-dev git
RUN pecl install mongo
RUN docker-php-ext-enable mongo

RUN rm -rf /var/www/html
RUN git clone https://github.com/kotarac/rockmongo.git /var/www/html
COPY config.php /var/www/html/config.php

EXPOSE 80
