cd /var/www/
wp core download --allow-root

sed -i 's/;daemonize = yes/daemonize = no/g' /etc/php7/php-fpm.d/www.conf
echo "listen = 9000" >> /etc/php7/php-fpm.d/www.conf

sed -i "s|SED_DB_NAME|'$DB_NAME'|g" /var/www/wp-config.php
sed -i "s|SED_DB_ROOT|'$DB_ROOT'|g" /var/www/wp-config.php
sed -i "s|SED_DB_PASSWORD|'$DB_ROOT_PASSWORD'|g" /var/www/wp-config.php
sed -i "s|SED_DB_HOST_NAME|'$DB_HOST_NAME'|g" /var/www/wp-config.php
sed -i "s|SED_DOMAIN_NAME|$DOMAIN_NAME|g" /var/www/wp-config.php

wp core install --allow-root  --url=$DOMAIN_NAME \
                              --admin_user=$WP_ADMIN_USER \
                              --admin_password=$WP_ADMIN_USER_PASSWORD \
                              --admin_email=$WP_ADMIN_USER_EMAIL \
                              --title=$WP_TITLE

wp user create --allow-root $WP_USER $WP_USER_EMAIL --user_pass=$WP_USER_PASSWORD

/usr/sbin/php-fpm7 --nodaemonize
