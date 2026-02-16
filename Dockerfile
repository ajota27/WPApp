FROM wordpress:php8.2-apache

# Instalar soporte MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar configuración segura
COPY wp-config-docker.php /var/www/html/wp-config.php

# Copiar contenido del sitio (tema, plugins, uploads)
COPY wp-content /var/www/html/wp-content

# Permisos correctos
RUN chown -R www-data:www-data /var/www/html/wp-content \
    && chmod -R 755 /var/www/html/wp-content

EXPOSE 80