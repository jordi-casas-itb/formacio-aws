FROM php:8.0-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Copy code
COPY example.php /var/www/html/example.php

EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
