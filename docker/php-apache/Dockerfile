FROM php:5.6-apache

WORKDIR "/src"

# Install php extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli \
    && pecl install xdebug-2.5.5 \
    && docker-php-ext-enable xdebug

# Workaround for write permission on write to volumes
RUN usermod -u 1000 www-data

# Enable Apache module
RUN a2enmod rewrite

# Enable Apache module
RUN a2enmod headers

# Enable Apache module
RUN a2enmod expires

# Configure Apache VHOSTS
ADD sites-available/mysite.com.conf /etc/apache2/sites-available
RUN a2ensite mysite.com.conf

# Activate Apache modules
RUN service apache2 restart