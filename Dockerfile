FROM php:8.2-apache

# Instalamos la extensión mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos tus archivos al servidor
COPY . /var/www/html/

# Ajustamos permisos para que WordPress no llore
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Exponemos el puerto 80
EXPOSE 80