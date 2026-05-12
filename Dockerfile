FROM php:8.2-cli

# Instalamos la extensión mysqli que nos pedía WordPress
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos tus archivos al servidor
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

# Encendemos el servidor igual que en tu compu (puerto 80)
CMD [ "php", "-S", "0.0.0.0:80" ]

EXPOSE 80