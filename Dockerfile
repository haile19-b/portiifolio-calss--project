FROM php:8.2-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite
RUN a2enmod autoindex

# Copy Apache configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable the site configuration
RUN a2ensite 000-default

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
