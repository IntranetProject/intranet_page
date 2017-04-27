#!/bin/sh
apt-get update -y # To get the latest package lists
apt-get upgrade -y

apt-get install apache2 apache2-doc apache2-utils
apt-get install libapache2-mod-php5 php5 php-pear php5-xcache
apt-get install php5-mysql
apt-get install mysql-server mysql-client

cd /var/www
git clone https://github.com/IntranetProject/intranet_frontend.git
rm -rf var/www/html
mv var/www/intranet_frontend-mast var/www/html
#etc.
