FROM php:5.6-apache

# Volume mountpoint
WORKDIR "/src"

# Install php extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli \
    && pecl install xdebug-2.5.5 \
    && docker-php-ext-enable xdebug

# Workaround for write permission on write to volumes
RUN usermod -u 1000 www-data

# Enable Apache modules
RUN a2enmod rewrite \
    && a2enmod headers \
    && a2enmod expires

# Configure Apache vhost
ADD sites-available/mysite.com.conf /etc/apache2/sites-available
RUN a2ensite mysite.com.conf \
 && a2dissite 000-default

# Activate Apache settings
RUN service apache2 restart