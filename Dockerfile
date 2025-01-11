# Usa PHP con Apache
FROM php:7.2-apache

# Instalar dependencias del sistema
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
    pkg-config \
    zlib1g-dev \
    && apt-get clean

# Instalar extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo pdo_mysql mysqli zip intl xml openssl

# Instalar Composer
RUN curl -sS https://getcomposer.org/download/2.7.7/composer.phar -o /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar dependencias de Composer
COPY composer.json composer.lock /var/www/html/

# Instalar dependencias de PHP
RUN composer install --no-dev --ignore-platform-reqs

# Copiar el resto del proyecto
COPY . /var/www/html/

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Iniciar Apache en primer plano
CMD ["apache2-foreground"]
