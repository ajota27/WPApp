# Imagen oficial (la que DigitalOcean soporta bien)
FROM wordpress:6.5-php8.2-apache

# Hardening Apache SIN cambiar usuario
RUN echo "ServerTokens Prod" >> /etc/apache2/conf-available/security.conf \
 && echo "ServerSignature Off" >> /etc/apache2/conf-available/security.conf \
 && a2enconf security \
 && a2dismod autoindex

# Copiamos solo lo necesario del proyecto
COPY wp-content /var/www/html/wp-content

# PHP seguro (este archivo SI debe existir en tu repo)
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Permisos seguros (esto sí está permitido)
RUN chown -R www-data:www-data /var/www/html/wp-content \
 && find /var/www/html/wp-content -type d -exec chmod 755 {} \; \
 && find /var/www/html/wp-content -type f -exec chmod 644 {} \;

EXPOSE 80
CMD ["apache2-foreground"]