https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts

1/ sudo nano /etc/apache2/sites-available/sf.local.conf
<VirtualHost *:80>
    ServerAdmin admin@mgt2.local
    ServerName mgt2.local
    ServerAlias www.mgt2.local
    DocumentRoot /var/www/html/magento2
    <Directory /var/www/html/magento2>
       AllowOverride All
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/mgt2.local.log
    CustomLog ${APACHE_LOG_DIR}/mgt2.local.log combined
</VirtualHost>

APACHE_LOG_DIR = /var/log/apache2
ServerAdmin: an email that the site administrator can receive emails through
ServerName: establishes the base domain

2/ sudo a2ensite sf.local.conf

3/ sudo service apache2 restart

4/ sudo nano /etc/hosts
	127.0.0.1	sf.local
---------------------------------------------

Trường hợp nhiều store

<VirtualHost *:80>
    ServerAdmin admin@mccp-admin.local
    ServerName eclub-mccp-admin.local
    ServerAlias www.eclub-mccp-admin.local
    DocumentRoot /var/www/html/mccp-admin
    SetEnv MAGE_RUN_CODE "eclub"
    SetEnv MAGE_RUN_TYPE "website"
    <Directory /var/www/html/mccp-admin>
       AllowOverride All
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/mccp-admin.local.log
    CustomLog ${APACHE_LOG_DIR}/mccp-admin.local.log combined
</VirtualHost>