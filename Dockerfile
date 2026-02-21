# Imagen oficial (estable y mantenida)
FROM wordpress:6.5-php8.2-apache

# Evita mostrar versión de Apache
RUN echo "ServerTokens Prod" >> /etc/apache2/conf-available/security.conf \
 && echo "ServerSignature Off" >> /etc/apache2/conf-available/security.conf \
 && a2enconf security

# Deshabilita módulos innecesarios
RUN a2dismod autoindex

# Copiamos SOLO el contenido necesario del proyecto
COPY wp-content /var/www/html/wp-content

# PHP endurecido
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Permisos mínimos necesarios
RUN chown -R www-data:www-data /var/www/html/wp-content \
 && find /var/www/html/wp-content -type d -exec chmod 755 {} \; \
 && find /var/www/html/wp-content -type f -exec chmod 644 {} \;

# Ejecutar como usuario no-root
USER www-data

EXPOSE 80

CMD ["apache2-foreground"]