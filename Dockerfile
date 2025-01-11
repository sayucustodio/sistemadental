# Usa una imagen base con PHP 7.2 y Apache
FROM php:7.2-apache

# Instalar extensiones necesarias de PHP
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

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer una versión específica de Composer (compatible con PHP 7.2)
RUN composer self-update 1.10.17

# Verificar que Composer se haya instalado correctamente
RUN composer --version

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Establecer permisos para las carpetas necesarias
RUN chmod -R 775 /var/www/html/application/cache /var/www/html/application/logs /var/www/html/vendor

# Instalar las dependencias del proyecto
RUN composer install --no-dev --ignore-platform-reqs

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Definir el comando por defecto
CMD ["apache2-foreground"]

