FROM php:7.4-apache
RUN apt-get update
RUN mkdir -p /var/www/html/ && \
    chown -R www-data:www-data /var/www/html/
COPY src/ /var/www/html/
EXPOSE 80
CMD apache2-foreground
