# Usa una imagen base con PHP 7.2 y Apache
FROM php:7.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd mbstring pdo pdo_mysql mysqli

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Establece permisos para las carpetas necesarias
RUN chmod -R 775 /var/www/html/application/cache /var/www/html/application/logs

# Instala las dependencias del proyecto
RUN composer install --no-dev --ignore-platform-reqs

# Habilita el módulo rewrite de Apache
RUN a2enmod rewrite

# Expone el puerto 80
EXPOSE 80

# Define el comando por defecto
CMD ["apache2-foreground"]
