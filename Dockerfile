FROM php:7.2-apache

# Instalar las dependencias de PHP
RUN apt-get update && apt-get upgrade -y

# Instalar las dependencias necesarias por separado para encontrar el error
RUN apt-get install -y curl git unzip libpng-dev libjpeg-dev libfreetype6-dev libzip-dev libicu-dev libxml2-dev

RUN apt-get install -y libssl-dev

# Habilitar los repositorios de PHP 7.2 si es necesario
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update

# Instalar las extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd mbstring pdo pdo_mysql mysqli zip intl xml openssl

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar los archivos del proyecto
COPY . /var/www/html

# Instalar las dependencias del proyecto con Composer
RUN composer install --no-dev --ignore-platform-reqs

# Exponer el puerto 80
EXPOSE 80

# Definir el comando por defecto
CMD ["apache2-foreground"]
