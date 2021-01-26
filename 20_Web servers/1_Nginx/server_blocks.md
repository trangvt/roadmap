File path: nano  /etc/nginx/sites-available/mccp

http://nginx.org/en/docs/http/ngx_http_upstream_module.html


How To Set Up Nginx Server Blocks (Virtual Hosts) on Ubuntu 16.04
	https://www.digitalocean.com/community/tutorials/how-to-set-up-nginx-server-blocks-virtual-hosts-on-ubuntu-16-04
	$ sudo rm -rf  /etc/nginx/sites-enabled/default
------------------

	$ sudo rm -rf  /etc/nginx/sites-enabled/malay
	$ sudo ln -s /etc/nginx/sites-available/malay /etc/nginx/sites-enabled/
------------------

	$ sudo nginx -t
	https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-18-04

	nginx: [warn] conflicting server name "my-staging2.urbanfox.store" on 0.0.0.0:80, ignored
------------------

	$ sudo nano /etc/hosts
	127.0.0.1 my-staging2.urbanfox.store
------------------

	Check log
	$ sudo tail -n 20 /var/log/nginx/error.log