FROM jkaninda/nginx-php-fpm:8.3
# Copy project files
COPY ./src /var/www/html
# Storage Volume
VOLUME /var/www/html/storage

WORKDIR /var/www/html

# Fix permissions
RUN chown -R www-data:www-data /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage
USER www-data

