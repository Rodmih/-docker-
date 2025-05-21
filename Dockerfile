FROM php:7.4-apache

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql pgsql

COPY wait-for-it.sh /wait-for-it.sh
RUN chmod +x /wait-for-it.sh
CMD ["/wait-for-it.sh", "db:3306", "--", "/wait-for-it.sh", "postgres:5432", "--", "apache2-foreground"]
