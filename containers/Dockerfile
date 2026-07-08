# Dockerfile per a generar la imatge amb l'aplicació de Contactes
FROM php:8.5-apache

# Instal·lar les extensions per a Mysql I PHP en Apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Copiar el codi de l'aplicació a la carpeta del servidor web
COPY index.php /var/www/html/index.php
COPY db.php /var/www/html/db.php

# Publicar el puerto 80
EXPOSE 80

# Executar la comanda d'inici del servei Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]