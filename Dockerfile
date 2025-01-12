# Usa PHP 7.2 con Apache
FROM php:7.2-apache

# Instala dependencias del sistema
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
    zlib1g-dev \
    && apt-get clean

# Instala extensiones de PHP
RUN docker-php-ext-install gd mbstring pdo pdo_mysql mysqli zip intl xml openssl

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia las dependencias de Composer
COPY composer.json composer.lock /var/www/html/

# Instala dependencias del proyecto
RUN composer install --no-dev --ignore-platform-reqs

# Copia el resto del proyecto
COPY . /var/www/html/

# Habilita mod_rewrite
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Apache
CMD ["apache2-foreground"]
