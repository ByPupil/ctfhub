FROM eboraas/apache-php:latest

COPY src/ /var/www/html/
COPY flag.txt /flag.txt

RUN rm /var/www/html/index.html \
	&& chmod -R 755 /var/www/html
