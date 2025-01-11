# Usa una imagen base oficial de PHP con Apache
FROM php:7.2-apache

# Actualiza y asegura que todas las dependencias estén correctamente instaladas
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
    && apt-get clean

# Instala las extensiones de PHP necesarias
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd mbstring pdo pdo_mysql mysqli zip intl xml openssl \
    && docker-php-ext-enable gd mbstring pdo pdo_mysql mysqli zip intl xml openssl

# Instalar Composer versión 2.7.7
RUN curl -sS https://getcomposer.org/download/2.7.7/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar el archivo composer.json y composer.lock al contenedor
COPY composer.json composer.lock /var/www/html/

# Ejecutar Composer para instalar las dependencias de PHP
RUN composer install --no-dev

# Copiar el resto del proyecto al contenedor
COPY . /var/www/html/

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Iniciar Apache en primer plano
CMD ["apache2-foreground"]
