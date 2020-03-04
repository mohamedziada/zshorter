FROM php:7.4-fpm-alpine
LABEL Maintainer Mohamed Ziada <mohamedziada@gmail.com>
WORKDIR /var/www/html
RUN apk add --update coreutils
RUN docker-php-ext-install pdo pdo_mysql
#RUN docker-php-ext-configure intl && docker-php-ext-install intl

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
