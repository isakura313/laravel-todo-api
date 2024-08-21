FROM php:8.2-fpm-alpine

# Install required extensions
RUN apk add --no-cache \
    curl \
    openssl \
    pcre \
    zlib \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    gd \
    g++

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install project dependencies
RUN composer install --no-interaction --no-ansi

# Expose container port
EXPOSE 8000
