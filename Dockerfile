# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy your PHP code into the container
COPY index.php /var/www/html/

# Optional: Expose port 80 (usually default)
EXPOSE 80
