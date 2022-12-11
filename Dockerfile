# Use the official PHP image as the base for our Laravel project
FROM php:7.4-fpm
 
# Install system dependencies and enable PHP extensions
RUN apt-get update && apt-get install -y \
   build-essential \
   mariadb-client \
   libpng-dev \
   libjpeg62-turbo-dev \
   libfreetype6-dev \
   libmariadb-dev \
   libzip-dev \
   locales \
   zip \
   jpegoptim optipng pngquant gifsicle \
   vim \
   unzip \
   git \
   curl \
   wait-for-it
 
RUN docker-php-ext-install pdo pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
 
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
 
# Set the working directory to the project root
WORKDIR /var/www/html
COPY . /var/www/html
COPY .env.example /var/www/html/.env

# Install Laravel dependencies
RUN composer install
  
# Expose port 8000 and start PHP-FPM
EXPOSE 8000
CMD wait-for-it $DB_HOST:3306 -- bash -c "sleep 30 && php artisan migrate && php artisan key:generate && php artisan serve --host 0.0.0.0"
 

