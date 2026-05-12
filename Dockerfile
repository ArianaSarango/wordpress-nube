FROM php:8.2-apache

# Esta línea es la que arregla el error de la imagen:
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos tus archivos
COPY . /var/www/html/

# Le damos permisos para que WordPress pueda escribir
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80