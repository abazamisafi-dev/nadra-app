FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip unzip git curl nodejs npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader

# 🔥 THIS IS THE FIX
RUN npm install
RUN npm run build

RUN cp .env.example .env && php artisan key:generate

EXPOSE 8080

CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t public"]