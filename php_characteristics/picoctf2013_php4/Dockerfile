FROM nickistre/centos-lamp:latest

COPY src/ /var/www/html/

RUN /etc/init.d/mysqld start \
    && mysqladmin -uroot password 'ctfhub' \
    && mysql -e "CREATE DATABASE ctfhub DEFAULT CHARACTER SET utf8;" -uroot -pctfhub \
    && mysql -e "use ctfhub;source /var/www/html/ctfhub.sql;" -uroot -pctfhub \
    && rm /var/www/html/ctfhub.sql \
    && rm /var/www/html/phpinfo.php \
    && chmod -R 655 /var/www/html/


