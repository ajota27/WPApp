# Imagen oficial compatible con App Platform
FROM wordpress:6.5-php8.2-apache

# Solo copiamos contenido personalizado (NO wp-config)
COPY wp-content /var/www/html/wp-content

# PHP personalizado (si necesitas ajustes)
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Exponemos puerto estándar
EXPOSE 80