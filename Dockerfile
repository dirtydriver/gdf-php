FROM php:7.0-apache
RUN apt-get update
RUN apt-get install git -y
RUN pecl install pdo
RUN cd /var/www/html && git clone https://github.com/dirtydriver/gdf-php.git && mv gdf-php/*php .

EXPOSE 80
WORKDIR /var/www/html