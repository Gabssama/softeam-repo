# Use the official PHP image as the base for our Laravel project
FROM php:7.4-fpm
 
# Install system dependencies and enable PHP extensions
RUN apt-get update && apt-get install -y \
   build-essential \
   mariadb-client \
   libpng-dev \
   libjpeg62-turbo-dev \
   libfreetype6-dev \
   locales \
   zip \
   jpegoptim optipng pngquant gifsicle \
   vim \
   unzip \
   git \
   curl
 
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
 
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
 
# Set the working directory to the project root
WORKDIR /var/www/html
 
# Clone the Git repository
RUN git clone https://github.com/Gabssama/softeam-repo.git .
 
 
# Install Laravel dependencies
RUN composer install
 
# Create a MySQL database and run migrations
RUN mysql -u root -e "CREATE DATABASE softeam"
RUN php artisan migrate
 
# Change ownership of the project directory to the www-data user and group
RUN chown -R www-data:www-data /var/www/html
 
# Expose port 9000 and start PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
 

