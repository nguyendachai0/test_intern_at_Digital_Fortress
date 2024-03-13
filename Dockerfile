FROM php:8.0-apache
WORKDIR /var/www/html
COPY ./ ./
EXPOSE 80

# docker build -t my-php-site:latest .
# docker run -d -p 80:80 my-php-site:latest
# http://localhost/name_file.php