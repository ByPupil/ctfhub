FROM eboraas/apache-php:latest

COPY src/ /var/www/html/

RUN rm /var/www/html/index.html \
	&& chmod -R 655 /var/www/html \
