FROM php:8.2-apache

# Instalamos la extensión que falta
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos tus archivos
COPY . /var/www/html/

# Le damos permisos a WordPress
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80