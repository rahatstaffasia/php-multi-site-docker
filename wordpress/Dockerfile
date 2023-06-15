# Use the official PHP base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application code to the container
COPY . /var/www/html

# Install any additional dependencies specific to your application
RUN docker-php-ext-install pdo_mysql

# Set up Apache virtual host configuration
COPY wordpress.conf /etc/apache2/sites-available/wordpress.conf
RUN ln -s /etc/apache2/sites-available/wordpress.conf /etc/apache2/sites-enabled/wordpress.conf
RUN a2enmod rewrite

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
