FROM php:8.2-cli-alpine

# Install SQLite dependencies
RUN apk add --no-cache sqlite sqlite-dev

# Install PHP pdo_sqlite extension
RUN docker-php-ext-install pdo pdo_sqlite

# Copy composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy application files
COPY . .

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Expose port
EXPOSE 8000

# Start server
CMD ["sh", "-c", "php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000"]
