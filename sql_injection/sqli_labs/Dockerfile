FROM nickistre/centos-lamp:latest

COPY src/ /var/www/html/

RUN /etc/init.d/mysqld start \
    && mysqladmin -uroot password 'ctfhub' \
    && mysql -e "CREATE DATABASE security DEFAULT CHARACTER SET utf8;" -uroot -pctfhub \
    && rm /var/www/html/phpinfo.php \
    && chmod -R 777 /var/www/html/


