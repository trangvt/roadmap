Install composer globally
	https://getcomposer.org/doc/00-intro.md#globally

------------------------------------------------------------------------------------
Install PHP
	https://websiteforstudents.com/nginx-setup-with-php-7-1-on-ubuntu-18-04-lts-beta-server/
	$ sudo nano /etc/php/7.1/fpm/php.ini
		memory_limit = 2048M
		upload_max_filesize = 1024M
		max_execution_time = 3000

------------------------------------------------------------------------------------
Instal mysql
	https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04
	$ sudo service mysql restart
	$ systemctl restart mysql
	$ systemctl status mysql

------------------------------------------------------------------------------------
Get a certificate (HTTPS)
	https://certbot.eff.org/lets-encrypt/ubuntubionic-nginx
	Your certificate and chain have been saved at:
   	/etc/letsencrypt/live/my-staging2.urbanfox.store/fullchain.pem

	Your key file has been saved at:
   	/etc/letsencrypt/live/my-staging2.urbanfox.store/privkey.pem

------------------------------------------------------------------------------------
Set server blocks 
	https://www.digitalocean.com/community/tutorials/how-to-set-up-let-s-encrypt-with-nginx-server-blocks-on-ubuntu-16-04
	$ cat /etc/nginx/sites-available/malay

------------------------------------------------------------------------------------
Change user & group which run nginx & php
	$ sudo nano /etc/nginx/nginx.conf
	$ sudo nano /etc/php/7.1/fpm/pool.d/www.conf 

	Change www-data to ubuntu

------------------------------------------------------------------------------------
Nginx
	https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-18-04
	https://www.cyberciti.biz/faq/nginx-restart-ubuntu-linux-command/
	$ sudo service nginx restart
	$ sudo systemctl restart nginx
	$ sudo /etc/init.d/nginx restart

	$ tail -f /var/log/nginx/access.log
	$ tail -f /var/log/nginx/error.log