# mysql_install_db
openrc
touch /run/openrc/softlevel
/etc/init.d/mariadb setup
/etc/init.d/mariadb start

mysql -u root --skip-password -e "CREATE DATABASE $DB_NAME DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -u root --skip-password -e "CREATE USER '$DB_ROOT'@'%' IDENTIFIED BY '$DB_ROOT_PASSWORD';"
mysql -u root --skip-password -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_ROOT'@'%' WITH GRANT OPTION;"
mysql -u root --skip-password -e "FLUSH PRIVILEGES;"

/etc/init.d/mariadb stop

sed -i "s|.*bind-address\s*=.*|bind-address=0.0.0.0|g" /etc/my.cnf.d/mariadb-server.cnf
sed -i "s|.*skip-networking.*|skip-networking=false|g" /etc/my.cnf.d/mariadb-server.cnf

mysqld -u root --datadir=/var/lib/mysql/