# Stage 0: Build
FROM php:8.2-cli

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .



# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader


# Expose port
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
