FROM php:latest

WORKDIR /var/www/html/

ADD requirements.txt /src/

ADD src/ /var/www/html/
