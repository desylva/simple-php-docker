FROM php:7.1.8-apache

WORKDIR /var/www/html/

ADD requirements.txt /src/

ADD src/ /var/www/html/
