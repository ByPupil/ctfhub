FROM eboraas/apache-php:latest

COPY src/ /var/www/html/

RUN rm /var/www/html/index.html \
    && chmod -R 755 /var/www/html