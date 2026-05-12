FROM php:8.2-cli

# Instalamos la extensión mysqli que nos dio problemas al inicio
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos tus archivos
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

# El comando mágico para encender el servidor sin Apache
CMD [ "php", "-S", "0.0.0.0:80" ]

EXPOSE 80