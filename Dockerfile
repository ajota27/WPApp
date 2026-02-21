#CONFIGURACION INSEGURA
# Usamos la imagen oficial de WordPress con PHP 8.2 y Apache
FROM wordpress:6.5-php8.2-apache

# Copiamos solo wp-content y .htaccess
COPY wp-content /var/www/html/wp-content
COPY wp-config-sample.php /var/www/html/wp-config.php

# Opcional: PHP.ini personalizado
COPY php.ini /usr/local/etc/php/conf.d/

# Ajustamos permisos
RUN chown -R www-data:www-data /var/www/html/wp-content

# Exponemos puerto 80
EXPOSE 80

# Comando por defecto (ya viene en la imagen de WordPress)
CMD ["apache2-foreground"]

#FROM wordpress:6.5-php8.2-apache

# Crear usuario no-root
#RUN useradd -u 1001 -m wordpressuser

# Cambiar permisos
#RUN chown -R wordpressuser:wordpressuser /var/www/html

#USER wordpressuser
