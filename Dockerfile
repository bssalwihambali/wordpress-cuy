
FROM wordpress:php8.0-apache

COPY ./custom-php.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html
COPY ./wp-config.php /var/www/html/wp-config.php
COPY ./.htaccess /var/www/html/.htaccess
COPY ./bss-sandbox-env-1-c5407de16323.json /var/www/html/bss-sandbox-env-1-c5407de16323.json
COPY ./wp-content /var/www/html/wp-content/
