# Usa una imagen base oficial de PHP con Apache
FROM php:7.2-apache

# Instala las dependencias necesarias para tu proyecto
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libssl-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd mbstring pdo pdo_mysql mysqli zip intl xml openssl

# Instalar Composer 2.7.7
RUN curl -sS https://getcomposer.org/download/2.7.7/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

# Establecer el directorio de trabajo donde se encuentra tu proyecto
WORKDIR /var/www/html

# Copiar el archivo composer.json y composer.lock para instalar dependencias
COPY composer.json composer.lock /var/www/html/

# Instalar las dependencias de PHP de Composer sin los paquetes de desarrollo
RUN composer install --no-dev

# Copiar el resto de los archivos del proyecto
COPY . /var/www/html/

# Habilitar el módulo rewrite de Apache para que funcione bien CodeIgniter
RUN a2enmod rewrite

# Exponer el puerto 80 para acceder a tu aplicación
EXPOSE 80

# Comando para iniciar Apache en segundo plano
CMD ["apache2-foreground"]
